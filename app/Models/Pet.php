<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'race_id',
        'categorie_id',
        'photo',
        'gender_id',
    ];

    // RELACION DE MASCOTA CON RAZA
    public function race()
    {
        return $this->belongsTo(Race::class, 'race_id', 'id');
    }
    
    // RELACION DE MASCOTA CON CATEGORIA
    public function Categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id', 'id');
    }

    // RELACION DE MASCOTA CON GENERO
    public function Gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id', 'id');
    }
}
