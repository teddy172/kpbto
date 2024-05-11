<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class odc extends Model
{
    use HasFactory;
    protected $table = 'ODC';
    protected $primaryKey = 'odc_id';
    protected $fillable = ['nama_odc', 'lokasi', 'kordinat', 'slot', 'sisa_slot', 'port', 'sisa_port', 'status'];

    //nama function== nama model yang terhubung
    public function Odps() : HasMany
    {
        return $this->hasMany(odp::class, 'odc_id');
    }
}
