<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;
    protected $table = 'absensi';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id', 'check_in', 'check_out', 'tanggal'];

    public function Users() : BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }
}
