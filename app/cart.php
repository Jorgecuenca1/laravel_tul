<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    
    //
    protected $fillable = ['status'];
    
    public function products(){
        return $this->belongsToMany(product::class);
    }
}



