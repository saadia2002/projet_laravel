<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FLYBOOKING</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
    <style>
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .button-container a {
            margin: 10px;
            border-radius: 50px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            padding: 15px 30px;
            background-color: hsl(106, 60%, 47%);
            color: #FFFFFF;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .button-container a:hover {
            transform: scale(1.1);
        }

        .button-container a:hover:before {
            opacity: 1;
        }

        .button-container a.btn-primary {
            background-color:   hsl(106, 60%, 47%);
        }

        .button-container a.btn-primary:hover {
            background-color: #d219aa;
        }
    </style>

</head>

<body>
    @include('include.navhome')
    @yield('content')
    @include('include.footerhome')
    @yield('scripts')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>