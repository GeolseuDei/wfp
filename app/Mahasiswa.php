<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function matkuldiambils()
	{
		return $this->hasMany('App\MatkulDiambil');
	}

	protected $fillable = ['nrp','nama', 'ips', 'ipk', 'maxsks', 'asdos','angkatan','user_id'];
}
