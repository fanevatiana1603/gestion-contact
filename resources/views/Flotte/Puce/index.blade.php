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
@include('Flotte.Puce.ajout')
                            <div class="card-body">
                                <hr class="sidebar-divider">
                                <div class="table-responsive text-center">
                                    <table class="table table-bordered " id="puces">
                                        <thead>

                                            <tr>
                                                <th>ID</th>
                                                <th>NUMERO</th>
                                                <th>PUK</th>
                                                <th>PIN</th>
                                                <th>OPERATEUR</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($puce as $puce)
                                            <tr>
                                                <td>{{$puce->id}}</td>
                                                <td>{{$puce->numero}}</td>
                                                <td>{{$puce->numpuk}}</td>
                                                <td>{{$puce->numserial}}</td>
                                                <td>{{$puce->operateur}}</td>
                                                <td >
                                                    <a class="text-primary" type="submit"  data-toggle="modal" data-target="#editModal{{$puce->id}}"><i class="fa fa-pencil-square-o" style="font-size : 25px;"></i></a>
                                                    <a class="text-success" type="submit"  data-toggle="modal" data-target="#showModal{{$puce->id}}"><i class="mdi mdi-eye" style="font-size : 25px;"></i></a>
                                                    <a class="text-danger" type="submit"  data-toggle="modal" data-target="#deleteModal{{$puce->id}}"><i class="fa fa-trash" style="font-size : 25px;"></i></a>

                                                    @include('Flotte.Puce.edit')
                                                    @include('Flotte.Puce.destroy')
                                                    @include('Flotte.Puce.show')
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