<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatkulDiambil extends Model
{
	public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
	
    public function mahasiswa()
    {
        return $this->belongsTo('App\Mahasiswa');
    }
}
