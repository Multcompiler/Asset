<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    public function categorydescription(){
        return $this->hasMany('App\CategoryDescription','category_id','id');
    }
    public function subdiscriptions(){
        return $this->hasMany('App\SubCategoryDescription','category_description_id','id');
    }
    public function aircrafts(){
        return $this->hasMany(AircraftStore::class);
    }
    public function armanents(){
        return $this->hasMany(ArmamentStore::class);
    }
    public function communications(){
        return $this->hasMany(CommunicationEquipmentStore::class);
    }
    public function engineering(){
        return $this->hasMany(EngineeringEquipmentStore::class);
    }
    public function explosives(){
        return $this->hasMany(ExplosiveStore::class);
    }
    public function plants(){
        return $this->hasMany(PlantStore::class);
    }
    public function vehicles(){
        return $this->hasMany(VehicleStore::class);
    }
}
