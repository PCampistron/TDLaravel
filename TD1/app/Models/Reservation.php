<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'codeReservation',
        'dateReservation',
        'dateAller',
        'dateRetour'
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function vehicules()
    {
        return $this->hasMany('App\Vehicule');
    }

    public function dossierLocation()
    {
        return $this->hasOne('App\DossierLocation');
    }
}
