<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'bank';

    public $fillable = [
        'nama_bank', 
        'no_rek',
        'atas_nama',
        'cabang',
        'status'
    ];

    protected $hidden = [

    ];
}
