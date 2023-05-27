@extends('adminlte::page')


@section('plugins.DataTables',true)

@section('title')
messages
@endsection
@section('content_header')
<h1>list of Message</h1>
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-10 mx-auto">
           <div class="card my-7">
              <div class="card-header">
                 <div class="text-center font-weight-bold text-uppercase">
                     <b><h4 class="text-info"> Comments</h4></b>
                  </div>
             </div>
        
        <div class="card-body">
            <table id="myTable" class="table table=bordered table-stripped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nom</th>
                        <th>email</th>
                        <th>subject</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $key => $contact )
                    <tr>
                        <td>{{$key+=1}}</td>
                        <td>{{$contact->nom}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->subject}}</td>
                        <td>{{$contact->message}}</td>
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