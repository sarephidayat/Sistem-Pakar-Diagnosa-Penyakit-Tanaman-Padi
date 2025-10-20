<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterRule extends Model
{
    use HasFactory;

    protected $table = 'master_rule';
    protected $primaryKey = 'id_rule';

    protected $fillable = [
        'id_penyakit'
        // tambahkan kolom lain sesuai struktur tabel Anda
    ];

    /**
     * Relationship dengan penyakit
     */
    public function penyakit()
    {
        return $this->belongsTo(MasterPenyakit::class, 'id_penyakit');
    }

    public function gejalas()
    {
        return $this->belongsToMany(MasterGejala::class, 'master_rule', 'id_rule', 'id_penyakit');
    }

    /**
     * Relationship dengan detail_gejala
     */
    public function detailGejala()
    {
        return $this->hasMany(DetailGejala::class, 'id_rule', 'id_rule');
    }
}
