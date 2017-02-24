<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_lembur extends Model
{
    //
    protected $table = 'kategori_lemburs';
    protected $fillable = ['Kode_lembur', 'jabatan_id', 'golongan_id', 'Besaran_uang'];
    protected $visible = ['Kode_lembur', 'jabatan_id', 'golongan_id', 'Besaran_uang'];
    public $timestamps = true;

    public function Jabatan(){
    	return $this->belongsTo('App\Jabatan', 'jabatan_id');
    }
    public function Golongan(){
    	return $this->belongsTo('App\Golongan', 'golongan_id');
    }
    public function Lembur_pegawai(){
        return $this->hasMany('App\Lembur_pegawai', 'Kode_lembur_id');
    }
}
