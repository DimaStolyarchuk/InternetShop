<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillable = ['image', 'name','description', 'price', 'action', 'priority'];
    protected $guarded = [];
}
