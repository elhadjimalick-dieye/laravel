<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCollecteur extends Model
{
    
protected $fillable = [
    'libelle'
  ];



  public function fournisseur()
  {
      return $this->hasMany('App\Fournisseur');
  }

}
