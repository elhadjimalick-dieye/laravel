<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Fourniseurecuplast extends Model
{
    use SoftDeletes, Notifiable;


    protected $fillable = [
        'recuplast','fournisseur'
    ];



}
