<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}assets/img/favicon.jpg">
        <!-- Place favicon.ico in the root directory -->
        
		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('/')}}assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('/')}}assets/css/owl.carousel.min.css">  
        <link rel="stylesheet" href="{{ asset('/')}}assets/css/fontawesome.css"> 
        <link rel="stylesheet" href="{{ asset('/')}}assets/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('/')}}assets/css/slick.css">
        <link rel="stylesheet" href="{{ asset('/')}}assets/css/nice-select.css">
        <link rel="stylesheet" href="{{ asset('/')}}assets/css/nice-number.css">
        <link rel="stylesheet" href="{{ asset('/')}}assets/css/mobiscroll.javascript.min.css">
        <link rel="stylesheet" href="{{ asset('/')}}assets/css/style.css">
        <link rel="stylesheet" href="{{ asset('/')}}assets/css/responsive.css">  
    </head>
    <body>

        
        <!--preloader start-->
        <div id='preloader'>
            <div id='loader'></div>
        </div>
         <!--preloader end-->

        
        @yield('thecontents')


        <!-- footer START -->
        <footer data-aos="fade-in" data-aos-delay="100">
            <div class="container">
                <div class="footer-content"> 
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-wrps">
                                <a href="/" class="logo">
                                    <img src="{{ asset('/') }}assets/img/logo.png" alt="">
                                </a> 
                                <p>Sign up to get first dibs on new launches, promos, 5% off your first purchase, and other news.</p>
                                <form action="#">
                                    <input type="text" placeholder="Type E-mail">
                                    <button type="Submit">Sign Up</button>
                                </form>
                                <ul class="social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>  
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="footer-menus">
                                <h5>FIND OUT MORE</h5>
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Sustainability</a></li>
                                    <li><a href="#">Community hub</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Reviews</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="footer-menus">
                                <h5>HELP & SUPPORT</h5>
                                <ul>
                                    <li><a href="#">Quality</a></li>
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">Contact</a></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-texts">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7"> 
                            <p class="copyright-text"><span>© 2021 Mapiful AB</span> <a href="#">Terms & Conditions</a> <a href="#">Privacy policy</a></p> 
                        </div> 
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer END -->
        
         
        <!-- Modal --> 
        <div class="modal fade" id="reminderModal" tabindex="-1" aria-labelledby="reminderModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content"> 
                    <div class="modal-body">
                        <div class="reminder-modalcontent">
                            <h2>Save design  <button type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16"><path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg></span> </button></h2>
                            <p>By entering your email you will receive a link to a saved digital preview of your design, so that you can continue editing it later.</p>
                            <label for="#">
                                <input type="email" name="remail" id="" placeholder="Your e-mail">
                            </label>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="amAgree">
                                <label class="form-check-label" for="amAgree">I agree with Mapiful <a href="#">privacy policy</a> </label>
                            </div> 
                            <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-primary">Save and remind me later</button>
                        </div>
                    </div> 
                </div>
            </div>
        </div>





		<!-- JS here --> 
        <script src="{{ asset('/') }}assets/js/vendor/mord.js"></script>
        <script src="{{ asset('/') }}assets/js/vendor/jquery-3.4.1.min.js"></script>
        <script src="{{ asset('/') }}assets/js/popper.min.js"></script>
        <script src="{{ asset('/') }}assets/js/bootstrap.min.js"></script>
        <script src="{{ asset('/') }}assets/js/owl.carousel.min.js"></script> 
        <script src="{{ asset('/') }}assets/js/slick.min.js"></script>  
        <script src="{{ asset('/') }}assets/js/imagesloaded.pkgd.min.js"></script> 
        <script src="{{ asset('/') }}assets/js/jquery.nice-select.min.js"></script>   
        <script src="{{ asset('/') }}assets/js/nice-number.js"></script>   
        <script src="{{ asset('/') }}assets/js/image-preview.js"></script>   
        <script src="{{ asset('/') }}assets/js/plugins.js"></script>     
        <script src="{{ asset('/') }}assets/js/d3.min.js"></script>     
        <script src="{{ asset('/') }}assets/js/d3.geo.projection.min.js"></script>   
        <script src="{{ asset('/') }}assets/js/celestial.min.js"></script>
        <script src="{{ asset('/') }}assets/js/html2canvas.js"></script>
        <script src="{{ asset('/') }}assets/js/main.js"></script>  
    </body>
</html>