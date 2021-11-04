<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiswaWali extends Model
{
    //
    protected $table = 'siswa_wali';
    protected $fillable = [
        'id', 'siswa_id', 'wali_id'
    ];

    // public function siswa()
    // {
    // 	return $this->hasMany('App\modelSiswa', 'model_siswas.id');
    // }

    public function wali()
    {
    	return $this->belongsTo('App\Wali', 'id');
    }
    public function siswa()
    {
    	return $this->belongsTo('App\ModelSiswa', 'id');
    }
}
