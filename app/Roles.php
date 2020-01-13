<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','guard_name'
    ];


    public function user()
    {
        return $this->hasMany('App\User');
    }
}
