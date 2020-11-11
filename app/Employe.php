<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Employe extends Model
{

    use SoftDeletes, Notifiable;

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

    public function service()
    {
        return $this->belongsTo('App\Service','service_id');
    }
    

}
