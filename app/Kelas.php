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

	protected $fillable = [
		'hari','jam_masuk', 'jam_keluar', 'kp', 'kapasitas','jml_mhs','ruang', 'matkul_id', 'dosen_id'
	];
}
