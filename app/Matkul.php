<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    public function kelas()
	{
		return $this->hasMany('App\Kelas');
	}

	protected $fillable = ['kode','nama', 'sks', 'id_jurusan', 'status', 'semester'];
}
