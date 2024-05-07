<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class odc extends Model
{
    use HasFactory;
    protected $table = 'ODC';
    protected $primaryKey = 'odc_id';
    protected $fillable = ['nama_odc', 'lokasi', 'kordinat', 'slot', 'sisa_slot', 'port', 'sisa_port', 'status'];
}
