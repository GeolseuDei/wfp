<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
	protected $fillable = ['kode','nama', 'sks', 'id_jurusan', 'status', 'semester'];

    public function kelas()
	{
		return $this->hasMany('App\Kelas');
	}

	public function jurusan()
    {
        return $this->belongsTo('App\jurusan');
    }
}
