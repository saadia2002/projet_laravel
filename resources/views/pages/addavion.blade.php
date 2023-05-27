@extends('adminlte::page')


@section('plugins.DataTables',true)

@section('title')
Add new plane
@endsection
@section('content_header')
<h1>Add new plane</h1>
@endsection

@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row ">
        <div class="col-md-10 mx-auto">
           <div class="card my-8">
                 <div class="card-header">
                     <div class="text-center font-weight-bold text-uppercase">
                             <b><h5>Add new plane</h5></b>
                     </div>
                 </div>
                 <div class="card-body">
                    <form action="{{URL::to('/addavion')}}" method="POST" class="mt-3">
                    @csrf
                    <div class="form-group mb-10">
                        <label for="type">type</label>
                        <input type="text" class="form-control" name="type" placeholder="type"
                        value="{{old('type')}}">
                    </div>
                    <div class="form-group mb-10">
                        <label for="prix">prix</label>
                        <input type="number" class="form-control" name="prix" placeholder="prix"
                        value="{{old('prix')}}">
                    </div>
                    <div class="form-group mb-10">
                        <label for="capacite">capacite</label>
                        <input type="numbert" class="form-control" name="capacite" placeholder="capacite"
                        value="{{old('capacite')}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">
                           Add plane
                        </button>
                    </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection


