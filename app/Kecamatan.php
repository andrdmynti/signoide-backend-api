<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'districts';

    protected $fillable = [
        'name'
    ];

    public function kota(){
        return $this->belongsTo('\App\Kota','city_id','id');
    }
}
