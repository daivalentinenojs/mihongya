<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'users';

    protected $fillable = [
        'uuid',
        'firstname',
        'lastname',
        'phone',
        'address',
        'email',
        'password',
        
        'line_id',
        'line_sub',
        'line_aud',
        'line_name',
        'line_picture',
        'line_email',
        'line_notify_token',

        'last_login_at',
        'confirm_at',
        'email_validation_at',

        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_validation_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return false;
    }
}
