<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'admin';
    protected $guard = 'admin';
    protected $primaryKey = 'id';
    protected $fillable = [
        'admin_name',
        'admin_email',
        'password',
        'admin_NIP',
        'nomer_telepon_admin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getAuthPassword()
    {
        return $this->password; // Kolom password harus bernama "password"
    }
}
