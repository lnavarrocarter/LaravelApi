<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    //Declarin Protected VARIABLES

    protected $fillable = ['code', 'name','description','owner','user_id'];
}
