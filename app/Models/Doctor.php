<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use Notifiable;

    protected $guard = 'doctors';

    protected $fillable = [
        'firstname', 'lastname', 'clinic_id', 'gender', 'specialist', 'treatment', 'experience', 'designation', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
