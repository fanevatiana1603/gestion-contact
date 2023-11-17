@extends('layouts.dashboard')

@section('container')
<div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h2 class="text-themecolor">LISTE DES PUCES</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">puce</li>
                        </ol>

                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <i class="fa fa-drivers-license fa-3x" style="color:#0B8F7D;"> </i>
                            
                        </div>
                    </div>
</div>
@if(session('message'))
    <div class="alert alert-success"> 
        <i class="mdi mdi-check"></i> {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
    </div>

@endif
@if(session('message-delete'))
    <div class="alert alert-danger"> 
        <i class="mdi mdi-check"></i> {{session('message-delete')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
    </div>

@endif
<div class="card shadow-lg ">
    <div class="card-body">
<button type="submit" class="btn btn-rounded btn-outline-secondary" data-toggle="modal" data-target="#ajoutModal"><i class="mdi mdi-plus"> </i> Ajouter</button>

@include('Flotte.Usager.ajout')

                            <div class="card-body">
                                <hr class="sidebar-divider">
                                <div class="table-responsive text-center">
                                    <table class="table table-bordered " id="example23">
                                        <thead>

                                            <tr>
                                                <th></th>
                                                <th>NUMERO</th>
                                                <th>NOM</th>
                                                <th>PRENOM</th>
                                                <th>FORFAIT</th>
                                                <th>LOCALITE</th>
                                                <th>CONSOMMATION</th>
                                                <th>OFFRE</th>
                                                <th>LIGNE</th>
                                                <th>DIRECTION</th>
                                                <th>SERVICE</th>
                                                <th>STATUS</th>
                                                <th  class="not-exported">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($usager as $usager)
                                            <tr>
                                                <td scope="row"><img src="/img/{{$usager->image  }}" class="rounded-circle" style="max-width: 40px; height: auto;"></td>
                                                <td>{{$usager->numero}}</td>
                                                <td>{{$usager->nom}}</td>
                                                <td>{{$usager->prenom}}</td>
                                                <td>{{$usager->localite}}</td>
                                                <td>{{$usager->nomforfait}}</td>
                                                <td>{{$usager->consommation}}</td>
                                                <td>{{$usager->offre}}</td>
                                                <td>{{$usager->ligne}}</td>
                                                <td>{{$usager->direction}}</td>
                                                <td>{{$usager->service}}</td>
                                                <td>
                                                    <a href="{{route('flotte.status.show',$usager->id)}}" class="btn btn-rounded btn-{{$usager->status ? 'success' : 'danger'}}">
                                                        @if ($usager->status)
                                                            <i class=" mdi mdi-check"></i> <!-- Afficher une icône de coche pour "Active" -->
                                                        @else
                                                            <i class="mdi mdi-close"></i> <!-- Afficher une icône de croix pour "Inactive" -->
                                                        @endif
                                                    </a>
                                                </td>
                                                <td >
                                                    <a class="text-primary" type="submit"  data-toggle="modal" data-target="#editModal{{$usager->id}}"><i class="fa fa-pencil-square-o" style="font-size : 25px;"></i></a>
                                                    <a class="text-success" type="submit"  data-toggle="modal" data-target="#showModal{{$usager->id}}"><i class="mdi mdi-eye" style="font-size : 25px;"></i></a>
                                                    <a class="text-danger" type="submit"  data-toggle="modal" data-target="#deleteModal{{$usager->id}}"><i class="fa fa-trash" style="font-size : 25px;"></i></a>
                                                    @include('Flotte.Usager.edit')
                                                    @include('Flotte.Usager.destroy')
                                                    @include('Flotte.Usager.show')

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <hr class="sidebar-divider">
                            </div>


</div>
</div>


@endsection