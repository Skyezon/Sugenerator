<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internal extends Model
{
    //
    protected $fillable = [
        'name', 'role', 'token','motivation'
    ];
}
