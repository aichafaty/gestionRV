@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Formulaire de modification de rv</div>

                    <div class="card-body">
                        @if (isset($confirmation))
                            @if($confirmation==1)
                                <div class="alert alert-success">Rv modifié</div>
                            @else
                                <div class="alert alert-danger">Rv non modifié</div>

                            @endif
                        @endif
                        <form method="POST" action="{{ url('/rendezvous/update') }}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="id">Identifiant du rendezvous</label>
                                <input class="form-control" readonly="true" name="id" id="id" value="{{$rendezvous->id}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="libelle">Libelle du rendezvous</label>
                                <input class="form-control" type="text" name="libelle" id="libelle" value="{{$rendezvous->libelle}}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="medecin">nomComplet du Médecin</label>
                                <input class="form-control" type="text" name="medecin" id="medecin" value="{{$rendezvous->medecin}}">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="date">date rendezvous</label>
                                <input class="form-control" type="date" name="date" id="date" value="{{$rendezvous->date}}">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="Modifier" id="modifier" value="modifie">
                                <input class="btn btn-danger" type="submit" name="Annuler" id="annuler" value="annuler">

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
