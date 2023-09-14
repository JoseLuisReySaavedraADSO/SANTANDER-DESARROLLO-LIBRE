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
        'category_id',
        'photo',
        'gender_id',
    ];

    /**
     * Relaciones uno a uno
     */
    public function race()
    {
        return $this->belongsTo(Race::class, 'race_id', 'id');
    }

    public function Categorie()
    {
        return $this->hasOne(Categorie::class);
    }

    public function Gender()
    {
        return $this->hasOne(Gender::class);
    }
}
