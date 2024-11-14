<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    // Role constants
    const ROLE_ADMIN = 'admin';
    const ROLE_TEACHER = 'teacher';
    const ROLE_PARENT = 'parent';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    // Check if the user has a specific role
    public function hasRole($role)
    {
        return $this->role === $role;
    }
}
