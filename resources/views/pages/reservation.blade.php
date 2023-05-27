@extends('adminlte::page')


@section('plugins.DataTables',true)

@section('title')
list of reservations
@endsection
@section('content_header')
<h1>list of reservations</h1>
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
           <div class="card my-7">
              <div class="card-header">
                 <div class="text-center font-weight-bold text-uppercase">
                     <b><h4 class="text-info"> reservations</h4></b>
                  </div>
             </div>
        <div class="card-body">
            <table id="myTable" class="table table=bordered table-stripped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>destination</th>
                        <th>date</th>
                        <th>heure</th>
                        <th>places</th>
                        <th>id_voy</th>
                        <th>id_avion</th>
                        <th>traveler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $key => $reservation )
                    <tr>
                        <td>{{$key+=1}}</td>
                        <td>{{$reservation->destination}}</td>
                        <td>{{$reservation->date}}</td>
                        <td>{{$reservation->heure}}</td>
                        <td>{{$reservation->places}}</td>
                        <td>{{$reservation->id_voy}}</td>
                        <td>{{$reservation->id_avion}}</td>
                        <td>  <a href="{{URL::to('/edit',$reservation->id_voy)}}"
                            class="btn btn-sm btn-warning mx-2">
                            <i class="fas fa-edit"></i>
                        </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    
    <a href="{{URL::to('/addreservation')}}" class="btn btn-primary py-md-6 px-md-9 mt-2">Add new reservation</a>
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