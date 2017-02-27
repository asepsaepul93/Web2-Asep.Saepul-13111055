<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mhsw';
	protected $fillable = ['nama','nim','alamat'];
}
