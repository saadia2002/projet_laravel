@extends('adminlte::page')


@section('plugins.DataTables',true)

@section('title')
Show traveler
@endsection
@section('content_header')
<h1>Show traveler</h1>
@endsection
@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row ">
        <div class="col-md-10 mx-auto">
           <div class="card my-8">
                 <div class="card-header">
                     <div class=" text-center font-weight-bold text-uppercase">
                        <b><h3>{{$voyageur->nom}}  {{$voyageur->prenom}}</h3></b>
                    </div>
                    </div>
                    <div class="text-center card-body" >
                    <div class="form-group mb-10">
                       <label for="nom"><span style="color: darkred">nom :</span>{{$voyageur->nom}} </label>
                    </div>
                    <div class="form-group mb-10">
                       <label for="prenom"><span style="color: darkred">prenom :</span>{{$voyageur->prenom}} </label>
                    </div>
                    <div class="form-group mb-10">
                       <label for="CNE"><span style="color: darkred">CNE :</span> {{$voyageur->CNE}}</label>
                    </div>
                    <div class="form-group mb-10">
                       <label for="date_naissance"><span style="color: darkred">date_naissance :</span>{{$voyageur->date_naissance}} </label>
                    </div>
                    
                    <div class="form-group mb-10">
                       <label for="email"><span style="color: darkred">email :</span>{{$voyageur->email}} </label>
                    </div>
                    
                    <div class="form-group mb-10">
                       <label for="telephone"><span style="color: darkred">telephone :</span>{{$voyageur->telephone}} </label>
                    </div>
                    
                    <div class="form-group mb-10">
                       <label for="pays"><span style="color: darkred">pays :</span> {{$voyageur->pays}}</label>
                    </div>
                    
                    <div class="form-group mb-10">
                       <label for="ville"><span style="color: darkred">ville :</span>{{$voyageur->ville}} </label>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection



