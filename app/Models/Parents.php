<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Parents extends Model
{
    use HasFactory;

    // Table associated with the model
    protected $table = 'parents';

    // Primary key for the table
    protected $primaryKey = 'parentID';

    // Disable auto-incrementing (since you mentioned manually handling the parentID)
    public $incrementing = false;

    // Define the key type (since the primary key is not an integer)
    protected $keyType = 'int';

    // The attributes that are mass assignable
    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'gender',
        'phoneNumber',
        'occupation',
        'address',
        'religion',
        'creationDate',
        'lastLogin',
        'password',
        'token',
        'status',
    ];

    // Fields that should be automatically cast to native types
    protected $casts = [
        'creationDate' => 'datetime',
        'lastLogin' => 'datetime',
        'status' => 'boolean',
    ];

    /**
     * Define relationship with User model (for login credentials).
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'email', 'email'); // Assuming you're linking via email
    }
}


