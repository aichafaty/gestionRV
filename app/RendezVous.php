<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    protected $fillable = array('medecin','user','libelle','date',);
    public static $rules = array('medecin'=>'required|integer',
                            'user'=>'required|bigInteger',
                            'libelle'=>'required|min:20',
                            'date' =>'required|min:3'
                                );
    public function medecins()
    {
        return $this->belongsTo('App\Medecin');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
