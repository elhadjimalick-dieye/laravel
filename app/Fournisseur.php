<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Fournisseur extends Model
{
    use SoftDeletes, Notifiable;
   
protected $fillable = [
    'avance','solde','id','nomComplet','contact','region','departement','commune','quartier','restant_du','numero','type'
  ];


  public function collecteRecuplasts()
  {
      return $this->hasMany('App\CollecteRecuplasts');
  }

  public function collectEntreprises()
  {
      return $this->hasMany('App\CollectEntreprise');
  }

  public function collectEntreprise()
  {
      return $this->belongsTo('App\CollectEntreprise');
  }
  public function type_collecteurs()
  {
      return $this->belongsTo('App\TypeCollecteur','type');
  }
}
