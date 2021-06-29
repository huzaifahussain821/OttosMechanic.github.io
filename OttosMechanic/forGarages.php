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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>For Garages </title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    
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
          
          @media only screen and (min-width:1000px){
  
  .navbar-expand-lg .navbar-collapse {
    margin-left: 143px;
    margin-top: 10px;
  }
  .nav-link{
    font-size: 20px !important;
    font-weight: 400;
    font-family: "Segoe UI", sans-serif !important;
  }
} 
          .conPad{
              padding: 10px !important;
          }
        .navbar.scrolled{
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
        .klkl{
              margin-top: 2% !important;
          }
         .chngbtn{
     width: 90% !important;
   }
         .b1{
             margin-left: 110px;
         }
         .b2{
             margin-left: 85px;
         }
         .b3{
             margin-left: 85px;
         }
         .b5{
             margin-left: 65px;
         }
         .b6{
             margin-left: 43px !important;
         }
         .axd{
             margin-top: 20px;
         }
        .conPad{
              padding: 0px !important;
          }
     .navbar{
     background-color: #fff !important;
     color: black;
     border: 0px;
     }   
     .navbar-nav .nav-link, .btn-outline{
        color: black !important;
        border: 0px !important;
     }
     .dropdown-item {
         font-size: 12px !important;
       padding: 0px;
     }
     .hidePara{
         display: none;
     }
     .btn-outline{
         display: none;
     }
     .btn-outline-light {
         display: none !important;
     }

     }

 </style>
 <style>
     .dropdown-toggle::after{
         display: none !important;
     }
    .navbar.scrolled{
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
 .navbar{
 background-color: #fff  !important;
 }   
 .dropdown-item {
     font-size: 12px !important;
     padding: 5px;
 }
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
    .customCol
    {
        height: auto;
    }
    .hideCol{
        display: none;
    }
}

nav > .nav.nav-tabs{

border: none;
  color:#fff;
  background:#ffffff;
  border-radius:0;

}
nav > div a.nav-item.nav-link,
nav > div a.nav-item.nav-link.active
{
border: none;
  padding: 18px 25px;
  color:#fff;
  background:#ffffff;
  border-radius:0;
}

nav > div a.nav-item.nav-link.active:after
{
content: "";
position: relative;
bottom: -60px;
left: -10%;
border: 15px solid transparent;
border-top-color: #ffffff ;
}
.tab-content{
background: #fdfdfd;
  line-height: 25px;
  border: 1px solid #ddd;
  border-top:5px solid #ffffff;
  border-bottom:5px solid #ffffff;
  padding:30px 25px;
}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus
{
border: none;
  background: #ffffff;
  color:#fff;
  border-radius:0;
  transition: -background 0.20s linear;
}
.rqBtn:hover{
    color: white !important;
    background-color: #1E2E81 !important;
}
.vpBtn{
    background-color: #1E2E81 !important;
}
.vpBtn:hover{
    color: #1E2E81 !important;
    background-color: white !important;
}
 .vpBtn:hover a{
    color: #1E2E81 !important;
}
.rqBtn:hover a{
    color: white !important;
}
.boxHover{
    border-radius: 20px;
    border: 2px solid white;
}
.boxHover:hover{
    color: #1E2E81 !important;
    cursor: pointer;
    border-radius: 20px;
    box-shadow: 0px 2px 3px 1px rgb(163, 163, 163);
    
}
.navbar.scrolled {
  background-color: #fff !important;
}
.hvr-reveal_button:hover{
       background-color: #fff !important;
       color: #000 !important;
   }
   .roq:hover{
            color: navy !important;
          }
          .btn-default:hover{
              color: navy !important;
          }
</style>
</head>
<body  style=" background-image:url(images/garageBg.png); width: 100%; min-height:100px !important ;background-size: cover; background-repeat: no-repeat; "> 
<!-- navbar -->
<div class="fluid-container bodyWork">
    
    
        
    <nav class="navbar navbar-expand-lg navbar-tra
    justify-content-between  fixed-top "
style="background: transparent;">
<a class="navbar-brand" href="index.html">
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
  <li class="">
      <a class="nav-link dropdown-toggle hvr-reveal status_nav" style="color: #fff;"
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
             
             <a class="dropdown-item" href="mobileMechanic.html"style="display: flex; font-size:14px">
              <img src="imgs/AllService/mobile-mechanic.svg" width="22px" alt="">
                   
               &nbsp;&nbsp;Mobile Mechanic
             </a> 
          </div>
           <div class="col-12 col-sm-12 col-md-3">
             <a class="dropdown-item" href="cambeltChange.html"style="display: flex; font-size:14px" > <img src="imgs/AllService/cambelt.svg" width="22px" alt="">

              &nbsp;&nbsp;
              Cambelt Change
             </a> 
          </div>
           <div class="col-12 col-sm-12 col-md-3">
             <a class="dropdown-item" href="brake&Disc.html"style="display: flex; font-size:14px"> <img src="imgs/AllService/brake-pads-discs.svg" width="22px" alt="">

              &nbsp;&nbsp;
              Brake Pads and Discs
             </a> 
          </div>
           <div class="col-12 col-sm-12 col-md-3">
             <a class="dropdown-item" href="Aircon.html"style="display: flex; font-size:14px"> <img src="imgs/AllService/icon-heatingCooling.svg"width="22px">
               &nbsp;&nbsp;
              Aircon Regas
             </a> 
          </div>
         
      </div>
       <div class="row conPad">
        <div class="col-12 col-sm-12 col-md-3">
          <a class="dropdown-item" href="Diagnostic.html"style="display: flex; font-size:14px"> <img src="imgs/AllService/icon-diagnostics.svg" width="22px" alt="">

            &nbsp;&nbsp;
           Diagnostics
          </a> 
       </div>
           <div class="col-12 col-sm-12 col-md-3">
             <a class="dropdown-item" href="fullService.html"style="display: flex; font-size:14px"> <img src="imgs/AllService/full-service-icon.svg" width="22px" alt="">

               &nbsp;&nbsp;
              Full Service
             </a> 
          </div>
           <div class="col-12 col-sm-12 col-md-3">
             <a class="dropdown-item" href="OilChnage.html"style="display: flex; font-size:14px"> <img src="imgs/AllService/oil-change.svg" width="18px" alt="">

               &nbsp;&nbsp;
              Oil Change
             </a> 
          </div>
           <div class="col-12 col-sm-12 col-md-3">
             <a class="dropdown-item" href="MobileTyreFitting.html"style="display: flex; font-size:14px"> <img src="imgs/AllService/mobile-mechanic.svg" width="22px" alt="">

               &nbsp;&nbsp;
              Mobile Tyre Fitting
             </a> 
          </div>
      </div>
      <div class="row conPad">
        <div class="col-12 col-sm-12 col-md-3">
          <a class="dropdown-item" href="shockAbsorber.html"style="display: flex; font-size:14px"> <img src="imgs/AllService/icon-heatingCooling.svg" width="22px" alt="">

            &nbsp;&nbsp;
            Shock Absorber Repair
          </a> 
       </div>
           <div class="col-12 col-sm-12 col-md-3">
             <a class="dropdown-item" href="turboFault.html"style="display: flex; font-size:14px"> <img src="imgs/AllService/icon-engineCooling.svg" width="22px" alt="">

               &nbsp;&nbsp;
               Turbo Faults and Replacement
             </a> 
          </div>
           <div class="col-12 col-sm-12 col-md-3">
             <a class="dropdown-item" href="ExhaustFitting.html"style="display: flex; font-size:14px"> <img src="imgs/AllService/exhaust-fitting.svg" width="22px" alt="">

               &nbsp;&nbsp;
               Exhaust Fitting
             </a> 
          </div>
           <div class="col-12 col-sm-12 col-md-3">
             <a class="dropdown-item" href="bodyWork.html"style="display: flex; font-size:14px"> <img src="imgs/AllService/bodywork-dents.svg" width="22px" alt="">

               &nbsp;&nbsp;
               Bodywork, Dents & Smart Repairs
             </a> 
          </div>
      </div>
      <div class="row conPad">
        <div class="col-12 col-sm-12 col-md-3">
          <a class="dropdown-item" href="MOT.html"style="display: flex; font-size:14px"> <img src="imgs/AllService/mot-icon.svg" width="22px" alt="">

            &nbsp;&nbsp;
            MOT
          </a> 
       </div>
           
      </div>
     
       
       
     <br> <a href="allService.html"> <h6 style="font-weight: 700; color: #244b67;">View All Repairs</h6></a>
      </div>
      
     
  </div>
  </li>
    <li> <a class="nav-link hvr-reveal status_nav"
      href="forGarages.html" class="menulink" >
       For Garages
      </a>
  </li>
    <li> <a class="nav-link hvr-reveal status_nav"
        href="How it works.html" class="menulink" >
         How it Works
        </a>
    </li>
    <li> <a class="nav-link hvr-reveal status_nav"
        href="signUp.html" class="menulink" >
         Sign Up
        </a>
    </li>
    <li> <a class="nav-link hvr-reveal status_nav"
        href="login.html" class="menulink" >
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
   

    
<br><br><br><br>
<!-- Header Portion -->
<div class="container-fuild">
    <div class="container" style="text-align: center;">
    <div class="row">
    <div class="col-12 col-sm-12 col-md-6 customCol">
        <h3 style="color: white; text-align: left;">
            <br><br><br><br>
            Join the UK's largest work provider</h3 style="color: white;">
            <h4 style="color: white; text-align: left;">Fill your booking calendar for £249.99  a<br> year <b>(just £20.84 a month)</b></h4>
            <p style="text-align: left; color: white; " class="hidePara">
                Unlimited quoting, time saving automation and access to over 2,000,000 drivers. Otto'sMechanic.com brings garages work and growth. See
                <a href="allService.html" style="color: white !important;"><u>all our features</u></a>
            </p>
            <br>
            <div class="row">
                <div class="col-12 col-md-4 col-sm-12">
                    <button class="btn btn-primary rqBtn axbtn axd" style="box-shadow: 0px 2px 3px 1px rgb(7, 18, 168);border-radius: 5px; background-color:white;  border:0px;">
                        <a href="login.html" style="color: #1E2E81 ;font-size: 14px;font-weight: 700 !important;">   Create Free Account     
                        </button>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                    <button class="btn btn-primary vpBtn axbtn axd" style="box-shadow: 0px 2px 3px 1px rgb(7, 18, 168);border-radius: 5px; background-color:#1E2E81;  border:0px;">
                        <a href="login.html" style="color: white ;font-size: 14px;font-weight: 700 !important;">     Request Call Back             
                        </button>
                        </a>
                    </div>
            </div>
    </div>
    <div class="col-12 col-sm-12 col-md-1"></div>
    <div class="col-12 col-sm-12 col-md-5 hideCol">
        <br><br><br><br>
        <img src="imgs/forGarage-bg-col.png" style="width: 100%;" alt="">
    </div>
</div>


    </div>
    
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
<div class="container-fluid text-center klkl" style="background-color:#263139; margin-top: 12%;">
   
    <div class="container">
        
     
        
    </div>
    

  </div>

<div class="container">
    <br><br> <br> <br> 
    <h4 style="text-align: center;">How does OTTO'S MECHANICS work?</h4>
    <br>
    <br>
    <div class="row" style=" display: flex;justify-content: center;">
        <div class="col-12 col-md-3 col-sm-12 boxHover" style="background-color: #1E2E81; padding: 10px;     ">
            <h4 style="color: #fff;  margin:0px !important" >Find  </h4>
            <p style="text-align: left;color: #fff; font-size: 14px; margin:0px !important">Drivers from around the UK post repair and service jobs.</p>
        </div>
        <div class="col-12 col-md-3 col-sm-12 boxHover"  style="background-color: #1E2E81; padding: 10px;  ">
            <h4 style="color: #fff; margin:0px !important" > Quote   </h4>
            <p style="text-align: left;color: #fff; font-size: 14px;margin:0px !important">You send out bespoke and automated quotes.</p>
        </div>
        <div class="col-12 col-md-3 col-sm-12 boxHover"  style="background-color: #1E2E81; padding: 10px;  ">
            <h4 style="color: #fff; margin:0px !important"  >Book  </h4>
            <p style="text-align: left;color: #fff; font-size: 14px;margin:0px !important">The driver then accepts your quote and books in.</p>
        </div>
        <div class="col-12 col-md-3 col-sm-12 boxHover"  style="background-color: #1E2E81; padding: 10px;  ">
            <h4 style="color: #fff;   margin:0px !important">Review  </h4>
            <p style="text-align: left;color: #fff; font-size: 14px;margin:0px !important">You do the work & the driver pays and leaves you a review.</p>
        </div>
    </div>
<br><br>
<div class="row">
    <div class="col-12 col-md-6 col-sm-12">
        <h4>What could you earn in 30 days?</h4>
    <p style="text-align: left;">
        We connect thousands of drivers around the UK with garages every day; use our tool below to see the work in your area, or create a free account.</p>

    </div>
    <div class="col-12 col-md-6 col-sm-12" data-aos="fade-up">
        <h5>Your postcode</h5>
        <input type="text" placeholder="ENTER YOUR POSTCODE" class="form-control " style="width: 100%;">
        <button class="btn btn-primary vpBtn" style="padding: 5px !important; border-radius: 20px; background-color:#1E2E81; box-shadow: 0px 0px 0px 0px #1E2E81;">Go</button>
    </div>
</div>
    
      <br><br>

     
</div>





<!-- Body -->




<br><br>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6">
            <div class="mapouter"><div class="gmap_canvas">
                <iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/d/embed?mid=1Pj2ly5dkJoaHqvs6qMmwFA6uajQ" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe><a href="https://www.google.com/maps/d/embed?mid=1Pj2ly5dkJoaHqvs6qMmwFA6uajQ"></a><br>
                <style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style>
                <a href="https://www.google.com/maps/d/embed?mid=1Pj2ly5dkJoaHqvs6qMmwFA6uajQ">email google map</a>
                <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <h6>Total Value <small>(last 30 days)</small></h6>
            <div class="numbers" style="display: inline; font-size: 60px; font-weight: 700;">
           <span style="background-color: #1E2E81; color: white; padding: 4px; border-radius: 5px;">£</span> 
           <span style="background-color: #1E2E81; color: white; padding: 4px; border-radius: 5px;">1</span> 
           <span style="color: #1E2E81 !important;">,</span> 
           <span style="background-color: #1E2E81; color: white; padding: 4px; border-radius: 5px;">8</span> 
           <span style="background-color: #1E2E81; color: white; padding: 4px; border-radius: 5px;">3</span>
           <span style="background-color: #1E2E81; color: white; padding: 4px; border-radius: 5px;">7</span>
           <span  style="color: #1E2E81 !important;">,</span>
           <span style="background-color: #1E2E81; color: white; padding: 4px; border-radius: 5px;">4</span>
           <span style="background-color: #1E2E81; color: white; padding: 4px; border-radius: 5px;">2</span>
           <span style="background-color: #1E2E81; color: white; padding: 4px; border-radius: 5px;">7</span>  

            </div>
            <br><br>
            <h6>Total number jobs in your area <small>(last 30 days)</small></h6>
            <div class="numbers" style="display: inline; font-size: 60px; font-weight: 700;">
           <span style="background-color: #1E2E81; color: white; padding: 4px; border-radius: 5px;">8</span> 
           <span style="background-color: #1E2E81; color: white; padding: 4px; border-radius: 5px;">3</span> 
           <span style="color: #1E2E81 !important;">,</span> 
           <span style="background-color: #1E2E81; color: white; padding: 4px; border-radius: 5px;">8</span> 
           <span style="background-color: #1E2E81; color: white; padding: 4px; border-radius: 5px;">2</span>
           <br>
           <h6>Types of jobs in your area</h6>
           <div class="row">
               <div class="col-12 col-sm-4 col-md-4" style="background-color: #ececec; border: 2px solid white;">
                   <div class="row">
                       <div class="col-12 col-sm-3 col-md-3">
                           <img src="imgs/AllService/cambelt.svg" style="width:100%" class="cImg">
                       </div>
                       <div class="col-12 col-sm-12 col-md-9">
                        <p>Cambelt Repairs</p>
                       </div>
                   </div>
               </div>
               <div class="col-12 col-4-12 col-md-4" style="background-color: #ececec; border: 2px solid white;">
                <div class="row">
                    <div class="col-12 col-sm-3 col-md-3">
                        <img src="imgs/AllService/brake-pads-discs.svg" style="width:100%" class="cImg">
                    </div>
                    <div class="col-12 col-sm-12 col-md-9">
                     <p>Brake Replace

                    </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-4" style="background-color: #ececec; border: 2px solid white;">
                <div class="row">
                    <div class="col-12 col-sm-3 col-md-3">
                        <img src="imgs/AllService/icon-steering.svg" style="width:100%" class="cImg">
                    </div>
                    <div class="col-12 col-sm-12 col-md-9">
                     <p>Steering Repairs</p>
                    </div>
                </div>
            </div>
           </div>
           <div class="row">
            <div class="col-12 col-sm-4 col-md-4" style="background-color: #ececec; border: 2px solid white;">
                <div class="row">
                    <div class="col-12 col-sm-3 col-md-3">
                        <img src="imgs/AllService/icon-battery.svg" style="width:100%" class="cImg">
                    </div>
                    <div class="col-12 col-sm-12 col-md-9">
                     <p>Battery Replace</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-4-12 col-md-4" style="background-color: #ececec; border: 2px solid white;">
             <div class="row">
                 <div class="col-12 col-sm-3 col-md-3">
                     <img src="imgs/AllService/bodywork-dents.svg" style="width:100%" class="cImg">
                 </div>
                 <div class="col-12 col-sm-12 col-md-9">
                  <p>Bodywork</p>
                 </div>
             </div>
         </div>
         <div class="col-12 col-sm-4 col-md-4" style="background-color: #ececec; border: 2px solid white;">
             <div class="row">
                 <div class="col-12 col-sm-3 col-md-3">
                     <img src="imgs/AllService/clutch-and-gearbox.svg" style="width:100%" class="cImg">
                 </div>
                 <div class="col-12 col-sm-12 col-md-9">
                  <p>Clutch Repair</p>
                 </div>
             </div>
         </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4" style="background-color: #ececec; border: 2px solid white;">
                <div class="row">
                    <div class="col-12 col-sm-3 col-md-3">
                        <img src="imgs/AllService/exhaust-fitting.svg" style="width:100%" class="cImg">
                    </div>
                    <div class="col-12 col-sm-12 col-md-9">
                     <p>Exhaust Repairs</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-4-12 col-md-4" style="background-color: #ececec; border: 2px solid white;">
             <div class="row">
                 <div class="col-12 col-sm-3 col-md-3">
                     <img src="imgs/AllService/icon-heatingCooling.svg" style="width:100%" class="cImg">
                 </div>
                 <div class="col-12 col-sm-12 col-md-9">
                  <p>Engine Repairs </p>
                 </div>
             </div>
         </div>
         <div class="col-12 col-sm-4 col-md-4" style="background-color: #ececec; border: 2px solid white;">
             <div class="row">
                 <div class="col-12 col-sm-3 col-md-3">
                     <img src="imgs/AllService/bodywork-dents.svg" style="width:100%" class="cImg">
                 </div>
                 <div class="col-12 col-sm-12 col-md-9">
                  <p>Cambelt Repairs</p>
                 </div>
             </div>
         </div>
        </div>
        <div class="row" >
            <div class="col-12 col-sm-4 col-md-4" style="width: auto !important;background-color: #ececec; border: 2px solid white;">
          <p style="text-align: center;">  +many more</p>
            </div>
            </div>
        

            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-sm-12">
                <h4>How do we grow your garage?</h4>
                <p style="text-align: left;">We're not just here to help you find work - we want garages to grow and continue to benefit throughout the lifetime of their WCFMC account.</p style="text-align: left;">
               
            </div>
            <div class="col-12 col-md-6 col-sm-12"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-3 col-sm-12"data-aos="fade-out">
                
                <img src="imgs/tools.png" alt="" style="margin: 50px; margin-left: 80px; width: 30%; text-align: center;">
                <h4 style="text-align: center;">New work finds you</h4>
                <p style="text-align: center;">Quote on as much work as you want from the thousands of drivers in your area.</p>
            </div>
            <div class="col-12 col-md-3 col-sm-12"data-aos="fade-out">
                
                <img src="imgs/location.png" alt="" style="margin: 50px; margin-left: 80px; width: 30%; text-align: center;">
                <h4 style="text-align: center;">Become more visible</h4>
                <p style="text-align: center;">Boost your presence with a profile, reviews, specialist repair badges and join industry bodies.</p>
            </div>
            <div class="col-12 col-md-3 col-sm-12"data-aos="fade-out">
               
                <img src="imgs/calendar.png" alt="" style="margin: 50px; margin-left: 80px; width: 30%; text-align: center;">
                <h4 style="text-align: center;">Save time everyday
                </h4>
                <p style="text-align: center;">Our system is designed to give you free time so you can do what makes you money; work on cars

                    .</p>
            </div>
            <div class="col-12 col-md-3 col-sm-12"data-aos="fade-out">
               
                <img src="imgs/connection.png" alt="" style="margin: 50px; margin-left: 80px; width: 30%; text-align: center;">
                <h4 style="text-align: center;">Connect with brands
                </h4>
                <p style="text-align: center;">Gain access to massive brands, join work providing networks and join tow-in/warranty providers

                </p>
            </div>
    </div>
</div><br><br>
<!-- <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <nav>
            <div class="container">
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><img src="imgs/tab-img.PNG" alt=""></a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><img src="imgs/tab-img2.PNG" alt=""></a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><img src="imgs/tab-img3.PNG" alt=""></i></a>
           
          </div></div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4">
                        <h5><b>Millions Of Drivers</b></h5>
                        <p style="text-align: left;">
                            Gain access to jobs from over 1M returning drivers we’ve processed over 2,200,000 job enquiries.</p>
                           <br>
                            <h5><b>Brand Deals</b></h5>
                        <p style="text-align: left;">
                            Gain access to deals and connect with massive brands (Shell, Varta, LUK, etc...)</p>
                    
                    </div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <h5><b>Garage Profile Pages</b></h5>
                        <p style="text-align: left;">
                            Show off your history, reviews, affiliations, services & awards, and receive direct job requests.</p>
                           <br>
                            <h5><b>Network Work</b></h5>
                        <p style="text-align: left;">
                            Join networks for further work opportunities (RAC, Green Flag, Autoguard Warranties etc...)</p>
                    
                    </div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <h5><b>Collect Reviews</b></h5>
                        <p style="text-align: left;">
                            Build your reputation with customer reviews; automatically collected from confirmed work.</p>
                           <br>
                            <br>
                        <p style="text-align: left;">
                            Want to see everything we offer?</p>
                            <button class="btn bt-default vpBtn" style="width: 50%; background-color: rgb(58, 44, 255); color: white;">
                                    View All Features
                            </button>
                    
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4">
                        <h5><b>SmartQuotes</b></h5>
                        <p style="text-align: left;">
                            Use our AI to automatically send accurately priced quotes instantly for any car/repair/engine combination.</p>
                           <br>
                            <h5><b>Online Bookings</b></h5>
                        <p style="text-align: left;">
                            Accept and manage driver bookings online through our dashboard’s booking system.</p>
                    
                    </div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <h5><b>AutoQuotes</b></h5>
                        <p style="text-align: left;">
                            Set fixed prices for your choice of services to respond to quote requests instantly and much more</p>
                           <br>
                            <h5><b>Automated Part Ordering</b></h5>
                        <p style="text-align: left;">
                            Use our parts distributor integration for accurate quoting and ordering of parts when needed.</p>
                    
                    </div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <h5><b>Website Widgets</b></h5>
                        <p style="text-align: left;">
                            Add our review and booking widgets to your site to boost visitor engagement and enable online bookings.</p>
                           <br>
                            <br>
                        <p style="text-align: left;">
                            Want to see everything we offer?</p>
                            <button class="btn bt-default vpBtn" style="width: 50%; background-color: rgb(58, 44, 255); color: white;">
                                    View All Features
                            </button>
                    
                    </div>
                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4">
                        <h5><b>Job Dashboard</b></h5>
                        <p style="text-align: left;">
                            View & apply for jobs through our dashboard and see any alerts for jobs won.</p>
                           <br>
                            <h5><b>Direct Payment</b></h5>
                        <p style="text-align: left;">
                            Customers pay your garage direct, on the day, with no middle man.</p>
                    
                    </div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <h5><b>Split Payments</b></h5>
                        <p style="text-align: left;">
                            Offer split payments to help and encourage drivers with large repair bills</p>
                           <br>
                            <h5><b>Quote Control</b></h5>
                        <p style="text-align: left;">
                            Control the messaging and customise automated quotes down to make, model, year, engine size, etc…</p>
                    
                    </div>
                    <div class="col-12 col-sm-12 col-md-4">
                        <h5><b>Expert Support</b></h5>
                        <p style="text-align: left;">
                            Phone & email support with WCFMC garage experts, 9am-5pm Monday to Friday,</p>
                           <br>
                            <br>
                        <p style="text-align: left;">
                            Want to see everything we offer?</p>
                            <button class="btn bt-default vpBtn" style="width: 50%; background-color: rgb(58, 44, 255); color: white;">
                                    View All Features
                            </button>
                    
                    </div>
                </div>
            </div>
          </div>
          
        </div>
      
      </div>
    </div>
</div> -->
</div>
</div>
</div>




<br>
<!-- aboveFooter sec -->
<div class="container-fluid" style="background-color: #1E2E81">
    <div class="row" style="padding: 20px;">
        <div class="col-12 col-sm-12 col-md-3">
            <h5 style="color: white !important;">Top locations</h5>
            <br>
            <ul style="text-decoration: none; list-style: none;">
            <li> <a href="LocLondon.html" style="color: white;"> Garages in London </a></li>
            <li> <a href="LocLondon.html" style="color: white;"> Garages in Leeds </a></li>
            <li> <a href="LocLondon.html" style="color: white;"> Garages in Liverpool </a></li>
            <li> <a href="LocLondon.html" style="color: white;"> Garages in Manchester </a></li>
            <li> <a href="LocLondon.html" style="color: white;"> Mobile Mechanics in London </a></li>
            <li> <a href="LocLondon.html" style="color: white;"> Clutch Repairs in London </a></li>
            </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-3">
            
            <br><br>
            <ul style="text-decoration: none; list-style: none;">
            <li> <a href="LocLondon.html" style="color: white;"> Garages in Birmingham </a></li>
            <li> <a href="LocLondon.html" style="color: white;"> Garages in Glasgow </a></li>
            <li> <a href="LocLondon.html" style="color: white;"> Garages in Edinburgh </a></li>
            <li> <a href="LocLondon.html" style="color: white;"> Garages in Bristol </a></li>
            <li> <a href="LocLondon.html" style="color: white;"> Brake Repairs in London </a></li>
            <li> <a href="LocLondon.html" style="color: white;"> Clutch Repair in Birmingham </a></li>
            </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-3">
            <h5 style="color: white !important;">Top services</h5>
            <br>
            <ul style="text-decoration: none; list-style: none;">
            <li> <a href="clutchReplacement.html"style="color: white;">Clutch Repairs </a></li>
            <li> <a href="brake&Disc.html"style="color: white;">Brake Repairs </a></li>
            <li> <a href="ExhaustFitting.html"style="color: white;">Exhaust Repair </a></li>
            <li> <a href="clutchReplacement.html"style="color: white;">Clutch Replacement </a></li>
            <li> <a href="OilChnage.html"style="color: white;">Oil Change </a></li>
            <li> <a href="MobileTyreFitting.html"style="color: white;">Mobile tyre fitting </a></li>
            </ul>
        </div>
        <div class="col-12 col-sm-12 col-md-3">
            
            <br><br>
            <ul style="text-decoration: none; list-style: none;">
            <li> <a href="cambeltChange.html"style="color: white;">Cambelt Change </a></li>
            <li> <a href="fullService.html"style="color: white;">Full Service </a></li>
            <li> <a href="mobileMechanic.html"style="color: white;">Mobile Mechanic </a></li>
            <li> <a href="MOT.html"style="color: white;">MOT </a></li>
            <li> <a href="Diagnostic.html"style="color: white;">Diagnostic </a></li>
            <li> <a href="Aircon.html"style="color: white;">Aircon </a></li>
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
            <div class="col-12 col-sm-12 col-md-4" style="display: flex; text-align:center"><p style="color: rgb(121, 121, 121);">© 2021</p>
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
<!-- AOS DATA -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset:150,
      duration: 1000
    });
  </script>

</body>
</html>