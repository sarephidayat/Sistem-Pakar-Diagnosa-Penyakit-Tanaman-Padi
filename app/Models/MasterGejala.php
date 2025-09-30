<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterGejala extends Model
{
    protected $table = 'master_gejala';
    protected $primaryKey = 'id_gejala';
    protected $fillable = ['kode_gejala', 'nama_gejala'];
}
