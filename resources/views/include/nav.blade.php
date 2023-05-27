
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>flybooking54@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+212 773 690139</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">Fly</span>Booking</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{URL::to('/index')}}" class="nav-item nav-link ">Home</a>
                        <a href="{{URL::to('/about1')}}" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="{{URL::to('/restaurant')}}" class="dropdown-item">Coffe</a>
                                <a href="{{URL::to('/restauration')}}" class="dropdown-item">Restauration</a>
                            </div>
                        </div>
                        <a href="{{URL::to('/contact')}}" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- JavaScript Libraries -->
 