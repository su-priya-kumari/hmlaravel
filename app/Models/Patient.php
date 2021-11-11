<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use Notifiable;

    protected $guard = 'patients';

    protected $fillable = [
        'firstname', 'lastname', 'contact', 'address', 'age', 'gender', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
