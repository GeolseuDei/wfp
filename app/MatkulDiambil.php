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

    public function fpp()
    {
        return $this->belongsTo('App\fpp');
    }

    protected $fillable = ['status','kelas_id', 'mahasiswa_id', 'fpp_id'];
}
