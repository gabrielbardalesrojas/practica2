<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Animal extends Model
{
    protected $fillable = [
        'nombre',
        'edad',
        'sexo',
        'especie_id',
    ];

    public function recinto()
    {
        return $this->belongsTo('App\Models\Recinto');
    }

    public function animalcuidador()
    {
        return $this->belongsTo('App\Models\AnimalCuidador');
    }
}
