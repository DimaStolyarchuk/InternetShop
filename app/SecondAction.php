<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecondAction extends Model
{
    protected $table = 'second_action';
    protected $fillable = ['image', 'secondimage','name', 'secondname', 'description', 'price', 'action', 'priority'];
    protected $guarded = [];
}
