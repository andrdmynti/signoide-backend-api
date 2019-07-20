<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = 'villages';

    protected $fillable = [
        'name'
    ];

    public function kecamatan(){
        return $this->belongsTo('\App\Kota','district_id','id');
    }
}
