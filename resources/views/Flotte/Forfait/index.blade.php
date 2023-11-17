@extends('layouts.dashboard')

@section('container')
<div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h2 class="text-themecolor">LISTE DE FORFAIT</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Forfait</li>
                        </ol>
                    </div>
</div>
<div class="card shadow-lg ">
    <div class="card-body">
                                <div class="table-responsive text-center">
                                    <table class="table table-bordered" id="example23'">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>FORFAIT</th>
                                                <th>VOLUME</th>
                                                <th>TARIF</th>
                                                <th>VALIDITE</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($forfaits as $forfait)
                                            <tr>
                                                <td>{{$forfait->id}}</td>
                                                <td>{{$forfait->nomforfait}}</td>
                                                <td>{{$forfait->volume}}</td>
                                                <td>{{$forfait->prix}}</td>
                                                <td>{{$forfait->validite}}</td>
                                                <td>
                                                    <a class="text-primary" type="submit"  data-toggle="modal" data-target="#warningModal{{$forfait->id}}"><i class="fa fa-pencil-square-o" style="font-size : 25px;"></i></a>
                                                    <a class="text-danger" type="submit"  data-toggle="modal" data-target="#modal{{$forfait->id}}"><i class="fa fa-trash" style="font-size : 25px;"></i></a>
                                                    @include('Flotte.Forfait.edit')
                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>


</div>
</div>
@endsection