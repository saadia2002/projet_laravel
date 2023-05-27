@extends('layouts.app')
@section('title')
About
@endsection
@section('content')
<div>
    <h1>bonjour de page about us</h1>
</div>
<div class="card-body">
    <form action="{{route('logout')}}" method="post">
    @csrf
     <button type="submit">logout</button>
</form>
</div>
@endsection