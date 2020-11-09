<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Clients extends Model
{
    use SoftDeletes, Notifiable;
   
protected $fillable = [
    
    'totaleachete',
    'id',
    'nomComplet',
    'contact',
    'quantitetotale',
    'creance',
    'restant_du',
    'matricule',
    'adresse',

 
  ];


  public function achats()
  {
      return $this->hasMany('App\Achats');
  }

}
