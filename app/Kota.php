<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'cities';

    protected $fillable = [
        'name'
    ];

    public function provinsi(){
        return $this->belongsTo('\App\Provinsi','province_id','id');
    }
}
