<?php
namespace App\Http\Controllers;

use App\Models\Parents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



class ParentController extends Controller
{
    public function index()
    {
        $parents = Parents::all(); // Use the correct model name 'Parents'
        return view('admin.parents.index', compact('parents'));
    }
    

    public function create()
    {
        return view('admin.parents.create');
    }

    public function store(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:60',
            'lastname' => 'required|string|max:60',
            'username' => 'required|string|max:60', // Ensure username is unique across both tables
            'email' => 'required|string|email|max:80|unique:parents,email|unique:users,email', // Ensure email is unique across both tables
            'gender' => 'nullable|in:Male,Female',
            'phoneNumber' => 'required|string|max:20',
            'occupation' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'religion' => 'nullable|string|max:255',
            'password' => 'required|string|min:6',
        ]);

        // Hash the password
        $hashedPassword = Hash::make($validatedData['password']);

        // Use transaction to ensure both insertions succeed or fail together
        DB::transaction(function () use ($validatedData, $hashedPassword) {
            // Insert into 'parents' table
            $parent = Parents::create([
                'firstname' => $validatedData['firstname'],
                'lastname' => $validatedData['lastname'],
                'username' => $validatedData['username'],
                'email' => $validatedData['email'],
                'gender' => $validatedData['gender'],
                'phoneNumber' => $validatedData['phoneNumber'],
                'occupation' => $validatedData['occupation'],
                'address' => $validatedData['address'],
                'religion' => $validatedData['religion'],
                'password' => $hashedPassword, // Store hashed password in 'parents' table
            ]);

            // Insert into 'users' table (Assuming 'users' table has the same structure)
            User::create([
                'name' => $parent->firstname . ' ' . $parent->lastname,
                
                'email' => $parent->email,
                'password' => $hashedPassword, // Use the same hashed password
                'role' => 'parent', // Optional: Add a role field if you have roles in your users table
            ]);
        });

        // Redirect with success message
        return redirect()->route('admin.parents.index')->with('success', 'Parent created successfully.');
    }

    public function edit($id)
    {
        $parent = Parents::find($id);
        return view('admin.parents.edit', compact('parent'));
    }

  



    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:parents,email,' . $id . ',parentID', // Use parentID here
            'phoneNumber' => 'required|string|max:15',
            
        ]);
    
        $parent = Parents::find($id);
        $parent->firstname = $request->firstname;
        $parent->lastname = $request->lastname;
        $parent->email = $request->email;
        $parent->phoneNumber = $request->phoneNumber;
        $parent->occupation = $request->occupation;
        $parent->address = $request->address;
        $parent->gender = $request->gender;
        $parent->religion = $request->religion;
    
        // Update password only if a new password is provided
        if ($request->password) {
            $user = User::where('username', $parent->username)->first();
            if ($user) {
                $user->password = Hash::make($request->password);
                $user->save();
            }
        }
    
        $parent->save();
    
        return redirect()->route('parents.index')->with('success', 'Parent details updated successfully.');
    }
    


    public function destroy($id)
    {
        $parent = Parents::findOrFail($id);
        $parent->delete();

        return redirect()->route('parents.index')->with('success', 'Parent deleted successfully.');
    }
}
