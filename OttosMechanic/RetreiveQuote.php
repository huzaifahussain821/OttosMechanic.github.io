<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="service.css" rel="stylesheet">
    
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css">
    <title>Sign up </title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <script>
                      $(document).ready(function(){
          var scroll_pos = 0;
            $(document).scroll(function() { 
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 50) {
                    $('.hvr-reveal').css('color', 'black');
                     $('.hvr-reveal_button').css('border', '1px solid black'); 
                } else {
                    $('.hvr-reveal').css('color', 'black');
                    $('.hvr-reveal_button').css('border', '1px solid black');
                }
            });
       
               $(".slide-up").click(function(){
                   $(".box").slideUp();
               });
               $(".slide-down").click(function(){
                   $(".box").slideDown();
               });
           });
       </script>
<style>
   @media (max-width: 767px){
.nav-item::before {
    position: absolute;
    display: block;
    top: 15px;
    left: 0;
    width: 11px;
    height: 1px;
    content: "";
    border: none;
    background-color: white !important;
}}

.hvr-reveal_button{
       background-color: #fff !important;
       color: #000 !important;
       border: 1px solid black;
   }

</style>
</head>
<body> 
    
<!-- navbar -->
<div class="navigation-wrap bg-light start-header start-style">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light">
                
                    <a class="navbar-brand" href="index.html" target="_blank"><img src="imgs/logo.png" style="width: 90px !important; height: 70px !important;" alt=""></a>	
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse"
                    id="navbarNavDropdown01">
    <ul class="navbar-nav mr-auto navbar-fixed-top.scrolled"> </ul>
                    <ul class="navbar-nav navbar-fixed-top.scrolled ">
                        
                        <!--dropdown item of menu-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle hvr-reveal status_nav"
                            href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false" class=" menulink navbar-fixed-top.scrolled " >
                             <b>Find Garages</b>
                            </a>
                            
                            <!--dropdown sub items of menu-->
                            <div class="dropdown-menu"
                                aria-labelledby="navbarDropdown">
                                <div class="container">
                                  <h5> Best Garages For</h5>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-3" style="display: flex;">
                                       
                                       <a class="dropdown-item" href="mobileMechanic.html">
                                        <img src="imgs/AllService/mobile-mechanic.svg" width="22px" alt="">
    
                                         &nbsp;&nbsp;Mobile Mechanic
                                       </a> 
                                    </div>
                                     <div class="col-12 col-sm-12 col-md-3">
                                       <a class="dropdown-item" href="cambeltChange.html"> <img src="imgs/AllService/cambelt.svg" width="22px" alt="">
    
                                        &nbsp;&nbsp;
                                        Cambelt Change
                                       </a> 
                                    </div>
                                     <div class="col-12 col-sm-12 col-md-3">
                                       <a class="dropdown-item" href="brake&Disc.html"> <img src="imgs/AllService/brake-pads-discs.svg" width="22px" alt="">
    
                                        &nbsp;&nbsp;
                                        Brake Pads and Discs
                                       </a> 
                                    </div>
                                     <div class="col-12 col-sm-12 col-md-3">
                                       <a class="dropdown-item" href="Aircon.html"> <img src="imgs/AllService/icon-heatingCooling.svg"width="22px">
                                         &nbsp;&nbsp;
                                        Aircon Regas
                                       </a> 
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-12 col-sm-12 col-md-3">
                                       <a class="dropdown-item" href="Diagnostic.html"> <img src="imgs/AllService/icon-diagnostics.svg" width="22px" alt="">
    
                                         &nbsp;&nbsp;
                                        Diagnostics
                                       </a> 
                                    </div>
                                     <div class="col-12 col-sm-12 col-md-3">
                                       <a class="dropdown-item" href="fullService.html"> <img src="imgs/AllService/full-service-icon.svg" width="22px" alt="">
    
                                         &nbsp;&nbsp;
                                        Full Service
                                       </a> 
                                    </div>
                                     <div class="col-12 col-sm-12 col-md-3">
                                       <a class="dropdown-item" href="OilChnage.html"> <img src="imgs/AllService/oil-change.svg" width="22px" alt="">
    
                                         &nbsp;&nbsp;
                                        Oil Change
                                       </a> 
                                    </div>
                                     <div class="col-12 col-sm-12 col-md-3">
                                       <a class="dropdown-item" href="MobileTyreFitting.html"> <img src="imgs/AllService/mobile-mechanic.svg" width="22px" alt="">
    
                                         &nbsp;&nbsp;
                                        Mobile Tyre Fitting
                                       </a> 
                                    </div>
                                </div>
                                 
                                 
                               <br> <a href="allService.html"> <h6 style="font-weight: 700; color: #244b67;">View All Repairs</h6></a>
                                </div>
                                
                               
                            </div>
                        </li>
                        <li> <a class="nav-link hvr-reveal status_nav"
                          href="forGarages.html" class="menulink" style="color: #000;" >
                           <b>For Garages</b>
                          </a>
                      </li>
                        <li> <a class="nav-link hvr-reveal status_nav"
                            href="How it works.html" class="menulink" style="color: #000;" >
                             <b>How It Works</b>
                            </a>
                        </li>
                        <li> <a class="nav-link hvr-reveal status_nav"
                            href="signUp.html" class="menulink" style="color: #000;" >
                             <b>Sign Up</b>
                            </a>
                        </li>
                        <li> <a class="nav-link hvr-reveal status_nav"
                            href="login.html" class="menulink" style="color: #000;" >
                             <b>Log In</b>
                            </a>
                        </li>
                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="login.html" style="color: #000;">
                                <button type="button" class="btn btn-outline-light hvr-reveal hvr-reveal_button">Retrieve Quotes</button>
                                </a>
                            </li>
                        
                    </ul>
                    
                
                </div>
            </nav>
       
    </div>
                    
                </nav>		
            </div>
        </div>
    </div>
</div>
<br><br><br>
<div class="form-box" style="margin-top: 5%;">
    
        
       
            <h4 style="text-align: center;">Log In To Otto's Mechanic</h4>
            <div class="tab-pane fade active show" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                <form action="#">
                    <label>All fields are required!</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="singin-email" name="singin-email" required="" placeholder="E-mail address">
                    </div><!-- End .form-group -->

                    <div class="form-group"style="text-align: right;">
                        <input type="password" class="form-control" id="singin-password" name="singin-password" required=""placeholder="Password">
                    <small ><a href="#" style="color: black;">forget password?</a></small>
                    </div><!-- End .form-group -->

                   

                    <div class="form-footer">
                        <button type="submit" class="btn btn-success" style="width: 100%; background-color:rgb(0, 175, 0);" >
                            <span>Log In</span>
                          
                        </button>
                    </div><!-- End .form-footer -->
                </form>
               
            </div><!-- .End .tab-pane -->
           
                </form>
               
           
    
</div>

<br>
<!-- aboveFooter sec -->
<div class="container-fluid" style="background-color: rgb(240, 232, 232);">
    <div class="row" style="padding: 20px;">
        <div class="col-12 col-sm-12 col-md-3">
            <h5>Top locations</h5>
            <br>
            <ul style="text-decoration: none; list-style: none;">
            <li>Garages in London</li>
            <li>Garages in Leeds</li>
            <li>Garages in Liverpool</li>
            <li>Garages in Manchester</li>
            <li>Mobile Mechanics in London</li>
            <li>Clutch Repairs in London</li>
            </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-3">
            
            <br><br>
            <ul style="text-decoration: none; list-style: none;">
            <li>Garages in Birmingham</li>
            <li>Garages in Glasgow</li>
            <li>Garages in Edinburgh</li>
            <li>Garages in Bristol</li>
            <li>Brake Repairs in London</li>
            <li>Clutch Repair in Birmingham</li>
            </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-3">
            <h5>Top services</h5>
            <br>
            <ul style="text-decoration: none; list-style: none;">
            <li>Clutch Repairs</li>
            <li>Brake Repairs</li>
            <li>Exhaust Repair</li>
            <li>Clutch Replacement</li>
            <li>Head Gasket</li>
            <li>Diesel Particulate Filter Clean</li>
            </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-3">
            
            <br><br>
            <ul style="text-decoration: none; list-style: none;">
            <li>Cambelt Change</li>
            <li>Full Servicew</li>
            <li>Mobile Mechanic</li>
            <li>MOT</li>
            <li>Gearbox Repairs</li>
            <li>Steering and Suspension</li>
            </ul>
        </div>
    </div>
</div>




   <!-- Footer -->
<footer>
    <div class="container-fuild" style="background-image: url(imgs/footer-bg.jpg); height: auto;background-size: cover;width: 100%; padding: 5%;">
        <div class="container" >
            <div class="row">
                <div class="col-12 col-md-3 col-sm-12">
                    <h3 style="color: #A7D9EE;">About</h3>
                    <p style="text-align:left;color: #cecece;">
                        Otto's Mechanics is a general automobile repair workshop with an excellent reputation for providing best quality services. We are based in UK…</p>
                
                    
                        <a href="#" class="btn10">
                            <span>Read More</span>
                         <div class="transition"></div>
                       </a>
                </div>
                <div class="col-12 col-md-3 col-sm-12"></div>
                <div class="col-12 col-md-3 col-sm-12">
                    <ul style=" list-style-type: none;">
                        <li style="padding: 4px;">
                            <a href="#"class="footerUl" style="font-size:16px;color: #A7D9EE; text-decoration:none;">
                            Mechanic →</a>
                        </li>

                        <li style="padding: 4px;">
                            <a href="#"class="footerUl" style="font-size:16px;color: #A7D9EE; text-decoration:none;">
                            Engine →</a>
                        </li>
                        <li style="padding: 4px;">
                            <a href="#"class="footerUl" style="font-size:16px;color: #A7D9EE; text-decoration:none;">
                            Repair →</a>
                        </li>
                        <li style="padding: 4px;">
                            <a href="#"class="footerUl" style="font-size:16px;color: #A7D9EE; text-decoration:none;">
                            Diagnostic →</a>
                            
                        </li>
                        <li style="padding: 4px;">
                            <a href="#"class="footerUl" style="font-size:16px;color: #A7D9EE; text-decoration:none;">
                            Oil →</a>
                            
                        </li>
                        <li style="padding: 4px;">
                            <a href="#"class="footerUl" style="font-size:16px;color: #A7D9EE; text-decoration:none;">
                            Overhaul →</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 col-sm-12">
                    <h3 style="color: #A7D9EE;">Address</h3>
                    <p style="text-align:left;color: #cecece;"> 
                        Any Where In Uk<br><br>
                        Tel:0321-123456789
                        Cell: 0321-123456789</p>
                        <p style=" text-align: left;">
                            <a href="#"class="footerUl" style="color: #A7D9EE;text-decoration:none;">
                            Get directions on the map →
                        </a>
                        </p>
                </div>
            </div>
            
        </div>
       
    </div>
    <div class="container-fluid" style="background-color:#2b2e33;">
    <div class="lastPortion" style="padding: 10px;">
        <div class="row" style=" display: flex;
        justify-content: space-between;">
            <div class="col-12 col-sm-12 col-md-4" style="display: flex; text-align:center"><p style="color: rgb(121, 121, 121);">© 2021</p>&nbsp;&nbsp;
                <p>  <a href="#" style="text-decoration: none; color: #A7D9EE;">Otto's Mechanics </a> </p></div>
            <div class="col-12 col-sm-12 col-md-4"style="text-align:center">
                <a href="index.html">
                <img src="imgs/footerlogo.png" width="55px" alt="">
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-4" style="text-align: center;" >
                
                <a href="" style="text-decoration: none;" class="footerUl"><i class="fa fa-facebook" aria-hidden="true" style="color: #A7D9EE; margin:5px "></i> </a>
                <a href="" style="text-decoration: none;" class="footerUl"><i class="fa fa-twitter" aria-hidden="true" style="color: #A7D9EE; margin:5px "></i></a>
                <a href="" style="text-decoration: none;" class="footerUl"><i class="fa fa-linkedin" aria-hidden="true" style="color: #A7D9EE; margin:5px "></i></a>
                <a href="" style="text-decoration: none;" class="footerUl"><i class="fa fa-search" aria-hidden="true" style="color: #A7D9EE; margin:5px "></i></a>
            </div>
        </div>
    </div>
</div>
            
</footer>















<!-- <script> //Script for FAQ
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "+"; 
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "x"; 
            moreText.style.display = "inline";
        }
} -->
<script>
    

(function($) { "use strict";

$(function() {
    var header = $(".start-style");
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 10) {
            header.removeClass('start-style').addClass("scroll-on");
        } else {
            header.removeClass("scroll-on").addClass('start-style');
        }
    });
});		
    
//Animation

$(document).ready(function() {
    $('body.hero-anime').removeClass('hero-anime');
});

//Menu On Hover
    
$('body').on('mouseenter mouseleave','.nav-item',function(e){
        if ($(window).width() > 750) {
            var _d=$(e.target).closest('.nav-item');_d.addClass('show');
            setTimeout(function(){
            _d[_d.is(':hover')?'addClass':'removeClass']('show');
            },1);
        }
});	

//Switch light/dark

$("#switch").on('click', function () {
    if ($("body").hasClass("dark")) {
        $("body").removeClass("dark");
        $("#switch").removeClass("switched");
    }
    else {
        $("body").addClass("dark");
        $("#switch").addClass("switched");
    }
});  

})(jQuery); 
</script>
<script>
    $(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up  
$(window).resize(function(){
	if ($(window).width() >= 980){	

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
         $(this).parent().toggleClass("show");
         $(this).parent().find(".dropdown-menu").toggleClass("show"); 
       });

        // hide the menu when the mouse leaves the dropdown
      $( ".navbar .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");  
      });
  
		// do something here
	}	
});  
  
  

// document ready  
});
</script>
<script>
  

</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>