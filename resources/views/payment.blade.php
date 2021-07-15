@extends('content-layout.layout')
@section('thecontents')
 

    @section('title') Let's just checkout here pleasea @endsection

    @php
        $stripe_key = 'pk_test_51JCyoNIsaIbgNvOI9c6TU81wI7LZEANUZTl2tSzFaVnBknPyUPy4WzfCpqPhrtUFzQvAvLXjzsbbHvoQF8o4FOF500GkW1X30H';
    @endphp
        <!-- Header-area START -->
        <div class="Header-area white-header"> 
            <div class="header-main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-2 d-block d-lg-none">
                            <div class="menu-icon">
                                <div class="in-mobile"> 
                                    <a href="/" class="humg-btn"><span></span></a> 
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-3 col-8">
                            <div class="logo-area">
                                <a href="/"><img src="assets/img/logo.png" alt=""></a>
                            </div>
                        </div> 
                        <div class="col-lg-9 col-4 text-right">
                            <div class="header-action">
                                <ul>
                                    <li class="poster-btn"><a href="/editor">Create your poster</a></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Header-area sticky-header"> 
            <div class="header-main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-2 d-block d-lg-none">
                            <div class="menu-icon">
                                <div class="in-mobile"> 
                                    <a href="/" class="humg-btn"><span></span></a> 
                                </div> 
                            </div>
                        </div>
                        <div class="col-lg-3 col-8">
                            <div class="logo-area">
                                <a href="/"><img src="assets/img/logo.png" alt=""></a>
                            </div>
                        </div> 
                        <div class="col-lg-9 col-4 text-right">
                            <div class="header-action">
                                <ul>
                                    <li class="poster-btn"><a href="/editor">Create your poster</a></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- mobile-menu -->
         <div class="mobile-menu">
            <a href="javascript:void(0)" class="humg-btn"><i class="fal fa-times"></i></a> 
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li> 
                    <li><a href="services.html">tearms</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav> 
        </div> 
        <!-- Header-area END -->
           
        <!-- main START -->
        <main class="bellingPage">   

            <!-- cart-area START -->
            <div class="cart-area">
                <div class="container">

                    <!-- section-title -->
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <div class="section-title">
                                <h1>COMPLETE YOUR PURCHASE</h1>  
                            </div>
                        </div>
                    </div> 
                    
                    <!-- carts -->
                    <div class="row"> 
                        <div class="col-lg-8 offset-lg-2">
                            <h5 class="producTitles">Products</h5>
                            <button type="button" class="removeThisProduct">Remove Product <i class="far fa-trash-alt"></i></button>
                        </div>
                        <div class="col-lg-8 offset-lg-2"> 
                            <div class="myProductHere">
                                <img src="https://mapiful.nyc3.digitaloceanspaces.com/prints/previews/starmaps/2021/7/a23f5ba4fe993a1a5afeaa8db45ab444e6e2a773.jpeg" alt="">
                                <div class="mprContents">
                                    <h4></h4>
                                    <p class="addrr"></p>
                                    <p class="ttdate"></p>
                                    <p class="ltdate"></p>
                                    <p class="price"><b></b></p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- cart-area END --> 

            <!-- shoping-method START -->
            <div class="shoping-method">
                <div class="container"> 
                    <!-- section-title -->
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-title">
                                <h1>SHIPPING METHOD</h1>  
                            </div>
                        </div>
                    </div>
                    <fieldset>
                        <div class="row">
                            <div class="col-lg-4 offset-lg-2 col-md-6">
                                <div class="method-blk">  
                                    <input type="radio" value="First Class Shipping" id="fruit1" name="shipingMetchod" checked>
                                    <label for="fruit1">
                                        <h5>1ST CLASS SHIPPING <span>$2.00</span></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </label>   
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="method-blk">  
                                    <input type="radio" value="Second Class Shipping" id="nd" name="shipingMetchod">
                                    <label for="nd">
                                        <h5>2nd CLASS SHIPPING <span>$1.50</span></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                    </label>   
                                </div>
                            </div>
                        </div>
                    </fieldset>   
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-title">
                                <h1 style="margin-top:70px;font-size:30px;font-weight:600">We are not moving you more</h1>  
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- shoping-method END --> 
      
        </main>
        <!-- main END --> 

 
 
    <script src="{{ asset('/') }}assets/js/paymentScript.js"></script>  
@endsection