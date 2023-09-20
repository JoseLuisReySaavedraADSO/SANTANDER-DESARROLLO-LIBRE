<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
    ];

    // RELACION UNO A MUCHOS CON RAZA
    public function Race()
    {
        return $this->hasMany(Race::class);
    }
}
