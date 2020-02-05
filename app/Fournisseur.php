<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
   
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
