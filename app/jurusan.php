<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    public function matkuls()
	{
		return $this->hasMany('App\Matkul');
	}
}
