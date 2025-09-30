<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterStatus extends Model
{
    protected $table = 'master_status';
    protected $primaryKey = 'id_status';
    protected $fillable = ['nama_status'];

    // Relasi ke detail_gejala
    public function detailGejala()
    {
        return $this->hasMany(DetailGejala::class, 'id_status', 'id_status');
    }
}
