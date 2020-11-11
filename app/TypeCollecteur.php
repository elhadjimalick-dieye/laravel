<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class TypeCollecteur extends Model
{
  use SoftDeletes, Notifiable;
    
protected $fillable = [
    'libelle'
  ];



  public function fournisseur()
  {
      return $this->hasMany('App\Fournisseur');
  }

}
