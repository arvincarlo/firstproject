<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'founded', 'description'];

    // used when not passing all values to the views
    // protected $hidden = ['updated_at'];

    public function carModels() {
        return $this->hasMany(CarModel::class);
    }

    public function headquarter() {
        return $this->hasOne(Headquarter::class);
    }

    // Define a has many through relationship
    public function engines() {
        return $this->hasManyThrough(
            Engine::class, 
            CarModel::class, 
            'car_id', // Foreign key on car model table
            'model_id' // Foreign key on engine table
        );
    }
}
