<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fpp extends Model
{
    protected $fillable = ['nama','tgl_mulai', 'tgl_selesai', 'status','semester'];
}
