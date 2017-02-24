<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table = 'golongans';
    protected $fillable = ['Kode_golongan', 'Nama_golongan', 'Besaran_uang'];
    protected $visible = ['Kode_golongan', 'Nama_golongan', 'Besaran_uang'];
    public $timestamps = true;

    public function Kategori_lembur(){
    	return $this->hasMany('App\Kategori_lembur', 'golongan_id');
    }
    public function Pegawai(){
        return $this->hasMany('App\Pegawai', 'golongan_id');
    }
    public function Tunjangans(){
        return $this->hasMany('App\Tunjangans', 'golongan_id');
    }
}
