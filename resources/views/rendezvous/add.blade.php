@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Formulaire d'ajout de rendezvous</div>

                    <div class="card-body">
                        @if (isset($confirmation))
                            @if($confirmation==1)
                                <div class="alert alert-success">Rendezvous ajouté</div>
                            @else
                                <div class="alert alert-danger">Rendezvous non ajouté</div>

                            @endif
                        @endif
                        <form method="POST" action="{{ url('rendezvous/persist') }}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="libelle">Libelle du Rendezvous</label>
                                <input class="form-control" type="text" name="libelle" id="libelle">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="date">Date du Rendezvous</label>
                                <input class="form-control" type="date" name="date" id="date">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="medecins_id">Medecin du Rendezvous</label>
                                <select class="form-control" name="medecin" id="medecin">
                                    <option value="0">Faite votre choix</option>
                                   @foreach($medecins  as $med)
                                        <option value="{{$med->id}}">{{$med->prenom}},{{$med->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="Envoyer" id="envoyer" value="Enregistrer">
                                <input type="submit" class="btn btn-danger" name="Annuler" id="annuler" VALUE="annule">

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
