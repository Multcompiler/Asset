<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AircraftStore extends Model
{
    public function categories(){
        return $this->belongsTo('App\MainCategory');
    }
    public function descriptions(){
        return $this->belongsTo(CategoryDescription::class);
    }
    public function sub_descriptions(){
        return $this->belongsTo(SubCategoryDescription::class);
    }
}
