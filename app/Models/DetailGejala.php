<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailGejala extends Model
{
    use HasFactory;

    protected $table = 'detail_gejala';
    // Sesuaikan primary key jika berbeda
    protected $primaryKey = 'id_detail_gejala'; 
    
    protected $fillable = [
        'id_rule',
        'id_gejala'
        // jika ada kolom cf (certainty factor), tambahkan di sini
    ];

    /**
     * Relationship dengan rule
     */
    public function rule()
    {
        return $this->belongsTo(MasterRule::class, 'id_rule', 'id_rule');
    }

    /**
     * Relationship dengan gejala
     */
    public function gejala()
    {
        return $this->belongsTo(MasterGejala::class, 'id_gejala', 'id_gejala');
    }
}