<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    protected $table = 'ukuran';

    protected $fillable = [
        'ukuran',
        'detail',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
