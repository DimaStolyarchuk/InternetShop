<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['image', 'name', 'description', 'action', 'priority'];
    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function isCategorySelect($data)
    {
        foreach ($data as $value)
        {
            if ( $value['id'] == $this->id) {
                return true;
                break;
            }
        }
        return false;
    }
}
