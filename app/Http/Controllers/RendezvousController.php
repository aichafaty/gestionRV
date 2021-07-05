<?php

namespace App\Http\Controllers;

use App\Medecin;
use App\Rendezvous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RendezvousController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        //clé etrangé
        $medecins = Medecin::all();

        return view('rendezvous.add',['medecins'=>$medecins]);
    }




    public function getAll()
    {
        $medecins = Medecin::all();
        $liste_rendezvouss = Rendezvous::all();
        return view('rendezvous.list', ['liste_rendezvouss'=>$liste_rendezvouss] ,['medecins'=>$medecins]);
    }



    public function edit($id)
    {
        $rendezvous = Rendezvous::find($id);
        return view('rendezvous.edit',['rendezvous'=>$rendezvous]);
    }


    public function update(Request $request)
    {
        $rendezvous = Rendezvous::find($request->id);
        $medecins = Medecin::all();

        $rendezvous -> libelle = $request->libelle;
        $rendezvous ->date = $request->date;
        $rendezvous ->medecin = $request->medecin;
        $rendezvous ->user = Auth::id();

        $result = $rendezvous->save();
        return redirect("/rendezvous/getAll",['medecins'=>$medecins]);
    }



    public function delete($id)
    {
        $rendezvous =Rendezvous::find($id);

        if ($rendezvous != null)
        {
            $rendezvous ->delete();
        }
        return $this->getAll();
    }



    public function persist(Request $request)
    {


        $rendezvous = new Rendezvous();

        $rendezvous -> libelle = $request->libelle;
        $rendezvous ->date = $request->date;
        //dd($request->medeci);
        $rendezvous ->medecin = $request->medecin;

        $rendezvous ->user = Auth::id();

        $result = $rendezvous->save();
        $medecins = Medecin::all();
        return redirect("/rendezvous/getAll");
    }
}
