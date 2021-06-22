<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'founded', 'description', 'image_path', 'user_id'];

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

    // Define a has one through relationship
    public function productionDate() {
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',
            'model_id'
        );
    }

    // Products
    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
