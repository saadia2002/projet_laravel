@extends('adminlte::page')


@section('plugins.DataTables',true)

@section('title')
Add new plane
@endsection
@section('content_header')
<h1>Add new plane</h1>
@endsection

@section('content')

<div class="container-fluid booking mt-5 pb-5" >
    <div class="container pb-5" >
        <div class="bg-light shadow" style="padding: 100px; ">
            <div class="d-flex justify-content-center" >
                <h4 class="text-primary text-uppercase">BOOK NOW</h4>
            </div>
            <div style="background-image: url('img/sky.jpg');">
           
            <div class="row align-items-center" style="min-height: 60px;">
                <div class="col-md-3"></div>
                <div class="col-md-5">
            
            <form method="POST" action="{{URL::to('/addreservation')}}">
                @csrf
                <br>
                <div class="form-group">
                  <label for="CNE"><h5 style="color: rgb(199, 168, 111)">CNE :</h5></label>
                  <input type="text" class="form-control" id="CNE" name="CNE" required>
                </div>
                @if ($errors->has('CNE'))
                    <div class="alert alert-danger">
                        {{ $errors->first('CNE') }}
                    </div>
                @endif
                <br>
                <div class="form-group">
                  <label for="avion"><h5 style="color: rgb(199, 168, 111)">avion :</h5></label>
                  <select class="form-control" id="avion"  name="avion" required>
                    <option value="1" style="color: rgb(11, 122, 20);font-size: 14px;">avion personnelle   (1999 €)</option>
                    <option value="2" style="color: rgb(11, 122, 20);font-size: 14px;">Cessna  (1600 €)</option>
                    <option value="3" style="color: rgb(11, 122, 20);font-size: 14px;">Gulfstream  (1199 €)</option>
                    <option value="4" style="color: rgb(11, 122, 20);font-size: 14px;">Embraer	(999 €)</option>
                    <option value="5" style="color: rgb(11, 122, 20);font-size: 14px;">Bombardie (899 €)</option>
                    <option value="6" style="color: rgb(11, 122, 20);font-size: 14px;">Airbus 	(799 €)</option>
                  </select>
                </div>
                    <br>
                <div class="form-group">
                  <label for="destination"><h5 style="color: rgb(199, 168, 111)">destination :</h5></label>
                  <select class="form-control" id="destination" name="destination" required>
                  <option value="1">France (paris)</option>
                  <option value="2">Turkie (istanbul)</option>
                  <option value="3">États-Unis (Washington)</option>
                  <option value="4">Italie (Rome)</option>
                  <option value="5">Espagne (Madrid)</option>
                  <option value="6">Inde (New Delhi)</option>
                  <option value="7">Nigeria (Abuja)</option>
                  <option value="8">Canada (Autarou)</option>
                  <option value="9">Saudia (Riad)</option>
                </select>
                </div>
                 
               <br>
                <div class="form-group">
                  <label for="date"><h5 style="color: rgb(199, 168, 111)">Date :</h5></label>
                  <input type="date" class="form-control" id="date" name="date" required>
                </div>
              <br>
                <div class="form-group">
                  <label for="heure"><h5 style="color: rgb(199, 168, 111)">Heure :</h5></label>
                  <select class="custom-select" id="heure" name="heure" required>
                  <option value="08:00">08:00</option>
                  <option value="10:00">10:00</option>
                  <option value="12:00">12:00</option>
                  <option value="14:00">14:00</option>
                  <option value="18:00">18:00</option>
                  <option value="21:00">21:00</option>
              </select>
                </div>
              <br>
                <div class="form-group">
                  <label for="places"><h5 style="color: rgb(199, 168, 111)">Nombre de places :</h5></label>
                  <input type="number" class="form-control" id="places" name="places" min="1" required>
                </div>
              <br>
              <br>
              <div class="form-group">
                <button type="submit" class="btn btn-primary mt-1" style="font-size: 20px;">Book Now</button>
              </div>
              </form>
              <br>
                </div>
        </div>
    </div>
</div>
@endsection