@extends('layouts.pages')
@section('title')
contact
@endsection
@section('content')

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact</h6>
            <h1>Contact For Any Query</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form bg-white" style="padding: 30px;">
                    <div id="success"></div>
                    <form action="{{URL::to('/emailsend')}}" method="POST" class="mt-3">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nom"><h5>Nom</h5></label>
                                    <input type="text" class="form-control" name="nom" placeholder="Please enter your name" value="{{old('nom')}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email"><h5>Email</h5></label>
                                    <input type="email" class="form-control" name="email" placeholder="Please enter your email" value="{{old('email')}}">
                                </div>
                            </div>
                        </div>
                
                        <div class="form-group">
                            <label for="subject"><h5>Objet</h5></label>
                            <input type="text" class="form-control" name="subject" placeholder="Please enter the subject" value="{{old('subject')}}">
                        </div>
                
                        <div class="form-group">
                            <label for="message"><h5>Message</h5></label>
                            <textarea id="message" class="form-control" name="message" placeholder="Please enter your message">{{old('message')}}</textarea>
                        </div>
                        
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary py-md-3 px-md-5 mt-2">
                               Send message
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>

@if(session()->has('success'))
<script>
swal("your email has been received successfully", "thank you for your participation", "success");
</script>
@endif
<!-- Contact End -->
@endsection