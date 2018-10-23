<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asocciates extends Model
{
    //
    protected $fillable = ['user_id','table_id','row_id'];
}
