@extends('layouts.apphome')
@section('title')
creation
@endsection
@section('content')
<div class="row ">
    <div class="col-md-6 mx-auto">
       <div class="card my-8">
             <div class="card-header">
                 <div class="text-center font-weight-bold text-uppercase">
                         <b><h5>create my acount</h5></b>
                 </div>
             </div>
             <div class="card-body">
                <form action="{{URL::to('/create1')}}" method="POST" class="mt-3">
                @csrf
                <div class="form-group mb-10">
                    <label for="nom"><h5>nom</h5></label>
                    <input type="text" class="form-control" name="nom" placeholder="nom"
                    value="{{old('nom')}}">
                </div>
                <div class="form-group mb-10">
                    <label for="prenom"><h5>prenom</h5></label>
                    <input type="text" class="form-control" name="prenom" placeholder="prenom"
                    value="{{old('prenom')}}">
                </div>
                <div class="form-group mb-10">
                    <label for="CNE"><h5>CNE</h5></label>
                    <input type="text" class="form-control" name="CNE" placeholder="CNE"
                    value="{{old('CNE')}}">
                </div>
                <div class="form-group mb-10">
                    <label for="date_naissance"><h5>date_naissance</h5></label>
                    <input type="date" class="form-control" name="date_naissance" placeholder="date_naissance"
                    value="{{old('date_naissance')}}">
                </div>
                
                <div class="form-group mb-10">
                    <label for="email"><h5>email</h5></label>
                    <input type="email" class="form-control" name="email" placeholder="email"
                    value="{{old('email')}}">
                </div>
                
                <div class="form-group mb-10">
                    <label for="telephone"><h5>telephone</h5></label>
                    <input type="tel" class="form-control" name="telephone" placeholder="telephone"
                    value="{{old('telephone')}}">
                </div>
                
                <div class="form-group mb-10">
                    <label for="pays"><h5>pays</h5></label>
                    <input type="text" class="form-control" name="pays" placeholder="pays"
                    value="{{old('pays')}}">
                </div>
                
                <div class="form-group mb-10">
                    <label for="ville"><h5>ville</h5></label>
                    <input type="tel" class="form-control" name="ville" placeholder="ville"
                    value="{{old('ville')}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary py-md-3 px-md-5 mt-2">
                        Create
                    </button>
                </div>
                </form>
             </div>
        </div>
    </div>
</div>
<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/pexel.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Join us</h6>
                    <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                    <p>"Experience the extraordinary on our travel website and let yourself be swept away to enchanting destinations!"</p>
                    <div class="row mb-4">
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-1.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" width="250" height="300" src="img/11.jpg" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Destination Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
            <h1>Explore Top Destination</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" width="340" height="370" src="img/77.jpg" alt="">
                    <div class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">United States</h5>
                        <span>$700-$1999</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="img/22.jpg" alt="">
                    <div class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Espagne</h5>
                        <span>$700-$1999</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="img/destination-5.jpg" alt="">
                    <div class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Italy</h5>
                        <span>$700-$1999</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="img/india.jpg" alt="">
                    <div class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">India</h5>
                        <span>$700-$1999</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="img/destination-3.jpg" alt="">
                    <div class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white"> Negeria</h5>
                        <span>$700-$1999</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="img/destination-2.jpg" alt="">
                    <div class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">France</h5>
                        <span>$700-$1999</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="img/rbi3.jpg" alt="">
                    <div class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Turky</h5>
                        <span>$700-$1999</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="img/saodia.jpg" alt="">
                    <div class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Saudi Arabia</h5>
                        <span>$700-$1999</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="img/canada2.jpg" alt="">
                    <div class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Canada</h5>
                        <span>$700-$1999</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Destination Start -->
<!-- Team Start -->
<div class="container-fluid py-5" >
    <div class="container pt-5 pb-3" ">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Guides</h6>
            <h1>Our Travel Guides</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center" >
                <div class="col-lg-4 col-md-8 col-sm-8 pb-2" style="background-color: rgba(177, 169, 169, 0.849)">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/wattsap.jpeg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.facebook.com/saidaaitali"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-primary btn-square" href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">AIT ALI MHAMED saadia</h5>
                            <p class="m-0">Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
            <h1>What Say Our Clients</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="text-center pb-4">
                <img class="img-fluid mx-auto" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </p>
                    <h5 class="text-truncate">Client Name</h5>
                    <span>Profession</span>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </p>
                    <h5 class="text-truncate">Client Name</h5>
                    <span>Profession</span>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </p>
                    <h5 class="text-truncate">Client Name</h5>
                    <span>Profession</span>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto" src="img/testimonial-4.jpg" style="width: 100px; height: 100px;" >
                <div class="testimonial-text bg-white p-4 mt-n5">
                    <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </p>
                    <h5 class="text-truncate">Client Name</h5>
                    <span>Profession</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Blog End -->
<div>             <!-- Start Google Map -->
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="contact-form bg-white" style="padding: 30px;">
                <div id="success"></div>
                <form name="sentMessage" action="{{URL::to('/sendMail')}}" id="contactForm" novalidate="novalidate">
                    @csrf
                    <div class="form-row">
                        <div class="control-group col-sm-6">
                            <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group col-sm-6">
                            <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="map-container">
                <!-- Start Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.609013922811!2d-8.022468985428558!3d31.644553948166767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee9eb5090999%3A0x2dca05e37a64f83b!2sFacult%C3%A9%20des%20Sciences%20et%20Techniques!5e0!3m2!1sfr!2sma!4v1671968220128!5m2!1sfr!2sma" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!-- End Map -->
            </div>
        </div>
    </div>
    
@endsection