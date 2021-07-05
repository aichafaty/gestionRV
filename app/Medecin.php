<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    protected $fillable = array('nom','prenom','telephone');
    public static $rules = array('nom'=>'required|min:3',
                                'prenom' =>'required|min:3',
                                'telephone' =>'required|min:3'
                                );
    public function rendezVous()
    {
        return $this->hasMany('App\RendezVous');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
