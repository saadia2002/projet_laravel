@extends('adminlte::page')


@section('plugins.DataTables',true)

@section('title')
Update traveler
@endsection
@section('content_header')
<h1>Update traveler</h1>
@endsection

@section('content')
<div class="container">
    @include('layouts.alert')
    <div class="row ">
        <div class="col-md-10 mx-auto">
           <div class="card my-8">
                 <div class="card-header">
                     <div class="text-center font-weight-bold text-uppercase">
                             <b><h5>Update traveler</h5></b>
                     </div>
                 </div>
                 <div class="card-body">
                    <form action="{{URL::to('/edit',$voyageur->id)}}" method="POST" class="mt-3">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-10">
                        <label for="nom">nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="nom"
                        value="{{old('nom',$voyageur->nom)}}">
                    </div>
                    <div class="form-group mb-10">
                        <label for="prenom">prenom</label>
                        <input type="text" class="form-control" name="prenom" placeholder="prenom"
                        value="{{old('prenom',$voyageur->prenom)}}">
                    </div>
                    <div class="form-group mb-10">
                        <label for="CNE">CNE</label>
                        <input type="text" class="form-control" name="CNE" placeholder="CNE"
                        value="{{old('CNE',$voyageur->CNE)}}">
                    </div>
                    <div class="form-group mb-10">
                        <label for="date_naissance">date_naissance</label>
                        <input type="date" class="form-control" name="date_naissance" placeholder="date_naissance"
                        value="{{old('date_naissance',$voyageur->date_naissance)}}">
                    </div>
                    
                    <div class="form-group mb-10">
                        <label for="email">email</label>
                        <input type="email" class="form-control" name="email" placeholder="email"
                        value="{{old('email',$voyageur->email)}}">
                    </div>
                    
                    <div class="form-group mb-10">
                        <label for="telephone">telephone</label>
                        <input type="tel" class="form-control" name="telephone" placeholder="telephone"
                        value="{{old('telephone',$voyageur->telephone)}}">
                    </div>
                    
                    <div class="form-group mb-10">
                        <label for="pays">pays</label>
                        <input type="text" class="form-control" name="pays" placeholder="pays"
                        value="{{old('pays',$voyageur->pays)}}">
                    </div>
                    
                    <div class="form-group mb-10">
                        <label for="ville">ville</label>
                        <input type="tel" class="form-control" name="ville" placeholder="ville"
                        value="{{old('ville',$voyageur->ville)}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">
                            Update
                        </button>
                    </div>
                    </form>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection


