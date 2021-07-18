<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactsMail extends Model
{
    protected $table = 'mails';
    protected $fillable = ['name', 'email', 'tel', 'message'];
    protected $guarded = [];
}
