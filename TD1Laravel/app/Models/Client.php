<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $primaryKey = 'numeroClient';

    protected $fillable = [
        'numeroClient',
        'nom',
        'email',
        'carteBancaire'
    ];

    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
