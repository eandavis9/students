<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = "sections";

    public function grade(){

        return $this->belongsTo('App\Grade');
    }
    
}
