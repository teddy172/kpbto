<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tindakan extends Model
{
    use HasFactory;
    protected $table = 'tindakan';
    protected $primaryKey = 'id';
    protected $fillable = ['assurance_id', 'kategori', 'sub_kategori', 'RCA', 'keterangan'];

    public function tindakan() : BelongsTo
    {
        return $this->belongsTo(assurance::class, 'id');
    }
}
