<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterGejala extends Model
{
    use HasFactory;

    protected $table = 'master_gejala';
    protected $primaryKey = 'id_gejala';
    
    protected $fillable = [
        'pertanyaan'
        // tambahkan kolom lain sesuai struktur tabel Anda
    ];

    /**
     * Relationship dengan detail_gejala
     */
    public function detailGejala()
    {
        return $this->hasMany(DetailGejala::class, 'id_gejala', 'id_gejala');
    }

    /**
     * Relationship dengan rules melalui detail_gejala
     */
    public function rules()
    {
        return $this->belongsToMany(
            MasterRule::class,
            'detail_gejala',
            'id_gejala',
            'id_rule'
        );
    }
}