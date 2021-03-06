<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryDescription extends Model
{
    public function maincategory(){
        return $this->belongsTo('App\MainCategory','category_id');
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
