<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    protected $table = 'penggajian';
    protected $guarded = [];
    
    public function karyawan()
    {
        return $this->belongsTo('App\Karyawan', 'id_karyawan');
    }

}
