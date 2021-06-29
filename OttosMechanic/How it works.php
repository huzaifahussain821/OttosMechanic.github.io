<!DOCTYPE html>
<html lang="en-US" class="no-ie no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>How it works</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="service.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
<!-- Main CSS File -->
<link rel="stylesheet" href="assets/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


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
        .hvrWhite:hover{
            background-color: white !important;
            color: #1E2E81 !important;
            border: 2px solid #1E2E81;
          }
          .hvrBlue:hover{
            background-color: #1E2E81 !important;
            color: #fff !important;
            border: 2px solid #fff;
          }
        @media only screen and (min-width:1000px){
  
    .navbar-expand-lg .navbar-collapse {
      margin-left: 143px;
      margin-top: 10px;
    }
    .nav-link{
      font-size: 20px !important;
      font-weight: 400;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
    }
  } 
          @media (max-width: 767px){
            .txtPara p{
              font-size: 12px;
            }
        .nav-item::before{
            display: none !important;
        } 
        .nav-link.hvr-reveal.status_nav{
            border: 0px !important;
            color: black !important;
            text-align: left !important;
        }
        
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
     .kkx{
       width: 80%;
     }
     @media only screen and (max-width:768px)
     {        
       .plo{
         margin-left: -100px !important;
       }
      .chngbtn{
     width: 90% !important;
     margin-left: -30px;
    }
      .btn.btn-outline-light.hvr-reveal.hvr-reveal_button{
    display: none !important;
  }
       .t1{
         font-size: 16px !important;
         text-align: center !important;
         margin-top: 20px;
         margin-bottom: 20px;
       }
       .t1s{
         margin-top: 120px !important; 
         font-size: 20px !important;
       }
      #carouselExampleControls{
   display: none;
 }
 #muzan{
   display: block !important;
 }
       .kkx{
         width: 85% !important;
       }
       .centerClass{
         margin-left: 121px !important;
       }
      .reviews{
        padding: 10px !important;
        border-radius: 10px;
      }
       .fa-users:before {
         margin-left: 150% !important;
       }
       .fa-star:before{
         margin-left: 52px !important;
       }
       .fa-car:before{
         margin-left: 50px !important;
       }
        .nav-link.dropdown-toggle.hvr-reveal status_nav{
            color: black !important;
        }
         .rounded-circle{
             margin-left: 10% !important;
         }
         .fc{
             width: 90% !important;
         }
         #get{
           margin-left: 28px  !important;
         }
     .navbar{
     background-color: #fff !important;
     color: black !important;
     }   
     .conpad{
       margin-top: -100px;
     }
     .dropdown-item {
         font-size: 14px !important;
       margin-left:444px;
        margin-bottom: 10px;
        margin-top: -22px;
        padding: 10px;
     }
     
     .dropdown-menu {

        margin-left: -500px !important;
     
     }
     .dropdown-toggle[aria-expanded="true"] + .dropdown-menu {

      margin-top: -11px !important;
      
    }
     }
    
     @media only screen and (max-width:560px){
        .dropdown-menu {

margin-left: -1047 !important;

}
     }
     @media only screen and (max-width:425px){
        .dropdown-menu {

margin-left: -750px !important;

}
     }
     @media only screen and (max-width:280px){
        .dropdown-menu {

margin-left: -1500px !important;

}
     }
     @media only screen and (max-width:320px){
        .dropdown-menu {

margin-left: -1000px !important;

}
     }
     @media only screen and (max-width:360px){
        .dropdown-menu {

margin-left: -890px !important;

}
     }
     @media only screen and (max-width:414px){
        .dropdown-menu {

margin-left: -930px !important;

}
     }
 </style>

    <style type="text/css">
  
        #get {
            float: left;
            height: 60px;
            width: 130px;
            background-color: #25D366;
            border-radius: 20px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: #fff;
            margin-left: 30px;
        }
        #get2{
            height: 60px;
            width: 150px;
            background-color: #25D366;
            border-radius: 20px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: #fff;
        }

        
        .slim{
            height: 60px;
            width: 150px;
            background-color: #25D366;
            border-radius: 20px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: #fff;

        }
        #find {
             
            color:darkblue;
             background-color: #fff;
              border-radius: 100px;
               border: 3px solid skyblue;
               font-weight: bolder;
               font-size: 16px;
               box-shadow: 0 2px 4px 0 rgb(0 0 0 / 24%);
        }
        .bb{
            z-index: -1 !important;
            margin-top:0px !important;
        }

      
  
        .carousel-control-prev-icon:after {
  content: '<';
  font-size:50px;
  color:lawngreen;
  font-weight: bolder;
}
.carousel-control-next-icon:after
{
  content: '>';
  font-size:50px;
  color: lawngreen;
  font-weight: bolder;
}
.carousel-indicators li {
  width: 10px;
  height: 10px;
  border-radius: 100%;
  background-color: lawngreen;
  color:#fff;
}
#find:hover{
            color:white;
            background-color: green;
            border: 3px solid green;
        }
        @media only screen and (max-width: 345px) {
            .bb{
                height: 1000px !important;
            }
            .reviews{
                width: 100% !important;
            }
        }
      
        @media only screen and (max-width: 768px) {
           
.reviews {
    
    height: auto !important;
    margin-left: 0% !important;
}
            .bb {
                height: 1000px !important;
            }
            #find {
            margin-left:40%; 
            color:darkblue;
             background-color: #fff;
              border-radius: 100px;
               border: 3px solid skyblue;
               font-weight: bolder;
               font-size: 16px;
               box-shadow: 0 2px 4px 0 rgb(0 0 0 / 24%);
        }
       
        #bottum{
            margin-left:auto !important ;
        }
        .ring{
            margin-left:0px !important;


        }
       #red{
           margin-left: auto !important;
           margin-right: auto !important;

       }
       
        }
   p,h5{
       color: white;
   }

  
   .hvr-reveal_button:hover{
       background-color: #fff !important;
       color: #000 !important;
   }
  .fc{
    height: 24% !important;
  }
  #get{
    height: 10% !important;
    font-size: 12px !important;
  }
   @media only screen and (min-width:769px){
    .fc{
  margin-left: -67px !important;     
}
   }
    </style>

</head> 
<body >

    <div class="fluid-container">
        <center>
            
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
          <li class="plo">
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
              <div class="container-fluid">
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
</div>


<div class="container-fluid bb" style=" background-image:url('XD Assets/pexels-photo-190537\(new\).png'); width: 100%; min-height:700px ; background-size: cover; background-repeat: no-repeat;  ">
   
    <div class="row">
        <div class="col-md-10 col-sm-12"style="margin-top: 40px; padding: 20px;">
            <div>
                <p class="t1 t1s"
                    style=" text-align: left;display: inline-block;  color:#fff;  font-size: 34px; margin-top:100px ; font-weight:bolder;">
                     Compare Car Repair Prices From Local Garages</p>
                <div class="col-md-10 col-sm-12"
                    style="background-image:url(mm.png);  padding: 20px; border-radius: 10px; margin-right:100px;">
                    <p class="t1" style=" color:#fff;  font-size: 34px; text-align: left;">&nbsp;Getting Your quotes is easy!</p>

                    <p class="col-md-12 col-sm-8 t1"
                        style="color: #fff; font-size:19px;text-align: left; font-family:Arial, Helvetica, sans-serif, 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                        Otto's Mechanics is the quick, simple way to compare the prices and reputation of garages and
                        mechanics near you.
                        Just tell us what work you require and where you live, and we'll send quotes from friendly local
                        specialists straight to your inbox.
                        You can compare prices, reviews and location, and even book in online. </p> <br>
               
                        <div class="row" style="margin-left:10%;">
                          <input class="form-control fc" type="text" placeholder="Enter Your Reg" class="w-50" style="width: 50% ; height: 50px; border-radius: 10px;">
                          <button class="btn rqbtn" id="get" style="background-color: #1E2E81; font-size: 14px !important; height: 10px;">Get Quotes</button>
                      </div>
                      </div>

            </div><br>
           

        </div>
        <br>
       

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
<div class="container-fluid text-center">
      <h1 style="margin-top:3%;"   data-aos="fade-in">How It Work?</h1>
      <p style="margin-top:3%; margin-bottom: 3%; font-size: 1.2em; color: black;">Find a great local garage in 4 easy steps.</p>
<br>
<div class="container"style="align-items: center;
justify-content: center">
<div class="row d-flex justify-content-around" style="display: flex; align-content: space-between; text-align: center;">
  <div class="col-12 col-md-6 hvrWhite"data-aos="fade-down" style="max-width: 49% !important; cursor: pointer; padding: 20px; background-color: #1E2E81; color: white;">
    <h4>Enter Your Details</h4>
    <h6>Tell us what you’re looking for or what needs fixing on your car and
      we’ll find the best garages nearby and give you the best price for
      the job.</h6>
      </div> 
  <div class="col-12 col-md-6 hvrBlue"data-aos="fade-up" style="max-width: 49% !important; cursor: pointer; padding: 20px; background-color: #fff; border: 2px solid #1E2E81;">
    <h4>Receive Your Quotes</h4>
    <h6>Tell us what you’re looking for or what needs fixing on your car and
      we’ll find the best garages nearby and give you the best price for
      the job.</h6>
  </div>
</div> <br> 
<div class="row d-flex justify-content-around">
  <div class="col-12 col-md-6 hvrBlue"data-aos="fade-down" style="max-width: 49% !important; cursor: pointer; padding: 20px; background-color: #fff; border: 2px solid #1E2E81;">
    <h4>Choose Your Garage</h4>
    <h6>Tell us what you’re looking for or what needs fixing on your car and
      we’ll find the best garages nearby and give you the best price for
      the job.</h6>
  </div>
  <div class="col-12 col-md-6 hvrWhite"data-aos="fade-up" style="max-width: 49% !important; cursor: pointer; padding: 20px; background-color: #1E2E81; color: white;">
    <h4 >Leave a Review</h4>
    <h6>Tell us what you’re looking for or what needs fixing on your car and
      we’ll find the best garages nearby and give you the best price for
      the job.</h6>
      </div>
</div>
</div>
<br><br>
<h4>Are you a garage, dealership or mechanic and interested in becoming a member?</h4>

<br>
<button class="btn btn-primary" style="background-color: #1E2E81;border-radius: 3px;"data-aos="fade-up">Find Out More</button>
</div> <br>
    <div class="container mx-auto text-center" style="display: none;" id="muzan">
      <div class=" col-sm-12">
    <div   style="background-color: #00b81f; color: #fff; height:30px; width: 30px; margin-left: auto; margin-right: auto; border-radius:20px; vertical-align: middle;"><h6>1</h6></div>

    <h1>
      Enter Your Details
    </h1><br>
    <p style="font-family:'Artifakt Element'; color: black;">
    Tell us what you’re looking for or what needs fixing on your car andwe’ll
      find the best garages nearby and give you the best price for
      the job.</p>
      <br><br>

      <div style="background-color: #00b81f; color: #fff; height:30px; width: 30px; margin-left: auto; margin-right: auto; border-radius:20px; vertical-align: middle;"><h6>2</h6></div>

      <h1>
        Retrive Your Quotes
      </h1><br>
      <p style="font-family:'Artifakt Element'; color: black; ">
        Sit back and watch the quotes for your job start rolling in. We notify all
        the garages in your area that your job is available so you can
         make a cup of coffee whilst you wait.</p>
        <br><br>

        <div style="background-color: #00b81f; color: #fff; height:30px; width: 30px; margin-left: auto; margin-right: auto; border-radius:20px; vertical-align: middle;"><h6>3</h6></div>

        <h1>
          Choose Your Garage
        </h1><br>
        <p style="font-family:'Artifakt Element'; color: black; ">
          Once you have received your quotes from our specialist
           mechanics, garages or dealerships it’s time for you to
            select the
            quote that’s right for you.</p>
          <br><br>

          <div style="background-color: #00b81f; color: #fff; height:30px; width: 30px; margin-left: auto; margin-right: auto; border-radius:20px; vertical-align: middle;"><h6>4</h6></div>

          <h1>
            Leave a Review
          </h1><br>
          <p style="font-family:'Artifakt Element'; color: black;">
            To show you’re happy, leave the garage a review and recommend
             the garage to friends and others on Otto's Mechanic.com.</p>
            <br><br>
    </div>
    </div>
<br>
<br>
<!-- <div class="container-fluid" style="padding: 20px; width: 100% !important;background-color: rgb(201, 201, 201);">
      <h1 style="text-align: center; font-weight: 700; color: rgb(45, 95, 187)">Happy Drivers Every Week</h1><br>
      <p style="text-align: center; color: rgb(0, 0, 0)">Take a look at these helpful videos.</p><br>
      <div class="row" style="display: flex; justify-content: space-between; ">
        <div class="col-12 col-md-1 col-lg-1"></div>
        <div class="col-12 col-md-5 col-lg-5">
          <div class="banner">
            <div class="content">
              <img src="ll/imgs/tumnail1.jpg" style="width: 90%" onclick="vid1();">
            </div>
          </div>
      
            <div class="trailer">
              <video src="ll/imgs/How_does_Otto's Mechanic.com_work.mp4" controls="true" class="vid1"></video>
              <img src="ll/imgs/close.png" class="close" onclick="vid1();">
            </div>
            </div>
            <div class="col-12 col-md-5 col-lg-5">
              <div class="banner">
                <div class="content">
                  <img src="ll/imgs/thumnail2.jpg" style="width: 90%" onclick="vid2();">
                </div>
              </div>
          
                <div class="trailer2">
                  <video src="ll/imgs/Whoever,_wherever,_Otto's Mechanic.com_can_help.mp4" controls="true" class="vid2"></video>
                  <img src="ll/imgs/close.png" class="close2" onclick="vid2();">
                </div>
                </div>
           <div class="col-12 col-md-1 col-lg-1"></div>
      </div>
    </div> -->
<div class="container text-center kkx" >
      
            <h3 style="font-weight: bolder;color: black;">
            More about OttosMechanics:</h3>
            <p style="font-size:large; color: black; text-align: justify;">
            We work with over 15,325 garages, mechanics and dealerships nationwide.
            We work with everyone from main dealers to mobile
            mechanics. Whatever you drive, whatever’s wrong, we’re
            sure to know a garage or specialist who can help.</p>
            </div>  
   <br><br>
    <!-- <div class="row" >
        <div class="col-md-3 col-sm-12">
        <img src="car project/round1.png"  class="rounded-circle" alt="error" style="margin-bottom:5%; width: 250px; height: 250px;  margin-left:50%; margin-top: 8%;">
        </div>
        <div class="col-md-3 col-sm-12">
            <img src="car project/round2.png" class="rounded-circle" alt="error"  style="margin-bottom:5%; width: 250px; height: 250px;  margin-left:50%; margin-top: 8%;">
            </div>
            <div class="col-md-3 col-sm-12">
                <img src="car project/round3.png" class="rounded-circle" alt="error"  style="margin-bottom:5%; width: 250px; height: 250px;  margin-left:50%; margin-top: 8%;">
                </div>

    </div> -->
    <div class="container text-center kkx" >
      
      <h5 style="font-weight: bolder;color: black; text-align: left;">
        but only relevant local garages are invited to quote.</h5>
      <p style="font-size:large; color: black; text-align: justify;">
        However urgent your service or repair, you don’t want to
        be bombarded with calls and emails. That’s why we only
        invite relevant garages near you to quote. Let’s say you
        have an automatic transmission fault: we’d only notify
        garages who have explicitly classified themselves as
        transmission specialists.</p>
      </div>
    
    </div>
    

</div><br><br> <br>
<div class="container-fluid img-fluid" style="background-repeat: no-repeat;background-size: cover;background-image: url('images/HiwBg.png'); width:100%; min-height:620px ; background-size: cover; background-repeat: no-repeat;">
  <div class="row">
    <div class="col-md-10 col-sm-12"style="margin-top: 40px; padding: 20px;">
        <div style="margin-left:10%;">
            
          <div class="col-md-10 col-sm-12"
          style="background-image:url(mm.png);  padding: 20px; border-radius: 10px; margin-right:100px;">
          <p class="t1" style=" color:#fff;  font-size: 34px; text-align: left;">&nbsp;Getting Your quotes is easy!</p>

          <p class="col-md-12 col-sm-8 t1"
              style="color: #fff; font-size:19px;text-align: left; font-family:Arial, Helvetica, sans-serif, 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
              Unlike certain other review-based websites, drivers are only able to leave their feedback once they’ve requested quotes and actually selected a garage for their repair or service. <br>
          
          Result? You can rest assured thatevery review on OttosMechanics.com is from a genuine customer, and you can select your chosen garage with total confidence. 
              <div class="row" style="margin-left:10%; margin-top: 10px;">
                <input class="form-control fc" type="text" placeholder="Enter Your Reg" class="w-50" style="width: 50% ; height: 50px; border-radius: 10px;">
                <button class="btn rqbtn" id="get" style="background-color: #1E2E81; font-size: 14px !important; height: 10px;">Get Quotes</button>
            </div>
            </div>
        </div><br>
       

    </div>
    </div>


</div>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12 ">
            <p  style="text-align: center; font-size: 20px; color: black;">I'm a driver.</p>
            <button class="btn btn-success" style="width: 100%;">Request a quote today</button>
        </div>
        <div class="col-md-6 col-sm-12">
            <p  style="text-align: center; font-size: 20px; color: black;">I'm a garage-owner or mechanic.</p>
            <button class="btn btn-primary" style="width: 100%; background-color: rgb(60, 60, 255);">Request a quote today</button>
        </div>
        <div class="col-md-12 col-sm-12">
            <br><br>
            <p style="font-size: 20px; color: #000;">More questions? Take a look at our ‘Help’ section here.</p>
        </div>
    </div>

</div>
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





<script type="text/javascript">
    function vid1(){
      var trailer= document.querySelector(".trailer")
       var video= document.querySelector(".vid1")
      trailer.classList.toggle("active");
      video.pause();
      video.currenTime=0;
      
    }
    function vid2(){
      var trailer2= document.querySelector(".trailer2")
       var video2= document.querySelector(".vid2")
      trailer2.classList.toggle("active");
      video2.pause();
      video2.currenTime=0;
    }
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
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