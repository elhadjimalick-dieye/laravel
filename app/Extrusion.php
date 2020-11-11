<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class Extrusion extends Model
{

    use SoftDeletes, Notifiable;

    protected $fillable = [
    'extrusion',
    'pehdsouflagebleu',
    'pehdsouflageblanc',
    'pehdsouflagejaune',
    'pehdsouflagevert',
    'pehdsouflageneutre',
    'pehdsouflagerouge',
    'pehdsouflagejadida',
    'pehdsouflagemaron',
    'pehdsouflagenoire',
    'pehdsouflagemulti',

    'pehdsouflagebleurestant',
    'pehdsouflageblancrestant',
    'pehdsouflagejaunerestant',
    'pehdsouflagevertrestant',
    'pehdsouflageneutrerestant',
    'pehdsouflagerougerestant',
    'pehdsouflagejadidarestant',
    'pehdsouflagemaronrestant',
    'pehdsouflagenoirerestant',
    'pehdsouflagemultirestant',

    'pehdsouflagesacbleu',
    'pehdsouflagesacblanc',
    'pehdsouflagesacjaune',
    'pehdsouflagesacvert',
    'pehdsouflagesacneutre',
    'pehdsouflagesacrouge',
    'pehdsouflagesacjadida',
    'pehdsouflagesacmaron',
    'pehdsouflagesacnoire',
    'pehdsouflagesacmulti',
    'pehdsouflagesac',
    
    'effectifextru',
   


    'decheextrusion',
    'date'

];

}
