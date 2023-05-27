@extends('adminlte::page')


@section('plugins.DataTables',true)

@section('title')
list of flights
@endsection
@section('content_header')
<h1>list of Flights</h1>
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
           <div class="card my-7">
              <div class="card-header">
                 <div class="text-center font-weight-bold text-uppercase">
                     <b><h4 class="text-info"> Flights</h4></b>
                  </div>
             </div>
        
        <div class="card-body">
            <table id="myTable" class="table table=bordered table-stripped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>type</th>
                        <th>prix (Euro €)</th>
                        <th>capacite</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($avions as $key => $avion )
                    <tr>
                        <td>{{$key+=1}}</td>
                        <td>{{$avion->type}}</td>
                        <td>{{$avion->prix}}</td>
                        <td>{{$avion->capacite}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    
    <a href="{{URL::to('/addavion')}}" class="btn btn-primary py-md-6 px-md-9 mt-2">Add new plane</a>
</div>
@endsection

@section('js')
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