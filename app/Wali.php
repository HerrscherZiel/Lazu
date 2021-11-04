<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    //
    protected $fillable = [
        'id', 'file', 'tanggal_lahir'
    ];

    // public function siswa()
    // {
    // 	return $this->hasMany('App\modelSiswa', 'model_siswas.id');
    // }

    public function user()
    {
    	return $this->belongsTo('App\User', 'id');
    }

    // public function rapor()
    // {
    // 	return $this->hasOne('App\Rapor', 'wali_id');
    // }
}
