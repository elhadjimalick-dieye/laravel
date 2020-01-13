<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom','prenom','matricule','date_de_naissance','situation_mat','date_dentre','date_sorti','nombre_de_part','service_id'
    ];


    public function services()
    {
        return $this->belongsTo('App\Service');
    }

   
}
