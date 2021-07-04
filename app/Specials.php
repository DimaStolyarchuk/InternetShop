<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specials extends Model
{

    protected $fillable = ['image', 'title','description', 'action', 'priority'];
    protected $guarded = [];
}
