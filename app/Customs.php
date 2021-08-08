<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customs extends Model
{
    protected $fillable = ['name', 'tel','email'];
    protected $guarded = [];
}
