<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tunjangans extends Model
{
    //
    protected $table = 'tunjangans';
    protected $fillable = ['Kode_tunjangan', 'jabatan_id', 'golongan_id', 'Status', 'Jumlah_anak', 'Besaran_uang'];
    protected $visible = ['Kode_tunjangan', 'jabatan_id', 'golongan_id', 'Status', 'Jumlah_anak', 'Besaran_uang'];
    public $timestamps = true;


    public function Jabatan(){
    	return $this->belongsTo('App\Jabatan', 'jabatan_id');
    }
    public function Golongan(){
    	return $this->belongsTo('App\Golongan', 'golongan_id');
    }
    public function Tunjangan_pegawai(){
        return $this->hasMany('App\Tunjangan_pegawai', 'Kode_tunjangan_id'); 
    }
}
