 @extends('layouts.dashboard')

@section('container')
 <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Liste des Utilisateurs</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Liste des utilisateurs</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <i class="fa fa-users fa-3x" style="color:#0B8F7D;"> </i>
                            
                        </div>
                    </div>
</div>


                
<div class="card shadow-lg ">

    <div class="card-body">
        <button type="submit" class="btn btn-rounded btn-outline-secondary" data-toggle="modal" data-target="#ajoutModal"><i class="mdi mdi-plus"> </i> Ajouter</button>

@include('Admin.ajout')
        <hr class="sidebar-divider">
        <div class="table-responsive text-center">
        <table class="table table-bordered" id="myTable" >
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    
                    <th scope="col">Action</th>
                </tr>
            </thead>
                @foreach ($users as $value)
                <tr>
                    <td scope="row"><img src="/img/{{$value->image  }}" class="rounded-circle" style="max-width: 40px; height: auto;"></td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{ implode(' - ', $value->roles()->pluck('role')->toArray() ) }}</td>
                    <td>
                    	@can('edit-users')
                    	 <a class="text-primary" type="submit"  data-toggle="modal" data-target="#editModal{{$value->id}}"><i class="fa fa-pencil-square-o" style="font-size : 25px;"></i></a>
                    	 @include('Admin.edit')
                    	 @endcan
                    	 @can('edit-users')
                        <a class="text-danger" type="submit"  data-toggle="modal" data-target="#deleteModal{{$value->id}}"><i class="fa fa-trash" style="font-size : 25px;"></i></a>
                        @include('Admin.destroy')
                        @endcan

                    </td>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
        <br>
        <hr class="sidebar-divider">
    </div>
</div>

@endsection      
                   