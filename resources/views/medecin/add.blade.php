@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Formulaire d'ajout de médecin</div>

                    <div class="card-body">
                        @if (isset($confirmation))
                            @if($confirmation==1)
                                <div class="alert alert-success">Médecin ajouté</div>
                                @else
                                <div class="alert alert-danger">Médecin non ajouté</div>

                            @endif
                        @endif
                        <form method="POST" action="{{ url('medecin/persist') }}">
                            @csrf
                        <div class="form-group">
                            <label class="control-label" for="nom">Nom du Médecin</label>
                            <input class="form-control" type="text" name="nom" id="nom">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="prenom">Prénom du Médecin</label>
                            <input class="form-control" type="text" name="prenom" id="prenom">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="telephone">Phone du Médecin</label>
                            <input class="form-control" type="text" name="telephone" id="telephone">
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
