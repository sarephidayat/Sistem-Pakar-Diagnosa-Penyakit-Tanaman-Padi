<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterRule extends Model
{
    protected $table = 'master_rule';
    protected $primaryKey = 'id_rule';
    protected $fillable = ['id_penyakit'];

    // relasi ke penyakit
    public function penyakit()
    {
        return $this->belongsTo(MasterPenyakit::class, 'id_penyakit', 'id_penyakit');
    }

    // relasi ke detail rule (gejala2 yang terkait)
    public function detailGejala()
    {
        return $this->hasMany(DetailGejala::class, 'id_rule', 'id_rule');
    }
}
