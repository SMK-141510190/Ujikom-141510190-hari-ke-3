<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembur_pegawai extends Model
{
    //
    protected $table = 'lembur_pegawais';
    protected $fillable = ['Kode_lembur_id', 'pegawai_id', 'Jumlah_jam'];
    protected $visible = ['Kode_lembur_id', 'pegawai_id', 'Jumlah_jam'];
    public $timestamps = true;

    public function Kategori_lembur(){
    	return $this->belongsto('App\Kategori_lembur', 'Kode_lembur_id');
    }
    public function Pegawai(){
    	return $this->belongsto('App\Pegawai', 'pegawai_id');
    }
}
