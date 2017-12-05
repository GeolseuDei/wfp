<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fpp extends Model
{
	public function matkuldiambils()
	{
		return $this->hasMany('App\MatkulDiambil');
	}
	
    protected $fillable = ['nama','tgl_mulai', 'tgl_selesai', 'status','semester'];
}
