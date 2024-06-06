<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class odp extends Model
{
    use HasFactory;
    protected $table = 'ODP';
    protected $primaryKey = 'odp_id';
    protected $fillable = ['nama_odp', 'odc_id', 'lokasi', 'kordinat', 'port_terpakai', 'port', 'sisa_port', 'status', 'distribusi'];

    public function Odcs() : BelongsTo
    {
        return $this->belongsTo(odc::class, 'odc_id');
    }
}
