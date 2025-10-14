<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPenyakit extends Model
{
    use HasFactory;

    protected $table = 'master_penyakit';
    protected $primaryKey = 'id_penyakit';
    protected $fillable = ['kode_penyakit', 'nama_penyakit', 'solusi', 'deleted'];

    /**
     * Relationship dengan rules
     */
    public function rules()
    {
        return $this->hasMany(MasterRule::class, 'id_penyakit', 'id_penyakit');
    }

    /**
     * Relationship dengan gejala melalui rules
     */
    public function gejala()
    {
        return $this->hasManyThrough(
            MasterGejala::class,
            MasterRule::class,
            'id_penyakit',
            'id_gejala',
            'id_penyakit',
            'id_rule'
        );
    }
}