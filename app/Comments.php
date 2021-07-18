<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['name', 'title','comment', 'action', 'priority'];
    protected $guarded = [];
}
