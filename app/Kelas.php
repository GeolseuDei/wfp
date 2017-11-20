<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public function matkul()
	{
		return $this->belongsTo('App\Matkul');
	}

	public function dosen()
	{
		return $this->belongsTo('App\Dosen');
	}

	public function matkuldiambils()
	{
		return $this->hasMany('App\MatkulDiambil');
	}
}
