@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Liste des rendezvouss</div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th>Libelle</th>
                                <th>Date du rendezvous</th>
                                <th>NomComplet du medecin</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                            @foreach($liste_rendezvouss as $rendezvous)
                                <tr>
                                    <td>{{$rendezvous->id}}</td>
                                    <td>{{$rendezvous->libelle}}</td>
                                    <td>{{$rendezvous->date}}</td>
                                    @foreach($medecins as $m)
                                        @if($rendezvous->medecin == $m->id)
                                            <td>{{$m->prenom.' '.$m->nom}}</td>
                                        @endif
                                    @endforeach
                                    <td><a href="{{route('editrendezvous',['id'=>$rendezvous->id] )}}">Editer</a></td>
                                    <td><a href="{{route('deleterendezvous' ,['id'=>$rendezvous->id])}}" onclick="return confirm('voulez vous vraiment supprimer')">Suprimer</a></td>

                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



