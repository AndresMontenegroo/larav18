<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = ['matricula','modelo','persona_id'];

    public function persona(){
        
        return $this->belongsTo(Persona::class);

    }

    public function accidentes(){

        return $this->hasMany(Accidente::class);
    }












}
