<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterPenyakit extends Model
{
    protected $table = 'master_penyakit';
    protected $primaryKey = 'id_penyakit';
    protected $fillable = ['kode_penyakit', 'nama_penyakit'];

    // relasi ke rule
    public function rules()
    {
        return $this->hasMany(MasterRule::class, 'id_penyakit', 'id_penyakit');
    }
}
