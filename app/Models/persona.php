<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;

    protected $fillable = ['cedula','nombre'];

    public function vehiculos(){

        return $this->hasMany(Vehiculo::class);

    }

    public function accidentes(){

        return $this->hasMany(Accidente::class);
    }












}
