<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'admins';
    
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

        'role_id',

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

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'uuid');
    }
}
