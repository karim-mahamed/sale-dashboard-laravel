<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
     protected $guarded = [];
    public $translatedAttributes = ['name'];
    
    public function products()
    {
        return $this->hasMany(Product::class);

    }

}
