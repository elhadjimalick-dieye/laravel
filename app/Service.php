<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Service extends Model
{

    use SoftDeletes, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle','direction'
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function employes()
    {
        return $this->hasMany('App\Employe');
    }

}
