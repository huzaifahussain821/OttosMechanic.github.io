<!DOCTYPE php>
<php lang="en">
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
    <title>Request Quote</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <script>
           $(document).ready(function(){
             var scroll_pos = 0;
               $(document).scroll(function() { 
                   scroll_pos = $(this).scrollTop();
                   if(scroll_pos > 50) {
                       $('.').css('color', 'black');
                   } else {
                       $('.').css('color', 'black');
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
   
<script>
       
    $(window).scroll(function(){
$('nav').toggleClass('scrolled', $(this).scrollTop() > 50);

});
  </script>
<style>
.navbar{
background-color: #fff !important;
}   

.dropdown {
position: static !important;
}

.dropdown-menu {
border: 0px;
margin-top: 0px !important;
width: 100% !important;
}
@media only screen and (max-width:768px)
{        
    .frm{
        width:100% !important;
    }
    .chngbtn{
        width: 90% !important;
    }
    .bodyWork{
    
    margin-bottom: 100px !important;
   
     }
    .btn.btn-outline-light._button{
     display: none !important;
   }
.navbar{
background-color: #fff !important;
}   
.dropdown-item {
font-size: 12px !important;
padding: 5px;
}
}
._button{
       background-color: #fff !important;
       color: #000 !important;
       border: 1px solid black;
   }
</style>
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
}
.nav-link{
    border:0px !important;
}}
</style>
</head>
<body> 
    
<!-- navbar -->
<div class="navigation-wrap bg-light start-header start-style">
    <div class="container">
        <div class="fluid-container bodyWork">
    
    
        
            <nav class="navbar navbar-expand-lg navbar-tra
            justify-content-between  fixed-top "
        style="background: transparent;">
        <a class="navbar-brand" href="index.php">
        <img src="logo.png"
           
            class="d-inline-block align-top" alt="">
        
        </a>
        <button class="navbar-toggler "
            type="button" data-toggle="collapse"
            data-target="#navbarNavDropdown01"
            aria-controls="navbarNavDropdown01"
            aria-expanded="false"
            aria-label="Toggle navigation"
            style="outline-color:#244b67 !important;">
            <i class="fa fa-bars fa-lg" aria-hidden="true" style="color: #244b67;"></i>
        </button>
        
        <div class="collapse navbar-collapse "
        id="navbarNavDropdown01">
        <ul class="navbar-nav mr-auto navbar-fixed-top.scrolled"> </ul>
        <ul class="navbar-nav navbar-fixed-top.scrolled ">
                    
          <!--dropdown item of menu-->
          <li >
              <a class="nav-link dropdown-toggle  status_nav" style="color: #000;"
              href="#" id="navbarDropdown"
              role="button" data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"  >
               Find Garages &nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>
              </a>
              
              <!--dropdown sub items of menu-->
              <div class="dropdown-menu ex1" 
              aria-labelledby="navbarDropdown ">
              <div class="container-fluid ">
                <h5> Best Garages For</h5>
              <div class="row conPad">
                  <div class="col-12 col-sm-12 col-md-3 " >
                     
                     <a class="dropdown-item" href="mobileMechanic.php"style="display: flex; font-size:14px">
                      <img src="imgs/AllService/mobile-mechanic.svg" width="22px" alt="">
                           
                       &nbsp;&nbsp;Mobile Mechanic
                     </a> 
                  </div>
                   <div class="col-12 col-sm-12 col-md-3">
                     <a class="dropdown-item" href="cambeltChange.php"style="display: flex; font-size:14px" > <img src="imgs/AllService/cambelt.svg" width="22px" alt="">

                      &nbsp;&nbsp;
                      Cambelt Change
                     </a> 
                  </div>
                   <div class="col-12 col-sm-12 col-md-3">
                     <a class="dropdown-item" href="brake&Disc.php"style="display: flex; font-size:14px"> <img src="imgs/AllService/brake-pads-discs.svg" width="22px" alt="">

                      &nbsp;&nbsp;
                      Brake Pads and Discs
                     </a> 
                  </div>
                   <div class="col-12 col-sm-12 col-md-3">
                     <a class="dropdown-item" href="Aircon.php"style="display: flex; font-size:14px"> <img src="imgs/AllService/icon-heatingCooling.svg"width="22px">
                       &nbsp;&nbsp;
                      Aircon Regas
                     </a> 
                  </div>
                 
              </div>
               <div class="row conPad">
                <div class="col-12 col-sm-12 col-md-3">
                  <a class="dropdown-item" href="Diagnostic.php"style="display: flex; font-size:14px"> <img src="imgs/AllService/icon-diagnostics.svg" width="22px" alt="">

                    &nbsp;&nbsp;
                   Diagnostics
                  </a> 
               </div>
                   <div class="col-12 col-sm-12 col-md-3">
                     <a class="dropdown-item" href="fullService.php"style="display: flex; font-size:14px"> <img src="imgs/AllService/full-service-icon.svg" width="22px" alt="">

                       &nbsp;&nbsp;
                      Full Service
                     </a> 
                  </div>
                   <div class="col-12 col-sm-12 col-md-3">
                     <a class="dropdown-item" href="OilChnage.php"style="display: flex; font-size:14px"> <img src="imgs/AllService/oil-change.svg" width="18px" alt="">

                       &nbsp;&nbsp;
                      Oil Change
                     </a> 
                  </div>
                   <div class="col-12 col-sm-12 col-md-3">
                     <a class="dropdown-item" href="MobileTyreFitting.php"style="display: flex; font-size:14px"> <img src="imgs/AllService/mobile-mechanic.svg" width="22px" alt="">

                       &nbsp;&nbsp;
                      Mobile Tyre Fitting
                     </a> 
                  </div>
              </div>
              <div class="row conPad">
                <div class="col-12 col-sm-12 col-md-3">
                  <a class="dropdown-item" href="shockAbsorber.php"style="display: flex; font-size:14px"> <img src="imgs/AllService/icon-heatingCooling.svg" width="22px" alt="">

                    &nbsp;&nbsp;
                    Shock Absorber Repair
                  </a> 
               </div>
                   <div class="col-12 col-sm-12 col-md-3">
                     <a class="dropdown-item" href="turboFault.php"style="display: flex; font-size:14px"> <img src="imgs/AllService/icon-engineCooling.svg" width="22px" alt="">

                       &nbsp;&nbsp;
                       Turbo Faults and Replacement
                     </a> 
                  </div>
                   <div class="col-12 col-sm-12 col-md-3">
                     <a class="dropdown-item" href="ExhaustFitting.php"style="display: flex; font-size:14px"> <img src="imgs/AllService/exhaust-fitting.svg" width="22px" alt="">

                       &nbsp;&nbsp;
                       Exhaust Fitting
                     </a> 
                  </div>
                   <div class="col-12 col-sm-12 col-md-3">
                     <a class="dropdown-item" href="bodyWork.php"style="display: flex; font-size:14px"> <img src="imgs/AllService/bodywork-dents.svg" width="22px" alt="">

                       &nbsp;&nbsp;
                       Bodywork, Dents & Smart Repairs
                     </a> 
                  </div>
              </div>
              <div class="row conPad">
                <div class="col-12 col-sm-12 col-md-3">
                  <a class="dropdown-item" href="MOT.php"style="display: flex; font-size:14px"> <img src="imgs/AllService/mot-icon.svg" width="22px" alt="">

                    &nbsp;&nbsp;
                    MOT
                  </a> 
               </div>
                   
              </div>
             
               
               
             <br> <a href="allService.php"> <h6 style="font-weight: 700; color: #244b67;">View All Repairs</h6></a>
              </div>
              
             
          </div>
          </li>
            <li> <a class="nav-link  status_nav" style="color: black;"
              href="forGarages.php" class="menulink" >
               For Garages
              </a>
          </li>
            <li> <a class="nav-link  status_nav" style="color: black;"
                href="How it works.php" class="menulink" >
                 How it Works
                </a>
            </li>
            <li> <a class="nav-link  status_nav" style="color: black;"
                href="signUp.php" class="menulink" >
                 Sign Up
                </a>
            </li>
            <li> <a class="nav-link  status_nav" style="color: black;"
                href="login.php" class="menulink" >
                 Log In
                </a>
            </li>
            
            
        </ul><ul class="navbar-nav mr-auto navbar-fixed-top.scrolled"></ul>
        <ul class="navbar-nav mr-auto navbar-fixed-top.scrolled">
          <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
          <a class="nav-link cornerLink" href="#">
            <button type="button" class="btn btn-primary rqbtn chngbtn" style="border-radius: 5px;border: 1px solid rgb(14, 14, 141); width: 110px;font-size: 18px !important; background-color: #1E2E81 !important; " data-toggle="modal" data-target="#exampleModal">
              Register
            </button>
          </a>
        </li> 
        </ul>
        
        </div>
        </nav>
   
</div>
        </div>
    </div>
</div>
<!-- body --><br><br><br><br><br>
<div class="container-fluid" style="padding: 20px;">
    <div class="headPortion box">
        <h2 style="text-align: center;">Fixing your car just got easier</h2>
        <p><b>15,326 garages</b> providing quotes to over <b>3,303,620 service and repair jobs</b></p>
        <br><br>
        
        <div class="container frm" style="width: 40%;">
        <div class="container box" style="text-align:center;  box-shadow: 0px 3px 2px 2px silver; padding: 20px;">
            <h4 style="text-align: center;">What is your car registration? *</h4>
        <br>
            <input type="text" class="form-control inpReg" id="exampleInputtext1" aria-describedby="req" placeholder="F896RYU"style="background-color:#1E2E81; width:100%; text-align:center;font-size:40px  ">
       <div class="row" style="margin-top: 15px;">
         
           <div class="col-12 col-md-10">
              
               <p style="color: rgb(35, 0, 131); font-size: 14px !important; text-align: left !important; cursor: pointer;" data-toggle="modal" data-target="#exampleModal">
                <u>Not my car</u>
               </p>
               </div>
              <!-- Modal -->
      
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content container">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" >
          <img src="logo.png" width="90px" alt="">
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="text-align: left !important;">
            <div class="container" style="width: 90%;margin-top: 20px;"">
          <label for="model" style="text-align: left !important;"> &nbsp;Enter Model</label>
          <input type="text" name="" id="" class="form-control" placeholder="enter car model.." style="width: 100%;">
           
        </div> 
        </div>
        <div class="modal-body" style="text-align: left !important;">
            <div class="container" style="width: 90%;">
          <label for="model" style="text-align: left !important;"> &nbsp;Enter Make</label>
          <input type="text" name="" id="" class="form-control" placeholder="enter car make.." style="width: 100%;">
          
        </div> 
        </div>
       
        <div class="modal-body" style="text-align: left !important;">
            <div class="container" style="width: 90%;">
          <label for="model" style="text-align: left !important;"> &nbsp;Enter Registeration Number</label>
          <input type="text" name="" id="" class="form-control" placeholder="enter car registration.." style="width: 100%;">
          
        </div> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" style="background-color: #1E2E81;">Continue</button>
        </div>
    </div>
      </div>
    </div>

       </div>
        
        </div>
        <br><br>
        <div class="container box" style="text-transform:uppercase;  box-shadow: 0px 3px 2px 2px silver; padding: 20px;">
   <!-- API -->
 <div style="text-align: left;">
    <h5>Car Details:</h5>
    <?php 
    if(isset($_POST['getCar'])){
    
        $curl = curl_init();
        $registrationNumber=$_POST['enterCustomerName'];
    
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://driver-vehicle-licensing.api.gov.uk/vehicle-enquiry/v1/vehicles",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_POST => true,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS =>"{\n\t\"registrationNumber\": \"$registrationNumber\"\n}",
          CURLOPT_HTTPHEADER => array(
            "x-api-key: JzfZ57UusW7fg1H3ZzKMY19ZNcULUWQ8ahy9ocSN",
            "Content-Type: application/json"
          ),
        ));
        
        $response = curl_exec($curl);
        
    
        $decoded=json_decode($response);
        foreach($decoded as $key =>$val){
            echo $key . ': ' . $val . '<br>' ;   
        }    
    }
    ?>
    </div>
      </div>
      <br><br>
        <div class="container box" style="text-align:center;  box-shadow: 0px 3px 2px 2px silver; padding: 20px;">
            <h4 style="text-align: center;">Your postcode *
            </h4>
        <br>
        <div class="row">
            <div class="col-12 col-md-8 col-sm-12">
            <input type="text" class="form-control inpLoc" id="exampleInputtext1" aria-describedby="req" placeholder="EG: NE3 4HL"style="background-color: silver; width:100%; text-align:center;font-size:24px; color
            black;  ">
            <small id="req" class="form-text text-muted" style="text-align: left;"><b>To find garages near you</b></small>
        </div>
            <div class="col-12 col-md-4 col-sm-12">
                <button class="btn btn-default vpBtn" style="width: 100%; background-color: rgb(250, 250, 250); height: 50px;">Location <i class="fa fa-map-marker" aria-hidden="true"></i></button>
        </div>

        
        </div>
        </div>


<br><br>
        <div class="container box" style="text-align:center;  box-shadow: 0px 3px 2px 2px silver; padding: 20px;">
            <h4 style="text-align: center;">What are you looking for?
            </h4>
        <br>
        <div class="row">
            <div class="col-12 col-md-7 col-sm-12">
                <div class="" style="width: 100%; border:1px solid rgb(250, 250, 250);  padding: 10px; margin-top: 0px;">
                   <h3><i class="fa fa-file-text" aria-hidden="true"></i>   Full Service
                    <br><b> <a href="#" style="color: blue; font-size: small;">Select Different Job</a> </b></h3> 
            </div>
        </div>
            <div class="col-12 col-md-5 col-sm-12">
                <div class="" style="width: 100%; border:1px solid rgb(250, 250, 250);  padding: 20px; margin-top: 0px;">Average saving <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <b>£72.53*</b>
                </div>
        </div>

        
        </div>
        <br>
        <button class="btn btn-primary" style="text-align: right; font-size: 20px; padding: 10px;">Confirm</button>
    
        </div>
    </div>
    </div>

    

</div>


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
                <a href="index.php">
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
 // executes when php-Document is loaded and DOM is ready

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


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</php>