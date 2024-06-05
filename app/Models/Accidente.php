<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accidente extends Model
{
    use HasFactory;

    protected $fillable = ['hora','fecha','codigo','lugar','persona_id','vehiculo_id',];

    public function persona(){

        return $this->belongsTo(Persona::class);

    }

    public function vehiculo(){

        return $this->belongsTo(Vehiculo::class);
    }










}


