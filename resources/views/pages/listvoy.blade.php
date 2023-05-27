@extends('adminlte::page')


@section('plugins.DataTables',true)

@section('title')
list of travelers
@endsection
@section('content_header')
<h1>list of travelers</h1>
@endsection

@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row ">
        <div class="col-md-13 mx-auto">
           <div class="card my-5">
            <div class="card-header">
            <div class="text-center font-weight-bold text-uppercase">
               <b><h4 class="text-info"> travelers</h4></b>
            </div>
           </div>
        
        <div class="card-body">
            <table id="myTable" class="table table=bordered table-stripped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>CNE</th>
                        <th>date de naissance</th>
                        <th>email</th>
                        <th>telephone</th>
                        <th>pays</th>
                        <th>ville</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($voyageurs as $key => $voyageur )
                    <tr>
                        <td>{{$key+=1}}</td>
                        <td>{{$voyageur->nom}}</td>
                        <td>{{$voyageur->prenom}}</td>
                        <td>{{$voyageur->CNE}}</td>
                        <td>{{$voyageur->date_naissance}}</td>
                        <td>{{$voyageur->email}}</td>
                        <td>{{$voyageur->telephone}}</td>
                        <td>{{$voyageur->pays}}</td>
                        <td>{{$voyageur->ville}}</td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="{{URL::to('/show',$voyageur->id)}}"
                                class="btn btn-sm btn-success">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{URL::to('/edit',$voyageur->id)}}"
                                class="btn btn-sm btn-warning mx-2">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form id="{{$voyageur->id}}" action="{{URL::to('/listvoy',$voyageur->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            </form>
                            <button type="submit"
                            onclick="deleteVoy({{$voyageur->id}})"
                                class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        $('#myTable').DataTable({
            dom:'Bfrtip',
            buttons:[
                'copy','excel','pdf','print','colvis'
            ]
        });
    });
   function deleteVoy(id){
                    Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(id).submit();
                Swal.fire(
                'Deleted!',
                'Traveler has been deleted.',
                'success'
                )
            }
            })
    }
</script>
@if(session()->has('success'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: "{{session()->get('success')}}",
            showConfirmButton: false,
            timer: 2500
        });
    </script>
@endif
@endsection















