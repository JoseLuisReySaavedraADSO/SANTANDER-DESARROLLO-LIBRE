<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
    ];

    // RELACION UNO A MUCHOS CON MASCOTA
    public function pet()
    {
        return $this->hasMany(Pet::class);
    }
}
