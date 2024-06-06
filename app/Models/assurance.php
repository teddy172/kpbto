<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assurance extends Model
{
    use HasFactory;
    protected $table = 'assurance';
    protected $primaryKey = 'id';
    protected $fillable = ['teknisi_id', 'nama_pelanggan', 'alamat', 'no_telepon', 'no_incident', 'no_internet', 'keluhan', 'teknisi_berangkat', 'teknisi_tiba', 'waktu_estimasi', 'status'];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function tindakan() : HasOne
    {
        return $this->hasOne(tindakan::class, 'assurance_id'); 
    }
}
