<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailGejala extends Model
{
    protected $table = 'detail_gejala';
    protected $primaryKey = 'id_detail_gejala';
    protected $fillable = ['id_rule', 'id_gejala', 'id_status', 'bobot'];

    // Relasi ke rule
    public function rule()
    {
        return $this->belongsTo(MasterRule::class, 'id_rule', 'id_rule');
    }

    // Relasi ke gejala
    public function gejala()
    {
        return $this->belongsTo(MasterGejala::class, 'id_gejala', 'id_gejala');
    }

    // Relasi ke status
    public function status()
    {
        return $this->belongsTo(MasterStatus::class, 'id_status', 'id_status');
    }
}
