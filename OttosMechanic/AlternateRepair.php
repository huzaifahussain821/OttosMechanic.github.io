<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="service.css" rel="stylesheet">
    <title>Alternate Repair Service</title>
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
                    $('.hvr-reveal').css('color', '#fff');
                    $('.hvr-reveal_button').css('border', '1px solid white');
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
    
    .GQB{
        background-color: #1E2E81 !important;
    color: #fff!important;
    border: 0px;
}
    
    .GQB:hover{
        background-color: #1E2E81 ;
        color: #fff !important;
    }
    .GQW{
      
        background-color: #1E2E81 ;
        color: #fff !important;
        border: 0px;
    }
    .GQW:hover{

        background-color: white !important;
        color: #fff !important;
    }
    .rqBtn:hover{
        background-color: #1E2E81 !important;
        box-shadow: 0px 2px 2px 0px #fff;
       
    }
 @media only screen and (min-width:769px){
  
 .rr:hover{
   background-color: white !important;
   color: #1E2E81 !important;
 }}
    .mm{
        width: 60%;
    }
.sdsds{
    width: 49% !important;
}
@media (max-width: 767px){
    .btnZ{
        width: 100% !important;

    }
    .mm{
        width: 100% !important;
    }
    .sdsds{
        width: auto !important;
    }

    .nav-item::before {
        position: absolute;
        display: block;
        top: 15px;
        left: 0;
        width: 11px;
        height: 1px;
        content: "";
        border: none;
        background-color:white !important;
        display: none !important;
        vertical-align: 0;
    }}
.navbar.scrolled{
background-color: #fff !important;
}
.dropdown {
position: static !important;
}

.dropdown-menu {
border: 0px;
margin-top: 0px !important;
width: 100%;
}
@media only screen and (max-width:768px)
{        
    .vnb{
        margin-bottom:10px;
    }
    .smImg{
        width: 50px;
    margin-left: 73px;
    margin-top: 20px;
    }
    .card-body {
        width: 100%;
        margin-left: -129px;
        margin-top: 100px;
    }
    .chngbtn{
     width: 90% !important;
   }
    .navbar-nav .nav-link, .btn-outline{
        color: black !important;
        border: 0px !important;
     }
.btn-outline{
         display: none;
     }
     .btn-outline-light {
         display: none !important;
     }
.navbar{
background-color: #fff !important;
}   
.dropdown-item {
font-size: 12px !important;
}
}
.hvr-reveal_button:hover{
       background-color: #fff !important;
       color: #000 !important;
   }

</style>
</head>
<body style="box-sizing: border-box;">
<!-- navbar -->
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
<ul class="navbar-nav navbar-fixed-top.scrolled endLink" >
    
    <!--dropdown item of menu-->
    
    <li >
        <a class="nav-link dropdown-toggle hvr-reveal status_nav"
        href="#" id="navbarDropdown"
        role="button" data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false" class=" menulink navbar-fixed-top.fixed " >
         Find Garages &nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>
        </a>
        
        <!--dropdown sub items of menu-->
        <div class="dropdown-menu ex1"
            aria-labelledby="navbarDropdown ">
            <div class="container-fluid">
              <h5> Best Garages For</h5>
            <div class="row ">
                <div class="col-12 col-sm-12 col-md-3 " style="display: flex;">
                   
                   <a class="dropdown-item" href="mobileMechanic.php">
                    <img src="imgs/AllService/mobile-mechanic.svg" width="22px" alt="">

                     &nbsp;&nbsp;Mobile Mechanic
                   </a> 
                </div>
                 <div class="col-12 col-sm-12 col-md-3">
                   <a class="dropdown-item" href="cambeltChange.php"> <img src="imgs/AllService/cambelt.svg" width="22px" alt="">

                    &nbsp;&nbsp;
                    Cambelt Change
                   </a> 
                </div>
                 <div class="col-12 col-sm-12 col-md-3">
                   <a class="dropdown-item" href="brake&Disc.php"> <img src="imgs/AllService/brake-pads-discs.svg" width="22px" alt="">

                    &nbsp;&nbsp;
                    Brake Pads and Discs
                   </a> 
                </div>
                 <div class="col-12 col-sm-12 col-md-3">
                   <a class="dropdown-item" href="Aircon.php"> <img src="imgs/AllService/icon-heatingCooling.svg"width="22px">
                     &nbsp;&nbsp;
                    Aircon Regas
                   </a> 
                </div>
               
            </div>
             <div class="row">
              <div class="col-12 col-sm-12 col-md-3">
                <a class="dropdown-item" href="Diagnostic.php"> <img src="imgs/AllService/icon-diagnostics.svg" width="22px" alt="">

                  &nbsp;&nbsp;
                 Diagnostics
                </a> 
             </div>
                 <div class="col-12 col-sm-12 col-md-3">
                   <a class="dropdown-item" href="fullService.php"> <img src="imgs/AllService/full-service-icon.svg" width="22px" alt="">

                     &nbsp;&nbsp;
                    Full Service
                   </a> 
                </div>
                 <div class="col-12 col-sm-12 col-md-3">
                   <a class="dropdown-item" href="OilChnage.php"> <img src="imgs/AllService/oil-change.svg" width="22px" alt="">

                     &nbsp;&nbsp;
                    Oil Change
                   </a> 
                </div>
                 <div class="col-12 col-sm-12 col-md-3">
                   <a class="dropdown-item" href="MobileTyreFitting.php"> <img src="imgs/AllService/mobile-mechanic.svg" width="22px" alt="">

                     &nbsp;&nbsp;
                    Mobile Tyre Fitting
                   </a> 
                </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-3">
                <a class="dropdown-item" href="shockAbsorber.php"> <img src="imgs/AllService/icon-heatingCooling.svg" width="22px" alt="">

                  &nbsp;&nbsp;
                  Shock Absorber Repair
                </a> 
             </div>
                 <div class="col-12 col-sm-12 col-md-3">
                   <a class="dropdown-item" href="turboFault.php"> <img src="imgs/AllService/icon-engineCooling.svg" width="22px" alt="">

                     &nbsp;&nbsp;
                     Turbo Faults & Replacement
                   </a> 
                </div>
                 <div class="col-12 col-sm-12 col-md-3">
                   <a class="dropdown-item" href="ExhaustFitting.php"> <img src="imgs/AllService/exhaust-fitting.svg" width="22px" alt="">

                     &nbsp;&nbsp;
                     Exhaust Fitting
                   </a> 
                </div>
                 <div class="col-12 col-sm-12 col-md-3">
                   <a class="dropdown-item" href="bodyWork.php"> <img src="imgs/AllService/bodywork-dents.svg" width="22px" alt="">

                     &nbsp;&nbsp;
                     Bodywork, Dents & Smart Repairs
                   </a> 
                </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-12 col-md-3">
                <a class="dropdown-item" href="MOT.php"> <img src="imgs/AllService/mot-icon.svg" width="22px" alt="">

                  &nbsp;&nbsp;
                  MOT
                </a> 
             </div>
                 
            </div>
           
             
             
           <br> <a href="allService.php"> <h6 style="font-weight: 700; color: #244b67;">View All Repairs</h6></a>
            </div>
            
           
        </div>
    </li>
    <li> <a class="nav-link hvr-reveal status_nav"
      href="forGarages.php" class="menulink" >
       For Garages
      </a>
  </li>
    <li> <a class="nav-link hvr-reveal status_nav"
        href="How it works.php" class="menulink" >
         How it Works
        </a>
    </li>
    <li> <a class="nav-link hvr-reveal status_nav"
        href="signUp.php" class="menulink" >
         Sign Up
        </a>
    </li>
    <li> <a class="nav-link hvr-reveal status_nav"
        href="login.php" class="menulink" >
         Log In
        </a>
    </li>
    
    
</ul><ul class="navbar-nav mr-auto navbar-fixed-top.scrolled"></ul>
<ul class="navbar-nav mr-auto navbar-fixed-top.scrolled">
  <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
  <a class="nav-link cornerLink" href="#">
    <button type="button" class="btn btn-primary rqbtn chngbtn" style=" width: 170px;font-size: 18px !important; background-color: #1E2E81 !important; " data-toggle="modal" data-target="#exampleModal">
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


    <!-- Header Portion -->
   <div class="container-fuild" style="z-index: -1;margin-top: 0px !important ;background-image: url(imgs/Service-bg.jpg); height: auto;background-size: cover;width: 100%; padding: 5%;">
        <div class="container" style="text-align: center;">
            <br><br><br><br><br>
            <h1 style="color: #fff;">Book a Full Car Service Near You</h1>
            <br><h3 style="color: white;">
                Compare, Book, Repair.<b> Save.</b> 
            </h3>
            <br>
            <div class="container mm">
               
                                <p style="color: white; text-align: left; margin-bottom: 1px;">What do you need?</p>
                                <div class="dropdown">    
                                                                                                        
                                    <button class="btn btn-default dropdown-toggle" style="width: 100%;height: 50px; background-color: white;font-size: 20px; text-align: left;" 
                                    type="button" 
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expande  d="false">Mobile Mechanic</button>                       
                                      <div class="dropdown-menu pre-scrollable sdsds" aria-labelledby="dropdownMenuButton" >                                                           
                                        <h3></h3>
                                        <input type="text" class="form-control" placeholder="search.." style="font-size: 14px;">                                 
                                       <a class="dropdown-item" href="allService.php">All Services</a>                          
                                       <a class="dropdown-item" href="mobileMechanic.php">Mobile Mechanic</a>
                                       <a class="dropdown-item" href="FullService&MOT.php">Servicing and MOT</a>
                                       <a class="dropdown-item" href="clutchReplacement.php">Clutch and Gearbox Repairs</a>
                                       <a class="dropdown-item" href="clutchReplacement.php">Clutch Repairs</a>
                                       <a class="dropdown-item" href="brake&Disc.php">Brake Repairs</a>                                        
                                       <a class="dropdown-item" href="mobileMechanic.php">Mobile Mechanics and Services</a>                                                
                                       <a class="dropdown-item" href="ExhaustFitting.php">Engine and Cooling</a>                                              
                                       <a class="dropdown-item" href="Aircon.php">Air-Con, Heating and Cooling</a>                                              
                                       <a class="dropdown-item" href="bodyWork.php">Bodywork, Dents and Smart Repairs</a>                                  
                                       <a class="dropdown-item" href="bodyWork.php">Breakdown and Recovery</a>                                               
                                        <a class="dropdown-item" href="Diagnostic.php">Diagnostics</a>                                        
                                        <a class="dropdown-item" href="electricalFault.php">Electrical and Batteries</a>        
                                        <a class="dropdown-item" href="electricalFault.php">Hybrid and Electric Vehicles</a>                                               
                                                       
                                     
                    </div>
                    
                   
                    
                      
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-sm-12">
                        <p style="color: white; text-align: left; margin-bottom: 1px;">Enter Reg Number</p>
                        <input type="Enter your Reg" class="form-control" placeholder="Enter Your Reg" style="font-size: 24px;">
             
                    </div>
                    <div class="col-12 col-md-6 col-sm-12">
                        <p style="color: white; text-align: left; margin-bottom: 1px;">Your Postcode
                        </p>
                        <input type="Enter your Reg" class="form-control" placeholder="Postcode" style="font-size: 24px;">
             
                    </div>
                </div>
                <br><br> <a href="reqQuote.php">
                    <button class="btn rr rqBtn btnZ" style="width: 25%; height: 40px; color:white;margin-right: auto; font-weight:light; border:0px !important; border-radius: 10px; background-color: #1E2E81;">Get Quotes</button>
                  </a>
                </div>
             </div>

            <br><br>
            <br><br>
            <div class="container" style="text-align: center !important;">
     
      
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
                      <div class="modal-body" style="text-align: left !important; ">
                        
                        <label for="model" style="text-align: left !important;"> &nbsp;Enter Model</label>
                        <input type="text" name="" id="" class="form-control" placeholder="enter car model.." style="width: 100%;">
                         &nbsp;<small>Required*</small>
                      </div>
                      <div class="modal-body" style="text-align: left !important; margin-top: -10px;">
                        <label for="make" style="text-align: left !important;"> &nbsp;Enter Make</label>
                        <input type="text" name="" id="" class="form-control" placeholder="enter car make.." style="width: 100%;">
                        &nbsp;<small>Required*</small>
                      </div>
                      <div class="modal-body" style="text-align: left !important; margin-top: -10px;">
                        <label for="make" style="text-align: left !important;"> &nbsp;Enter Registration Number</label>
                        <input type="text" name="" id="" class="form-control" placeholder="enter car registration no.." style="width: 100%;">
                        &nbsp;<small>Required*</small>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-success"style="background-color: #1E2E81;">Continue</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <
            <br><br><br>
            <p style="color: white; font-size: 22px;">
            <a href="index.php">Home </a><i class="fa fa-chevron-right" aria-hidden="true"></i> <a href="#">All Repairs</a>
            </p>
        </div>
   </div>
   
   
   <!--End Header Portion -->

<!-- portion -->
<div class="container" style="text-align: center; padding: 2%">
    <p style="font-weight:700">Find Great Value Local Servicing, Car Repairs and Parts with Who Can Fix My Car.</p>
    <p style="text-align:center;">
        We work with over 15,333 specialists including Garages, Mobile Mechanics and Dealerships. Whether you want to save money or find a local specialist, we can help.<br><br>
     Enter your Registration, describe what's wrong, and local garages will send competitive quotes straight to your inbox. Read customer reviews before taking your pick, and even book in online!<br>           
    </p><br>
    <br>
    


        
</div>
<!-- Cards -->
<div class="container-fluid" style="width: 80%;">
    <h4 style="text-align: center;">Top garages (15,231 found)</h4>
<div class="row"  style="border: 1px solid silver;">
    <div class="col-12 col-sm-12 col-md-8" style="background-color:#1E2E81;" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card"style="background-color:#1E2E81;border: 0px">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                                <img class="" src="imgs/card2.png" alt="Card image cap" style="border-radius: 70px !important;margin-top: 10%; margin-left: 5px;">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title" ><a href="#"style="color: white !important;">Car Technic</a></h4>
                                <h6 class="card-text" style="color: white;"><b style="color: white;">25 </b>Jobs Completed. <i class="fa fa-location-arrow" aria-hidden="true"></i> Mitcham
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    5.0 / 5
                                </h6>
                                <hr>
                                <p style="color: #fff; text-align:left ;">We are an independent Vehicle service station situated in Liongate Enterprise Park on Morden Road. Specialist is German and Japanese cars. Along with</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4" style="margin-bottom: 10px;">
        <div class="container-fluid">
            <br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <a href="viewProfile.php">
                    <button class="btn btn-default vpBtn" style="width: 100%; height: 40px; font-size: 14px; font-weight: 500; background-color: white; box-shadow: 0px 2px 2px 1px silver;">View profile</button>
                </a></div>
                
                <div class="col-12 col-sm-12 col-md-6"> 
                    <a href="reqQuote.php">
                    <button class="btn btn-success rqBtn" style="width: 100%; height: 40px; font-size: 14px; font-weight: 500; background-color: #1E2E81;border:0px; color:#fff;">Request a Quote</button>
                </a>
                </div>
            </div>
            <br>
            <div class="row" style="border: 0.5px solid silver;">
                <div class="col-12 col-sm-12 col-md-2">
                    <div class="smImg">
                    <img src="images/car-flat.png" width="50px" style="border-radius:10px ; margin-top: 10px;">
                </div>
                </div>
                <div class="col-12 col-sm-12 col-md-10">
                    <p style="margin-bottom: 0px; color: #1E2E81;"> <span style="font-weight: 700; "> Cris, Toyota Previa on 31.05.21 </span></p>
                    <p style="margin-top: 0px; margin-bottom: 10px; text-align: left; color: #1E2E81;">Kind, courteous and professional. I would 100% recommended this garage</p>
                </div>
            </div>
            
        </div>
    </div>
    
</div>
<br><br>    
<div class="row"  style="border: 1px solid silver;">
    <div class="col-12 col-sm-12 col-md-8" style="background-color:#1E2E81;" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card"style="background-color:#1E2E81;border: 0px">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                                <img class="" src="imgs/card2.png" alt="Card image cap" style="border-radius: 70px !important;margin-top: 10%; margin-left: 5px;">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title" ><a href="#"style="color: white !important;">Car Technic</a></h4>
                                <h6 class="card-text" style="color: white;"><b style="color: white;">25 </b>Jobs Completed. <i class="fa fa-location-arrow" aria-hidden="true"></i> Mitcham
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    5.0 / 5
                                </h6>
                                <hr>
                                <p style="color: #fff; text-align:left ;">We are an independent Vehicle service station situated in Liongate Enterprise Park on Morden Road. Specialist is German and Japanese cars. Along with</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4" style="margin-bottom: 10px;">
        <div class="container-fluid">
            <br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <a href="viewProfile.php">
                    <button class="btn btn-default vpBtn" style="width: 100%; height: 40px; font-size: 14px; font-weight: 500; background-color: white; box-shadow: 0px 2px 2px 1px silver;">View profile</button>
                </a></div>
                
                <div class="col-12 col-sm-12 col-md-6"> 
                    <a href="reqQuote.php">
                    <button class="btn btn-success rqBtn" style="width: 100%; height: 40px; font-size: 14px; font-weight: 500; background-color: #1E2E81;border:0px; color:#fff;">Request a Quote</button>
                </a>
                </div>
            </div>
            <br>
            <div class="row" style="border: 0.5px solid silver;">
                <div class="col-12 col-sm-12 col-md-2">
                    <div class="smImg">
                    <img src="images/car-flat.png" width="50px" style="border-radius:10px ; margin-top: 10px;">
                </div>
                </div>
                <div class="col-12 col-sm-12 col-md-10">
                    <p style="margin-bottom: 0px; color: #1E2E81;"> <span style="font-weight: 700; "> Cris, Toyota Previa on 31.05.21 </span></p>
                    <p style="margin-top: 0px; margin-bottom: 10px; text-align: left; color: #1E2E81;">Kind, courteous and professional. I would 100% recommended this garage</p>
                </div>
            </div>
            
        </div>
    </div>
    
</div>
<br><br>
<div class="row"  style="border: 1px solid silver;">
    <div class="col-12 col-sm-12 col-md-8" style="background-color:#1E2E81;" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card"style="background-color:#1E2E81;border: 0px">
                        <div class="card-horizontal">
                            <div class="img-square-wrapper">
                                <img class="" src="imgs/card2.png" alt="Card image cap" style="border-radius: 70px !important;margin-top: 10%; margin-left: 5px;">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title" ><a href="#"style="color: white !important;">Car Technic</a></h4>
                                <h6 class="card-text" style="color: white;"><b style="color: white;">25 </b>Jobs Completed. <i class="fa fa-location-arrow" aria-hidden="true"></i> Mitcham
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                    5.0 / 5
                                </h6>
                                <hr>
                                <p style="color: #fff; text-align:left ;">We are an independent Vehicle service station situated in Liongate Enterprise Park on Morden Road. Specialist is German and Japanese cars. Along with</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4" style="margin-bottom: 10px;">
        <div class="container-fluid">
            <br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6">
                    <a href="viewProfile.php">
                    <button class="btn btn-default vpBtn" style="width: 100%; height: 40px; font-size: 14px; font-weight: 500; background-color: white; box-shadow: 0px 2px 2px 1px silver;">View profile</button>
                </a></div>
                
                <div class="col-12 col-sm-12 col-md-6"> 
                    <a href="reqQuote.php">
                    <button class="btn btn-success rqBtn" style="width: 100%; height: 40px; font-size: 14px; font-weight: 500; background-color: #1E2E81;border:0px; color:#fff;">Request a Quote</button>
                </a>
                </div>
            </div>
            <br>
            <div class="row" style="border: 0.5px solid silver;">
                <div class="col-12 col-sm-12 col-md-2">
                    <div class="smImg">
                    <img src="images/car-flat.png" width="50px" style="border-radius:10px ; margin-top: 10px;">
                </div>
                </div>
                <div class="col-12 col-sm-12 col-md-10">
                    <p style="margin-bottom: 0px; color: #1E2E81;"> <span style="font-weight: 700; "> Cris, Toyota Previa on 31.05.21 </span></p>
                    <p style="margin-top: 0px; margin-bottom: 10px; text-align: left; color: #1E2E81;">Kind, courteous and professional. I would 100% recommended this garage</p>
                </div>
            </div>
            
        </div>
    </div>
    
</div>

</div>
<br><br>
<div class="container-fluid" style="width: 80%;">
    <div class="row"  style="border: 1px solid silver;">
        <div class="col-12 col-sm-12 col-md-8" style="background-color:#1E2E81;" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card"style="background-color:#1E2E81;border: 0px">
                            <div class="card-horizontal">
                                <div class="img-square-wrapper">
                                    <img class="" src="imgs/card2.png" alt="Card image cap" style="border-radius: 70px !important;margin-top: 10%; margin-left: 5px;">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title" ><a href="#"style="color: white !important;">Car Technic</a></h4>
                                    <h6 class="card-text" style="color: white;"><b style="color: white;">25 </b>Jobs Completed. <i class="fa fa-location-arrow" aria-hidden="true"></i> Mitcham
                                        <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                        5.0 / 5
                                    </h6>
                                    <hr>
                                    <p style="color: #fff; text-align:left ;">We are an independent Vehicle service station situated in Liongate Enterprise Park on Morden Road. Specialist is German and Japanese cars. Along with</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-4" style="margin-bottom: 10px;">
            <div class="container-fluid">
                <br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <a href="viewProfile.php">
                        <button class="btn btn-default vpBtn" style="width: 100%; height: 40px; font-size: 14px; font-weight: 500; background-color: white; box-shadow: 0px 2px 2px 1px silver;">View profile</button>
                    </a></div>
                    
                    <div class="col-12 col-sm-12 col-md-6"> 
                        <a href="reqQuote.php">
                        <button class="btn btn-success rqBtn" style="width: 100%; height: 40px; font-size: 14px; font-weight: 500; background-color: #1E2E81;border:0px; color:#fff;">Request a Quote</button>
                    </a>
                    </div>
                </div>
                <br>
                <div class="row" style="border: 0.5px solid silver;">
                    <div class="col-12 col-sm-12 col-md-2">
                        <div class="smImg">
                        <img src="images/car-flat.png" width="50px" style="border-radius:10px ; margin-top: 10px;">
                    </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-10">
                        <p style="margin-bottom: 0px; color: #1E2E81;"> <span style="font-weight: 700; "> Cris, Toyota Previa on 31.05.21 </span></p>
                        <p style="margin-top: 0px; margin-bottom: 10px; text-align: left; color: #1E2E81;">Kind, courteous and professional. I would 100% recommended this garage</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    </div>
    <br><br>
    <div class="container-fluid" style="width: 80%;">
        <div class="row"  style="border: 1px solid silver;">
            <div class="col-12 col-sm-12 col-md-8" style="background-color:#1E2E81;" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 mt-3">
                            <div class="card"style="background-color:#1E2E81;border: 0px">
                                <div class="card-horizontal">
                                    <div class="img-square-wrapper">
                                        <img class="" src="imgs/card2.png" alt="Card image cap" style="border-radius: 70px !important;margin-top: 10%; margin-left: 5px;">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title" ><a href="#"style="color: white !important;">Car Technic</a></h4>
                                        <h6 class="card-text" style="color: white;"><b style="color: white;">25 </b>Jobs Completed. <i class="fa fa-location-arrow" aria-hidden="true"></i> Mitcham
                                            <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                                            5.0 / 5
                                        </h6>
                                        <hr>
                                        <p style="color: #fff; text-align:left ;">We are an independent Vehicle service station situated in Liongate Enterprise Park on Morden Road. Specialist is German and Japanese cars. Along with</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4" style="margin-bottom: 10px;">
                <div class="container-fluid">
                    <br>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <a href="viewProfile.php">
                            <button class="btn btn-default vpBtn" style="width: 100%; height: 40px; font-size: 14px; font-weight: 500; background-color: white; box-shadow: 0px 2px 2px 1px silver;">View profile</button>
                        </a></div>
                        
                        <div class="col-12 col-sm-12 col-md-6"> 
                            <a href="reqQuote.php">
                            <button class="btn btn-success rqBtn" style="width: 100%; height: 40px; font-size: 14px; font-weight: 500; background-color: #1E2E81;border:0px; color:#fff;">Request a Quote</button>
                        </a>
                        </div>
                    </div>
                    <br>
                    <div class="row" style="border: 0.5px solid silver;">
                        <div class="col-12 col-sm-12 col-md-2">
                            <div class="smImg">
                            <img src="images/car-flat.png" width="50px" style="border-radius:10px ; margin-top: 10px;">
                        </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-10">
                            <p style="margin-bottom: 0px; color: #1E2E81;"> <span style="font-weight: 700; "> Cris, Toyota Previa on 31.05.21 </span></p>
                            <p style="margin-top: 0px; margin-bottom: 10px; text-align: left; color: #1E2E81;">Kind, courteous and professional. I would 100% recommended this garage</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
        <br><br>

        <h6 style="text-align: center;"> <a href="#" style="color: black;"> Show More Garages</a></h6><br>
        <br><br>

<div class="container-fuild" style="background-image: url(imgs/Service-bg.jpg); height: auto;background-size: cover;width: 100%; padding: 5%;">
        <div class="container" style="text-align: center;">
            <br><br><br>
            <h1 style="color: #fff;">Find a Mobile Mechanic</h1>
            <br><h3 style="color: white;">
                Compare, Book, Repair.<b> Save.</b> 
            </h3>
            <br>
            </div>
            <div class="container fwCon" style="width: 45%;">
                <div class="row" style=" display: flex;
                justify-content: space-between;">
                    <div class="col-12 col-md-8 col-sm-12 vnb">
                        <input type="Enter your Reg" class="form-control" placeholder="Enter Your Reg" style="font-size: 24px;">
                    </div>
                    
                
                    
                    <div class="col-12 col-md-4 col-sm-12">                   
                    <button class="btn btn-default rqBtn" 
                    style="text-align: center !important;border-radius:40px; color:white;width: 100% !important;
                    height: 50px; background-color: #1E2E81;font-size: 20px; text-align: left;"
                 type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expande  d="false">GET QUOTES</button>                       
                                      
                    </div>
                </div>
             </div>
             
            </div>
            <!-- FAQ --><br><br>
            <!-- <div class="container" >
                <h3>Frequently asked questions</h3>
                <br><br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-10">
                        <p style="padding:10px;background-color: rgb(66, 163, 253); color: white; 
                        border-radius: 20px;">What is a Mobile Mechanic?<span id="dots"></span><span id="more">
                            <br>A Mobile Mechanic will usually come to your house or place of work with the parts, 
                            and the tools, they need to fix or service your car then and there. Alternatively they may 
                            come to collect your car, repair it at their garage and then return it to you.</span></p>
                
                    </div>
                    
                    <div class="col-12 col-sm-12 col-md-2">
                        
               <button class="btn btn-default vpBtn"onclick="myFunction()" id="myBtn">+</button>
                    </div>
                </div>
                <br>
                
            </div> -->
            <!-- FAQ END -->


            <!-- Average rating  -->
<!-- <div class="container">
    <h3 style="text-align: center;"><b>Average rating for Mobile Mechanic  bookings</b></h3>
    <h3 style="text-align: center;">
        <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
        <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
        <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
        <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
        <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
        4.69
    </h3>
        <p style="text-align: center;">2203 reviews</p>

        <br><br>
<div class="row">
    <div class="col-md-3 col-12 col-sm-12">
        <div class="card" style="height: 400px;">
            <div class="card-body">
              <h5 class="card-title">Sat</h5>
              <h6 class="card-subtitle mb-2 text-muted">27/05/2021</h6>
              <p class="card-text"><i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i><br>
                Ford B-Max
                <br><br>
                Good job
                </p>
                
                <div class="" style="background-color: white; bottom: 0% !important; position: absolute;">
                    ARMZ MOTORS MOBILE CAR MECHANIC
                  </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-12 col-sm-12">
        <div class="card" style="height: 400px;">
            <div class="card-body">
              <h5 class="card-title">mike</h5>
              <h6 class="card-subtitle mb-2 text-muted">27/05/2021</h6>
              <p class="card-text"><i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i><br>
                Vauxhall Zafira
                <br><br>
                excellent service, knowledgable, great advice and very helpful thank you
                </p>
                
                <div class="" style="background-color: white; bottom: 0% !important; position: absolute;">
                    A Dixon Autos Ltd
                  </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-12 col-sm-12">
        <div class="card" style="height: 400px;">
            <div class="card-body">
              <h5 class="card-title">Zoe</h5>
              <h6 class="card-subtitle mb-2 text-muted">24/05/2021</h6>
              <p class="card-text"><i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i><br>
                Peugeot 308

                <br><br>
                Couldn't do enough for me and I would recommend to everyone I know!


                </p>
                
                <div class="" style="background-color: white; bottom: 0% !important; position: absolute;">
                    S D NORGATE Mobile Mechanic

                  </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-12 col-sm-12">
        <div class="card" style="height: 400px;">
            <div class="card-body">
              <h5 class="card-title">Ian</h5>
              <h6 class="card-subtitle mb-2 text-muted">24/05/2021</h6>
              <p class="card-text"><i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: rgb(255, 230, 0)"></i><br>
                Fiat\Abarth Trigano

                <br><br>
                A fantastic job very quick and efficient competed. Su0er Mechanic friendly and helpful, defeinantly recommended and will use again


                </p>
                
                <div class="" style="background-color: white; bottom: 0% !important; position: absolute;">
                    Dorset (Hampshire)Response (Mobile Repairs)

                  </div>
            </div>
        </div>
    </div>
</div> -->

<!-- TABLE -->
<br><br>
<div class="container">
<h3>What is the cost to call out a mobile mechanic?</h3>
<br><p style="text-align: justify;">
    The cost of getting a Mobile Mechanic will vary depending on the type of repair required. 
    Below are average quotes, split by car make on OttosMechanic.com for mobile services. However, 
    depending on the job type they will vary a lot, so we recommend posting a job to get tailored quotes
</p>
<br><p style="text-align: center;">
    Mobile Mechanic Cost by Car Make</p>
    
    <table>
        <thead>
          <tr>
            <th style="color: white;">Car Make</th>
            <th style="color: white;">Average Price</th>
            <th style="color: white;">Get Quotes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td data-column="Car Make" style="color: #000;">Vauxhall</td>
            <td data-column="Average Price" style="color: #000;">£60.91</td>
            <td data-column="Get Quotes "><button class="btn btn-success rqBtn GQW" >Compare Quotes</button></td>
                   </tr>
          <tr>
            <td data-column="Car Make">Ford</td>
            <td data-column="Average Price">£51.01</td>
            <td data-column="Get Quotes"><button class="btn btn-success rqBtn GQW" >Compare Quotes</button></td>
            
          </tr>
          <tr>
            <td data-column="Car Make"style="color: #000;">BMW</td>
            <td data-column="Average Price"style="color: #000;">£70.21</td>
            <td data-column="Get Quotes"><button class="btn btn-success rqBtn GQW" >Compare Quotes</button></td>
                   </tr>
          <tr>
            <td data-column="Car Make">Volkswagen</td>
            <td data-column="Average Price">£38.22</td>
            <td data-column="Get Quotes"><button class="btn btn-success rqBtn GQW" >Compare Quotes</button></td>
                  </tr>
          <tr>
            <td data-column="Car Make" style="color: #000;">Mercedes</td>
            <td data-column="Average Price" style="color: #000;">£62.34</td>
            <td data-column="Get Quotes"><button class="btn btn-success rqBtn GQW" >Compare Quotes</button></td>
                   </tr>
                   <tr>
            <td data-column="Car Make">Peugeot</td>
            <td data-column="Average Price">£67.81</td>
            <td data-column="Get Quotes"><button class="btn btn-success rqBtn GQW" >Compare Quotes</button></td>
                   </tr>
                   <tr>
            <td data-column="Car Make"style="color: #000;">Audi</td>
            <td data-column="Average Price"style="color: #000;">£50.43</td>
            <td data-column="Get Quotes"><button class="btn btn-success rqBtn GQW" >Compare Quotes</button></td>
                   </tr>
                   <tr>
            <td data-column="Car Make">Renault</td>
            <td data-column="Average Price">£70.41</td>
            <td data-column="Get Quotes"><button class="btn btn-success rqBtn GQW" >Compare Quotes</button></td>
                   </tr>
                   <tr>
            <td data-column="Car Make"style="color: #000;">Nissan</td>
            <td data-column="Average Price"style="color: #000;">£80.26</td>
            <td data-column="Get Quotes"><button class="btn btn-success rqBtn GQW" >Compare Quotes</button></td>
                   </tr>
                   <tr>
            <td data-column="Car Make">MINI</td>
            <td data-column="Average Price">£50.43</td>
            <td data-column="Get Quotes"><button class="btn btn-success rqBtn GQW" >Compare Quotes</button></td>
                   </tr>
        </tbody>
      </table>
      <p>This table uses data from quotes provided on OttosMechanic between 03/03/2021 and 01/06/2021.</p>
      <br>
      
<h3><b>Mobile Mechanics</b></h3>
<p style="text-align: justify;">A Mobile Car Mechanic operates from a van as opposed to having a fixed position at a garage. 
    This means that they can carry out car repairs mobile; offering customers convenience and flexibility on 
    when they can get their car fixed. They can fix your car at work or even on your drive. They will also transport it 
    to a nearby garage if a more complex repair is required.</p>
    <br><br>
    <p style="text-align: justify; ">
        Hesitancy to use them is often due to a lack of trust associated with not having an actual garage as a basis for reputation. 
        The worry is that they will turn up, carry out some work and leave after taking money, only for the car to break down again and 
        there is no way to contact them afterwards.<br>

        However, with OttosMechanic you can compare reviews, prices and accreditation of local mobile mechanics for free. Additionally,
        find reassurance in that most are insured against damages that might occur, as well as offering warranties which protects against 
        malpractice.
    <br><br>
    If your schedule is too busy to take your car to a garage for repairs, a mobile mechanic could be the perfect 
    solution to finding car repair quickly with zero hassle.</p>
    <h3><b>Cost of Mobile Mechanic</b></h3>
<p style="text-align: justify;">A Mobile Car Mechanic operates from a van as opposed to having a fixed position at a garage. 
    Mobile mechanics are often a less expensive option for car repairs as they do not have many of the overhead costs associated with 
    running or owning a garage. However, that is not always the case, as it depends how far they must travel to and from you to carry out 
    the repair. When they are travelling, they are not working and thus need to be compensated for their time.
<br><br>
For a full overview on average mobile mechanic costs across car makes, scroll up to consult our cost table.</p>
    <br><br>
    <h3><b>What can a Mobile Mechanic repair?</b></h3><br>
    <p style="text-align: left;"><b>Brake Pads and Discs</b><br><br>
        Mobile brake repairs are a popular request and are relatively easy to carry out mobile.<br><br>
    <b>Clutch repairs</b><br><br>
    Clutch repairs can be carried out by mobile mechanics. However, not all will repair clutches as it is not an enjoyable job because without a ramp, they must crawl under the car and lay on their back for over two hours whilst changing the clutch.

<br><br><b>Full Car Service</b><br><br>
A mobile car full service can be carried out at your home or at work with relative ease. A series of checks of your car's main systems will be undertaken as well as filter replacement and an oil top up.
<br><br><b>Cambelt Change</b><br><br>
We have many mobile cambelt specialists within our network whom can carry out a timing belt repair or replacement efficiently.

<br><br><b>Paint Repair</b><br><br>
Depending on the extent of the damage, paint repairs can be performed by a specialist mobile mechanic. We have many specialists within our network that can provide paint repair or car body repair.

<br><br><b>Tyre Change</b><br><br>
A tyre change is a simple job that can be completed just about anywhere. Just be sure to give the mechanic your tyre size when requesting a quote on OttosMechanic.


<br><br><b>Battery Change</b><br><br>
Battery Replacement is usually a very simple job, whether you already have the battery or need a new one both supplied and fitted.
<br><br><b>Electrical Faults</b><br><br>
Although electrical faults can vary greatly in severity, many can be diagnosed and fixed by a mobile mechanic. Once diagnosed, if they cannot fix the issue themselves they will often recommend a fantastic garage that can help.
</p><br><br>
<h3>What are the Advantages of Mobile Repair?
</h3>
<p style="text-align: justify;">A mobile car mechanic can be most useful if you are stuck in a tricky spot. Some operate 24 hours and can get out to you day or night, in order to carry out a repair when you need it the most.
<br><br>
They will often own a van and drive out to where your car is parked to carry out the repair work, ideal if your car will not drive or if it is unsafe to do so.
<br><br>
There is a huge amount of jobs they can carry out as many problems in a car can be repaired without the need for new parts or an entire team of mechanics.
<br><br>
However, there are of course certain jobs that they simply cannot complete as the amount of labour and tools required would not be made available when operating remotely, rather than for a garage.

</p>
<br><br>
<!-- Tab Pills -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" style="color: black !important; margin-left:10px">Top locations</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab" style="color: black !important; margin-left:10px">Top makes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" style="color: black !important; margin-left:10px">Top jobs</a>
  </li>
</ul><!-- Tab panes -->
<div class="tab-content">
    <br>
  <div class="tab-pane active" id="tabs-1" role="tabpanel">
        
        <div class="row" style="font-size: 14px;">
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Leeds</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Newcastle </a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Manchester</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Birmingham</a><br><br>
            </div>
        </div>
        <div class="row"style="font-size: 14px;">
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Leeds</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Cardiff</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Glasgow</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Liverpool</a><br><br>
            </div>
        </div>
        <div class="row"style="font-size: 14px;">
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Coventry</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Derby</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Nottingham</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Edinburgh</a><br><br>
            </div>
        </div>
        <div class="row"style="font-size: 14px;">
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Belfast</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Bristol</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Oxford</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="LocLondon.php" style="color: #1E2E81;">Mobile Mechanic in Leicester</a><br><br>
            </div>
        </div>
  </div>
  <div class="tab-pane" id="tabs-2" role="tabpanel">
        <!-- <p>Third Panel</p> -->
        <div class="row" style="font-size: 14px;">
            
            <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">Vauxhall Mobile Mechanic</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">Ford Mobile Mechanic
                </a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">Volkswagen Mobile Mechanic
                </a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">BMW Mobile Mechanic
                </a><br><br>
            </div>
        </div>
        <div class="row"style="font-size: 14px;">
            
            <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">Audi Mobile Mechanic</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
               <a href="topCompany.php" style="color: #1E2E81;">Peugeot Mobile Mechanic</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">Mercedes Mobile Mechanic</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">Renault Mobile Mechanic</a><br><br>
            </div>
        </div>
        <div class="row"style="font-size: 14px;">            
            
            <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">Nissan Mobile Mechanic</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">Citroen Mobile Mechanic</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">Toyota Mobile Mechanic</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">Honda Mobile Mechanic</a><br><br>
            </div>
        </div>
        <div class="row"style="font-size: 14px;">
          


           <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">  MINI Mobile Mechanic</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">Fiat Mobile Mechanic</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">Hyundai Mobile Mechanic</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="topCompany.php" style="color: #1E2E81;">SEAT Mobile Mechanic</a><br><br>
            </div>
        </div>
        <div class="row"style="font-size: 14px;">
            
            <div class="col-12 col-sm-12 col-md-3">
                 <a href="topCompany.php" style="color: #1E2E81;"> Land Rover Mobile Mechanic</a><br><br>
             </div>
             <div class="col-12 col-sm-12 col-md-3">
                 <a href="topCompany.php" style="color: #1E2E81;">Skoda Mobile Mechanic</a><br><br>
             </div>
             <div class="col-12 col-sm-12 col-md-3">
                 <a href="topCompany.php" style="color: #1E2E81;">Kia Mobile Mechanic</a><br><br>
             </div>
             <div class="col-12 col-sm-12 col-md-3">
                 <a href="topCompany.php" style="color: #1E2E81;">Mazda Mobile Mechanic</a><br><br>
             </div>
         </div>
  </div>
  <div class="tab-pane" id="tabs-3" role="tabpanel">
    <!-- <p>Second Panel</p> -->
        <div class="row" style="font-size: 14px;">
            <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">Full Service</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">Clutch Replacement</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">MOT</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">Full Service and MOT</a><br><br>
            </div>
        </div>
        <div class="row"style="font-size: 14px;">
            <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">Oil Change</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
               <a href="allService.php" style="color: #1E2E81;">Aircon Regas</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">Interim Service</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">Timing Chain</a><br><br>
            </div>
        </div>
        <div class="row"style="font-size: 14px;">
            
            
            
            
            <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">Puncture Repair</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">Windscreen Replacement</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">Alternator Repair</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">Exhaust Repair</a><br><br>
            </div>
        </div>
        <div class="row"style="font-size: 14px;">
            
           <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">Diesel Particulate Filter Clean</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">Electrical Faults</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">Front Wheel Alignment</a><br><br>
            </div>
            <div class="col-12 col-sm-12 col-md-3">
                <a href="allService.php" style="color: #1E2E81;">Turbo Faults and Replacement</a><br><br>
            </div>
        </div>
        <div class="row"style="font-size: 14px;">
            <div class="col-12 col-sm-12 col-md-3">
                 <a href="allService.php" style="color: #1E2E81;"> Parking Sensors</a><br><br>
             </div>
             <div class="col-12 col-sm-12 col-md-3">
                 <a href="allService.php" style="color: #1E2E81;">Interim Service and MOT</a><br><br>
             </div>
             <div class="col-12 col-sm-12 col-md-3">
                 <a href="allService.php" style="color: #1E2E81;">Shock Absorber Repair</a><br><br>
             </div>
             <div class="col-12 col-sm-12 col-md-3">
                 <a href="allService.php" style="color: #1E2E81;">Pre-Purchase Car Inspection</a><br><br>
             </div>
         </div>
    </div>
    
</div>
</div><br><br>
<!-- Avg rating End -->

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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>