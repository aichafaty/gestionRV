@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liste des médecins</div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th>Nom du médecin</th>
                                <th>Prénom du médecin</th>
                                <th>Phone du médecin</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            @foreach($liste_medecins as $medecin)
                                <tr>
                                    <td>{{$medecin->id}}</td>
                                    <td>{{$medecin->nom}}</td>
                                    <td>{{$medecin->prenom}}</td>
                                    <td>{{$medecin->telephone}}</td>
                                    <td><a href="{{route('editmedecin',['id'=>$medecin->id] )}}">Editer</a></td>
                                    <td><a href="{{route('deletemedecin' ,['id'=>$medecin->id])}}" onclick="return confirm('voulez vous vraiment supprimer')">Suprimer</a></td>

                                </tr>
                            @endforeach

                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection

