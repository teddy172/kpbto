<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class admin extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $fillable = [
        'admin_name',
        'admin_email',
        'admin_password',
        'admin_NIP',
        'nomer_telepon_admin',
    ];

    protected $hidden = [
        'admin_password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'admin_password' => 'hashed',
    ];
}
