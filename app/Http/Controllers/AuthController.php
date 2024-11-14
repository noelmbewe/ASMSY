<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            $request->session()->regenerate();

            return $this->authenticated($request, Auth::user());
        }

        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->hasRole('admin')) {
            return redirect()->route('admin.index');
        } elseif ($user->hasRole('teacher')) {
            return redirect()->route('teacher.index');
        } elseif ($user->hasRole('parent')) {
            return redirect()->route('parent.index');
        }

        return redirect('/'); // Default redirection if no role is matched
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
