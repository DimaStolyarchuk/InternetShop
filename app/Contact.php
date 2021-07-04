<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['image', 'title','description', 'action', 'priority'];
    protected $guarded = [];
}
