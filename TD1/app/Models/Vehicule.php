<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricule',
        'modele',
        'nombreDePlace',
        'prix',
        'disponibilite'
    ];

    public function reservations()
    {
        return $this->belongsToMany('App\Reservation');
    }
}
