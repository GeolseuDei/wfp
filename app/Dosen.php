<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    public function kelas()
	{
		return $this->hasMany('App\Kelas');
	}

	public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'nik', 'nama','user_id',
    ];
}
