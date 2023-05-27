@extends('layouts.pages')
@section('title')
about
@endsection
@section('content')
<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                    <h1 class="mb-3">we believe that travel has the power to change lives</h1>
                    <p>Our website is a one-stop platform for booking flights to destinations all around the world. With a user-friendly interface and a variety of search options, we make it easy for travelers to find and book the best flights at the most competitive prices</p>
                    <div class="row mb-4">
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-1.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-2.jpg" alt="">
                        </div>
                    </div>
                    <a href="" class="btn btn-primary mt-1">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-registration py-5" style="margin: 150px 0;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"></h6>
                    <h1 class="text-white"><span class="text-primary">ABOUT US</span> FlyBooking</h1>
                </div>
              <h4>
                <p class="text-white">
                    Our website is a one-stop platform for booking flights to destinations all around the world. With a user-friendly
                    interface and a variety of search options, we make it easy for travelers to find and book the best flights at the most 
                    competitive prices. Our website offers a secure and seamless booking experience, with 24/7 customer service available to assist 
                    with any questions or issues that may arise. Whether you're a frequent traveler or planning your first trip,
                    our website provides all the tools and resources you need to make your travel experience as smooth and enjoyable as possible. 
                </p>
              </h4>
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <img class="img-fluid mx-auto" src="img/flybooking.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- teammmm --}}


@endsection