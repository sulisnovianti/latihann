<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'siswa';
    protected $fillable = ['Nama','Alamat','Jk'];
    protected $visible = ['Nama','Alamat','jk'];
    public $timestamps = true;
}
