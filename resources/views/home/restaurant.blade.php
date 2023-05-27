<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>flybooking Cafe</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css1/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css1/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css1/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css1/jquery.mCustomScrollbar.min.css">
      <link href="img/favicon.ico" rel="icon">
      <style>
         select.form-control {
             height: auto;
             overflow-y: auto;
         };
         
     </style>
     
      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
  
      <!-- Font Awesome -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
      <!-- Libraries Stylesheet -->
      <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  
      <!-- Customized Bootstrap Stylesheet -->
      <link href="css/style.css" rel="stylesheet">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      @include('include.nav')
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
            </nav>
         </div>
         <!-- banner section start --> 
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">coffee</h1>
                                 <h5 class="tasty_text">Tasty Of DozeCafe</h5>
                                 <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                 <div class="btn_main">
                                    <div class="about_bt"><a onclick="scrollToElement()">Reserve Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                    </div>
                </div>
             </div>
         <!-- banner section end -->
         </div>
      <!-- header section end -->
      
      <!-- coffee section start -->
      <div class="coffee_section layout_padding">
         <div class="container">
            <div class="row">
               <h1 class="coffee_taital">OUR Coffee OFFER</h1>
               <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
            </div>
         </div>
         <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-1.png"></div>
                                    <h3 class="types_text">COFFEE</h3>
                                    <div class="read_bt"><a onclick="scrollToElement()" style="background-color: rgb(218, 113, 133)"><h2>20€ </h2></a></div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-2.png"></div>
                                    <h3 class="types_text">BEAN VARIETIES</h3>
                                    <div class="read_bt"><a onclick="scrollToElement()"  style="background-color: rgb(218, 113, 133)"><h2>18€ </h2></a></div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-3.png"></div>
                                    <h3 class="types_text">COFFEE & PASTRY</h3>
                                    <div class="read_bt"><a onclick="scrollToElement()" style="background-color: rgb(218, 113, 133)"><h2>20€ </h2></a></div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/img-4.png"></div>
                                    <h3 class="types_text">COFFEE TO GO</h3>
                                    <div class="read_bt"><a onclick="scrollToElement()" style="background-color: rgb(218, 113, 133)"><h2>15€ </h2></a></div>
                                </div>
                            </div>
                                <div class="row" style="margin-bottom: 50px;"> </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/ananas.jpg"></div>
                                    <h3 class="types_text">JUICE ANANAS</h3>
                                    <div class="read_bt"><a onclick="scrollToElement()" style="background-color: rgb(218, 113, 133)"><h2>19€ </h2></a></div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/c2.jpg"></div>
                                    <h3 class="types_text">COFFE MILK</h3>
                                    <div class="read_bt"><a onclick="scrollToElement()" style="background-color: rgb(218, 113, 133)"><h2>17€ </h2></a></div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/fraise.jpg"></div>
                                    <h3 class="types_text">JUICE FRAISE</h3>
                                    <div class="read_bt"><a onclick="scrollToElement()"  style="background-color: rgb(218, 113, 133)"><h2>18€ </h2></a></div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/c4.jpg"></div>
                                    <h3 class="types_text">CAPOCCINO</h3>
                                    <div class="read_bt"><a onclick="scrollToElement()" style="background-color: rgb(218, 113, 133)"><h2>15€ </h2></a></div>
                                </div>
                            </div>
                                <div class="row" style="margin-bottom: 50px;"> </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/c1.jpg"></div>
                                    <h3 class="types_text">ICE COFFEE</h3>
                                    <div class="read_bt"><a onclick="scrollToElement()" style="background-color: rgb(218, 113, 133)"><h2>16€ </h2></a></div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/juice.jpg"></div>
                                    <h3 class="types_text">JUICE ORANGE</h3>
                                    <div class="read_bt"><a onclick="scrollToElement()" style="background-color: rgb(218, 113, 133)"><h2>20€ </h2></a></div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/c3.jpg"></div>
                                    <h3 class="types_text">BLACK COFFEE</h3>
                                    <div class="read_bt"><a onclick="scrollToElement()"  style="background-color: rgb(218, 113, 133)"><h2>19€ </h2></a></div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="coffee_img"><img src="images/the.jpg"></div>
                                    <h3 class="types_text">THE</h3>
                                    <div class="read_bt"><a onclick="scrollToElement()"  style="background-color: rgb(218, 113, 133)"><h2>10€ </h2></a></div>
                                </div>
                               
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br><br>
        <br>
        <br><br>
      <!-- coffee section end -->

      <!-- client section start -->
      <div id="element-cible" class="client_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">book your drink now</h1>
               </div>
               <div><br><br><br><br></div>  <div><br><br><br><br></div>
            </div>
            <div class="client_section_2">
                <div class="container-fluid">
                    <div class="contact_section_2">
                     <div class="row">
                        <div class="col-md-12">
                            <form action="{{URL::to('/coffee')}}" method="POST">
                                @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="CNE" name="CNE">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <select class="form-control" id="name" name="name" required>
                                                    <option value="TYPES OF COFFEE">COFFEE (20€)</option>
                                                    <option value="BEAN VARIETIES">BEAN VARIETIES (18€)</option>
                                                    <option value="COFFEE & PASTRY">COFFEE & PASTRY (20€)</option>
                                                    <option value="COFFEE TO GO">COFFEE TO GO (15€)</option>
                                                    <option value="JUICE ANANAS">JUICE ANANAS (19€)</option>
                                                    <option value="COFFE MILK">COFFEE MILK (17€)</option>
                                                    <option value="JUICE FRAISE">JUICE FRAISE (18€)</option>
                                                    <option value="CAPOCCINO">CAPOCCINO (15€)</option>
                                                    <option value="ICE COFFEE">ICE COFFEE (16€)</option>
                                                    <option value="JUICE ORANGE">JUICE ORANGE (20€)</option>
                                                    <option value="BLACK COFFEE">BLACK COFFEE (19€)</option>
                                                    <option value="THE">THE (10€)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <input type="number" class="form-control" placeholder="Number" name="number">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-danger">Send</button>
                                                
                                            </div>
                                            <div><br><br><br><br></div>  <div><br><br><br><br></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                       </div>
                    </div>
                 </div>  <div><br><br><br><br></div>
            </div>  <div><br><br><br><br></div>
            </div>  <div><br><br><br><br></div>
            </div>
            </div>

    

      <div class="row justify-content-center">
      
        <div class="col-lg-6">
            <div class="map-container">
                <!-- Start Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.609013922811!2d-8.022468985428558!3d31.644553948166767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafee9eb5090999%3A0x2dca05e37a64f83b!2sFacult%C3%A9%20des%20Sciences%20et%20Techniques!5e0!3m2!1sfr!2sma!4v1671968220128!5m2!1sfr!2sma" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!-- End Map -->
            </div>
        </div>
    </div>
      <!-- client section end -->
    
      <!-- contact section end -->
   
      <!-- copyright section start -->
      @include('include.footer')
      <!-- copyright section end -->
      <!-- Javascript files-->
      

      <script>
        function scrollToElement() {
            var element = document.getElementById("element-cible");
            element.scrollIntoView({ behavior: 'smooth' });
        }
    </script>

      <script src="js1/jquery.min.js"></script>
      <script src="js1/popper.min.js"></script>
      <script src="js1/bootstrap.bundle.min.js"></script>
      <script src="js1/jquery-3.0.0.min.js"></script>
      <script src="js1/plugin.js"></script>
      <!-- sidebar -->
      <script src="js1/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js1/custom.js"></script>




      @if(session()->has('success'))
      <script>
     swal("your request is saved successfuly !", "We kindly ask you to take it into consideration during your journey", "success");
      </script>
  @endif


   </body>
</html>