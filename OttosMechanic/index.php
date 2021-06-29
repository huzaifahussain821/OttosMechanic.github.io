<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/js/all.js">
    <link href="service.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   
<script>
    $(document).ready(function(){
          var scroll_pos = 0;
            $(document).scroll(function() { 
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 50) {
                    $('.hvr-reveal').css('color', 'black'); 
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


<!-- <script>
  $(document).ready(function(){       
        var scroll_pos = 0;
        $(document).scroll(function() { 
            scroll_pos = $(this).scrollTop();
            if(scroll_pos > 210) {
                $('.hvr-reveal').css('color', '#000');
            } else {
                $('.hvr-reveal').css('color', '#fff');
            }
        });
    });
</script> -->


<script>
       
          $(window).scroll(function(){
  $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);

});
        </script>
        <style>
          /* Reset Select */
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #1E2E81;
  background-image: none;
}
/* Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select */
.select {
  position: relative;
  display: flex;
  width: auto;
  height: auto;
  line-height: 2;
  background: #1E2E81;
  overflow: hidden;
  border-radius: .25em;
}
select {
  flex: 1;
  padding: 0 .5em;
  color: #fff;
  cursor: pointer;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  display: none;
  top: 0;
  right: 0;
  padding: 0 0.7em;
  background: #1E2E81;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
/* Transition */
.select:hover::after {
  color: #f39c12;
}

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
          
          .dm.show{
            width: 100px !important;
          }
          .change::before{
            font-size: 46px !important;
          }
          .testimonial_095_slide>h5>a:hover {
    border: 1px solid #aa914f
}

#testimonial_095 {
    overflow: hidden;
    min-height: 375px;
    position: relative;
    background: #1E2E81
}

#testimonial_095>.carousel-inner {
    width: 75%;
    margin: auto
}

#testimonial_095>.carousel-inner:hover {
    cursor: -moz-grab;
    cursor: -webkit-grab
}

#testimonial_095>.carousel-inner:active {
    cursor: -moz-grabbing;
    cursor: -webkit-grabbing
}

#testimonial_095>.carousel-inner>.carousel-item {
    overflow: hidden
}

.testimonial_095_indicators>.carousel-indicators {
    left: 0;
    margin: 0;
    width: 100%;
    font-size: 0;
    height: 20px;
    bottom: 15px;
    padding: 0 5px;
    display: block;
    overflow-x: auto;
    overflow-y: hidden;
    position: absolute;
    text-align: center;
    white-space: nowrap
}

.testimonial_095_indicators>.carousel-indicators li {
    padding: 0;
    width: 10px;
    height: 10px;
    border: none;
    text-indent: 0;
    margin: 2px 3px;
    cursor: pointer;
    display: inline-block;
    background: #fff;
    -webkit-border-radius: 100%;
    border-radius: 100%
}

.testimonial_095_indicators>.carousel-indicators .active {
    padding: 0;
    width: 10px;
    height: 10px;
    border: none;
    margin: 2px 3px;
    background: #1ed600;
    -webkit-border-radius: 100%;
    border-radius: 100%
}

.testimonial_095_indicators>.carousel-indicators::-webkit-scrollbar {
    height: 3px
}

.testimonial_095_indicators>.carousel-indicators::-webkit-scrollbar-thumb {
    background: #ffffff;
    -webkit-border-radius: 0;
    border-radius: 0
}

.testimonial_095_control_button .carousel-control-next,
.testimonial_095_control_button .carousel-control-prev {
    top: 175px;
    opacity: 1;
    width: 40px;
    bottom: auto;
    height: 40px;
    font-size: 10px;
    cursor: pointer;
    font-weight: 700;
    overflow: hidden;
    line-height: 38px;
    text-shadow: none;
    text-align: center;
    position: absolute;
    background: 0 0;
    border: 2px solid #fff;
    text-transform: uppercase;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition: all .6s cubic-bezier(.3, 1, 0, 1);
    transition: all .6s cubic-bezier(.3, 1, 0, 1)
}

.testimonial_095_control_button .carousel-control-prev {
    left: 7%;
    right: auto
}

.testimonial_095_control_button .carousel-control-next {
    right: 7%;
    left: auto
}

.testimonial_095_control_button .carousel-control-next:hover,
.testimonial_095_control_button .carousel-control-prev:hover {
    color: #ffffff;
    background: #1ed600;
    border: 2px solid #ffffff
}

.testimonial_095_header>h5,
.testimonial_095_slide>h5>a,
.testimonial_095_slide>p {
    text-shadow: none;
    font-family: Raleway, sans-serif;
    -webkit-font-smoothing: antialiased
}

.testimonial_095_header {
    top: 0;
    left: 0;
    bottom: 0;
    width: 550px;
    display: block;
    margin: 30px auto;
    text-align: center;
    position: relative
}

.testimonial_095_header>h5 {
    color: #f2f2f2;
    font-size: 30px;
    font-weight: 600;
    position: relative;
    letter-spacing: 1px;
    text-transform: uppercase
}

.testimonial_095_header>h5>span {
    color: #1ed600;
    margin: 0 10px;
    position: relative
}

.testimonial_095_header>h5>span:after {
    left: 0;
    right: 0;
    bottom: 0;
    top: auto;
    height: 1px;
    content: "";
    width: 100%;
    margin: auto;
    position: absolute;
    background: #1ed600
}

.testimonial_095_slide,
.testimonial_095_slide>a {
    right: 0;
    margin: auto;
    text-align: center;
    position: relative;
    top: 0;
    left: 0
}

.testimonial_095_slide {
    bottom: 0;
    width: 70%;
    padding: 20px
}

.testimonial_095_slide>a {
    width: 50px;
    height: 50px;
    display: block;
    color: #f2f2f2;
    font-size: 18px;
    line-height: 46px;
    border: 3px solid #f2f2f2;
    -webkit-border-radius: 100%;
    border-radius: 100%
}

.testimonial_095_slide>a:after {
    top: 0;
    left: 0;
    padding: 0;
    opacity: 0;
    width: 100%;
    content: '';
    height: 100%;
    position: absolute;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    -webkit-transform: scale(.9);
    -ms-transform: scale(.9);
    transform: scale(.9);
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-box-shadow: 0 0 0 2px rgba(255, 255, 255, .1);
    box-shadow: 0 0 0 2px rgba(255, 255, 255, .1)
}

.testimonial_095_slide>a:hover:after {
    -webkit-animation: psBoxShadowEffect_2 2s ease-out;
    animation: psBoxShadowEffect_2 2s ease-out
}

.testimonial_095_slide>p {
    color: #f2f2f2;
    font-size: 14px;
    margin: 40px 0 20px
}

.testimonial_095_slide>p>a {
    color: #1ed600;
    padding: 2px 5px;
    text-decoration: none;
    -webkit-transition: all .3s cubic-bezier(.39, .575, .565, 1);
    transition: all .3s cubic-bezier(.39, .575, .565, 1)
}

.testimonial_095_slide>p>a:hover {
    color: #fff;
    background: #aa914f
}

.testimonial_095_slide>h5>a {
    padding: 3px;
    color: #1ed600;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 1px;
    text-decoration: none;
    text-transform: uppercase;
    border: 1px solid transparent;
    -webkit-transition: border .5s cubic-bezier(.39, .575, .565, 1);
    transition: border .5s cubic-bezier(.39, .575, .565, 1)
}

.testimonial_095_slide>h5>a:hover {
    border: 1px solid #aa914f
}



@media only screen and (max-width:480px) {
    .testimonial_095_header {
        width: 95%
    }
}

@media only screen and (max-width:480px) {
    .testimonial_095_header>h5 {
        font-size: 20px
    }
}

@media only screen and (max-width:480px) {
    .testimonial_095_slide {
        width: 98%;
        padding: 5px
    }
    .testimonial_095_control_button .carousel-control-next, .testimonial_095_control_button .carousel-control-prev 
    {
      width: 20px !important;
      height: 20px;
    }
}

@media (min-width:481px) and (max-width:767px) {
    .testimonial_095_control_button .carousel-control-prev {
        left: 2%
    }
    
}

@media (min-width:481px) and (max-width:767px) {
    .testimonial_095_control_button .carousel-control-next {
        right: 2%
    }
}

@media (min-width:481px) and (max-width:767px) {
    .testimonial_095_header {
        width: 95%
    }
}

@media (min-width:481px) and (max-width:767px) {
    .testimonial_095_slide {
        width: 98%;
        padding: 5px
    }
}

@media (min-width:768px) and (max-width:991px) {
    .testimonial_095_control_button .carousel-control-prev {
        left: 5%
    }
}

@media (min-width:768px) and (max-width:991px) {
    .testimonial_095_control_button .carousel-control-next {
        right: 5%
    }
}

@keyframes psBoxShadowEffect_2 {}

.ps_ease .carousel-item {
    -webkit-transition-timing-function: ease;
    transition-timing-function: ease
}

.ps_easeInOut .carousel-item {
    -webkit-transition-timing-function: ease-in-out;
    transition-timing-function: ease-in-out
}

.ps_speedy .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(0, 1, 0, 1);
    transition-timing-function: cubic-bezier(0, 1, 0, 1)
}

.ps_slowSpeedy .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.3, 1, 0, 1);
    transition-timing-function: cubic-bezier(.3, 1, 0, 1)
}

.ps_easeOutInCubic .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.22, .81, .01, .99);
    transition-timing-function: cubic-bezier(.22, .81, .01, .99)
}

.ps_swing .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.02, .01, .47, 1);
    transition-timing-function: cubic-bezier(.02, .01, .47, 1)
}

.ps_easeOutCubic .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.215, .61, .355, 1);
    transition-timing-function: cubic-bezier(.215, .61, .355, 1)
}

.ps_easeInOutCubic .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.645, .045, .355, 1);
    transition-timing-function: cubic-bezier(.645, .045, .355, 1)
}

.ps_easeOutCirc .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.075, .82, .165, 1);
    transition-timing-function: cubic-bezier(.075, .82, .165, 1)
}

.ps_easeOutExpo .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.19, 1, .22, 1);
    transition-timing-function: cubic-bezier(.19, 1, .22, 1)
}

.ps_easeInQuad .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.55, .085, .68, .53);
    transition-timing-function: cubic-bezier(.55, .085, .68, .53)
}

.ps_easeOutQuad .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.25, .46, .45, .94);
    transition-timing-function: cubic-bezier(.25, .46, .45, .94)
}

.ps_easeInOutQuad .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.455, .03, .515, .955);
    transition-timing-function: cubic-bezier(.455, .03, .515, .955)
}

.ps_easeOutQuart .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.165, .84, .44, 1);
    transition-timing-function: cubic-bezier(.165, .84, .44, 1)
}

.ps_easeInOutQuart .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.77, 0, .175, 1);
    transition-timing-function: cubic-bezier(.77, 0, .175, 1)
}

.ps_easeOutQuint .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.23, 1, .32, 1);
    transition-timing-function: cubic-bezier(.23, 1, .32, 1)
}

.ps_easeInSine .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.47, 0, .745, .715);
    transition-timing-function: cubic-bezier(.47, 0, .745, .715)
}

.ps_easeOutSine .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.39, .575, .565, 1);
    transition-timing-function: cubic-bezier(.39, .575, .565, 1)
}

.ps_easeInOutSine .carousel-item {
    -webkit-transition-timing-function: cubic-bezier(.445, .05, .55, .95);
    transition-timing-function: cubic-bezier(.445, .05, .55, .95)
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
    background-color:white !important;
    display: none !important;
    vertical-align: 0;
}
.btn.btn-outline-light.hvr-reveal.hvr-reveal_button{
  margin-left: -20px;
  color: black !important;
  border: 1px solid black;
}}
 .dropdown {
     position: static !important;
 }
 
 .dropdown-menu {
     border: 0px;
     margin-top: 0px !important;
     width: 100% !important;
     color: #000;
     font-size: 14px !important;
 }

 @media only screen and (min-width:769px){
  .GQBtn{margin-left: -16px;
    height: 49px !important;
  }

   .input-group-text{
    width: 348% !important;
    height: 48px;
    margin-left: -111px;
   }
  .chngbtn{
    
  } 
  .lsw{
     margin-left: 25%;
   }
   /* .cornerLink{
     margin-left: 150px;
   } */
 }
 .rr:hover{
   background-color: white !important;
   color: #1E2E81 !important;
 }
 @media only screen and (max-width:768px)
 {    
   .rr{
     margin-left: 123px !important;
   }
   .lsw{
     padding: 0px !important;
     margin-left: 15px;
   
   }
   .kmx{
     width: 100% !important;
     font-size: 12px !important;
   }
   .chngbtn{
     width: 90% !important;
   }
   .custBtn{
     height: 100px !important;
   }
   .kcs{
     margin-top: -100px !important;
   }    
   .kca{
     margin-top: 18% !important;
   }
   .responce{
     width: 100% !important;
   }
   .bodyX{
    height: 687px !important;   }
   .paraUp
   {
     margin-top: -30px !important;
   }
   .chngbtn{
     margin-top: -10px !important;
     margin-bottom: 10px !important;
     background-color: #1E2E81 !important;
   }
   .cbr {
     text-align: center !important;
     margin-top: -10px !important;
     font-size: 12px !important;
   }
   .cbrS{
     font-size: 12px !important;
     margin-top: -10px !important;
   }
  .bodyWork{
    
 margin-bottom: 100px !important;

  }

 .navbar{
 background-color: #fff !important;
 color: black;
}   
.navbar{
  color: black;
}
 .dropdown-item {
     font-size: 12px !important;
     padding: 5px;
     color: black;
 }
 .nav-link:hover {
  color: green;
}
 a.nav-link{
  color: black !important;
 }
 .menulink{
   color: black;
 }
.mar{
  font-size: 12px !important;
  height: 120px !important;
  
}
 }
 
</style>
       <style>
       

         .tor{
  border-top-right-radius: 8px;
  border-bottom-right-radius:8px ;
  background-color:white;
  color: #000;
  line-height: 50px;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
         }
        

         .mar:hover{
          box-shadow: 0 0 10px black, 0 0 40px black, 0 0 80px black;
         transition: 1s;
         }
         .mar{
           font-family:'cooper';
         }

          .color a{
            color:forestgreen !important;
            text-decoration: none !important;
          }
#find {
             
             
             color:dark#1E2E81;
              background-color: #fff;
               border-radius: 100px;
                border: 3px solid sky#1E2E81;
                font-weight: bolder;
                font-size: 16px;
                margin-bottom: 10%;
                box-shadow: 0 2px 4px 0 rgb(0 0 0 / 24%);
         }
         #find:hover{
            color:white;
            background-color: green;
            border: 3px solid green;
        }
         
            .change::before{
              content:"Local Garages";
              animation: animate infinite 10s;
              padding-left: 10px;
              color: #fff;
              font-family: 'loew' !important;
              font-weight: bolder;
           }
           @keyframes animate{
            0%{content:"Local Garages"}
            50%{content:"Instant Prices ";}
            75%{content:"Quality Repairs";}
            100%{content:"Local Garages";}
     
           }
           .carousel-control-prev::before{
             color: springgreen;
           }

           .carousel-control-prev-icon,
 #carouselExampleControls .carousel-control-next-icon {
  height: 100px;
  width: 100px;
 font-weight: bolder;
  background-size: 100%, 100%;
  background-image: none;
}

 #carouselExampleControls .carousel-control-next-icon:after
{
  content: '>';
  font-size: 55px;
  color: limegreen;

}

#carouselExampleControls .carousel-control-prev-icon:after {
  content: '<';
  font-size: 55px;
  color: limegreen;
}



/* Onloead Modal */
@media only screen and (min-width:768px){
  #boxes .window {
    width: 20% !important;
}
}
@media only screen and (max-width:535px){
  #boxes .window {
    width: auto !important;
    
}
  .dBox{
   width: 100% !important; 
  }
  .nav-link{
    
    text-align: left !important;
  }
  a:hover{
    text-decoration: underline;
    color: #1E2E81;
  }
  .nav-link:hover{
    color: green;
  }
  .secVid{
    margin-top: 10% !important;
  }
}
#mask {
  position:fixed;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}  
#boxes .window {
  position:fixed;
  left:0;
  top:0;
  width:440px;
  display:none;
  z-index:9999;
  padding:5px;
  border-radius: 15px;
  text-align: center;
}
#boxes #dialog {
  width:450px; 
  height:auto;
  padding:1px;
  background-color:#ffffff;
  font-family: 'Segoe UI Light', sans-serif;
  font-size: 15pt;
}
.maintext{
    text-align: center;
  font-family: "Segoe UI", sans-serif;
  text-decoration: none;
}

#lorem{
  font-family: "Segoe UI", sans-serif;
  font-size: 12pt;
  text-align: left;
}
#popupfoot{
  font-family: "Segoe UI", sans-serif;
  font-size: 16pt;
  padding: 10px 20px;
}
#popupfoot a{
  text-decoration: none;
}
.agree:hover{
  background-color: #D1D1D1;
}
.popupoption:hover{
  background-color:#D1D1D1;
  color: green;
}
.popupoption2:hover{
  
  color: red;
}  

.responce {
  margin-right: auto;
   font-weight:bolder;
   font-size: 20px;
   line-height:50px;
  border-radius: 8px;
    color:#244b67;
    background-color:#36f182;
    text-transform: uppercase;
       font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
        width: 200px;
       cursor: pointer; transition: 1s;
}
.rr{
  
  font-weight:bolder;
   line-height:50px;
 border-radius: 8px;
    color:#244b67;
    background-color:#36f182;
    text-transform: uppercase;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
       width: 200px;
       font-size: 20px;
      
       cursor: pointer; transition: 1s;
}

.inp{
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
  background-color:#fff;
  color: #000;
  font-size: 30px;
  line-height: 30px;
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}
@media only screen and (max-width:768px){
  .GQBtn{
    margin-top: 20px;
    margin-left: 89px;
  }
  .inpCust{
    margin-right: 0%;
    width: 126% !important;
    border: 0px;
    border-radius: 10px;
    height: 51px !important;
    margin-top: -49px;
    margin-left: 66px !important;
  }
  .inp{
    height: 45px !important;
    width: 218px !important ;
    margin-left: 1px !important;
    margin-right: 23px !important;
  }
  .responce{
    height: 60px !important;
    
  font-size: 30px !important;
  }
  .btn.btn-outline-light.hvr-reveal.hvr-reveal_button{
    display: none !important;
  }
  .cbr{
    margin-top: 50px;
    font-size: 20px !important;
  }
  .cbrS{
    margin-top: 50px;
    font-size: 20px !important;
  }
 .heading{
   margin-left: auto;
   margin-right:auto;
   font-size: 24px !important;
   margin-bottom: 10px !important;
   margin-top: 10px;
 }
 .heading1{
margin-top: 0px !important;
font-size:43px !important ;
margin-bottom: 20px;
 }
 .heading2{

  margin-top: 15px !important;
   font-size: 33px !important;
 }
 .change{
  margin-left: auto;
   margin-right:auto;
   font-size: 43px !important;
   margin-bottom: 0px !important;
   margin-top: 5px !important;
 }
 .responce{
   margin-left: auto;
   margin-right: auto;
   margin-top: 4%;
   padding: 0px !important;
   line-height: 40px !important;
   font-size: 14px !important;
   width: 150px !important;
 }
 .inp{
  width: 80%;
  margin-left:0px;
  margin-right: 0px;
 }
 .mar{
   margin-bottom: 2%;
 }
 #carouselExampleControls{
   display: none;
 }
 #muzan{
   display: block !important;
 }
 .rr{
   margin-top: 30px;
   margin-right: auto;
   margin-left: auto;
   width: 119px !important;
    font-size: 14px;
 }
 .change::before{
   font-size: 33px !important;
 }
 

}
@media only screen and (width:768px)
{
  .abcText{
    width: 25% !important;
  }
  .inp{
    width: 50%;
    height: 30%;

  }
  .north{

    height: 10%;
  }
  .responce{
    margin-left:0px;
    margin-top: 0px;
  }
  
  
}
@media only screen and (max-width:370px)
{
  .tor{
    width: 85%;

  }
  
  .mar{
    text-align: center;

  }

}
.navbar.scrolled {
  background-color: white!important;
  color: black !important;
}
.dropdown.scrolled{
  color: black !important;
}
 .nav-link.scrolled{
  color: black !important;
  
 }
a.nav-link.scroll-on{
  color: limegreen !important;
 }
 .hvr-reveal_button:hover{
       background-color: #fff !important;
       color: #000 !important;
   }
  input:focus{
    border: 0 !important;
  }
</style>
 
</head>
<body  style=" background-image: url('XD Assets/pexels-photo-190537\(new\).png');  background-repeat: no-repeat; ">
  
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




<div class="container-fluid bodyX"  style="background: transparent; height: auto;" >
  <br>
    <div class="row " style="margin-top: 50px !important;align-items:center; align-content: space-between;">
      <h1  class="heading heading1" style="color:#fff; margin-top:10%; margin-left: auto; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;font-size: 46px; font-weight: bolder; " >Car Repairs: </h1>
      <h1 class="change" style="margin-top:10%;"></h1>
      <h1 class="heading heading2" style="margin-top:10%; color:#fff; margin-right: auto; font-weight: bolder;font-size: 46px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important; ">&nbsp;You Can Trust</h1>

    </div>
    <div class="container kmx" style="width: 60%;"> <br>
      <h5 style="text-align: center; color: white;">Simple way to compare the prices and reputation of garages and mechanics 
        near you. Just tell us what work you require</h5>
    </div>

    <div class="d-flex justify-content-center">
    <div class="row m-auto" style="margin-top:4% !important; " >
      <div class="col-md-2 col-14 col-sm-12 abcText">
      <span class="input-group-text " style="font-size: 18px;border-radius: 10px;  background-color: #1E2E81; color: white; border:0px; width: 25%; "> 
       <div class="select ">
          <select name="slct" id="slct">
            <option selected >GB</option>
            <option value="1">UK</option>
            <option value="2">USA</option>
            <option value="3">GM</option>
          </select>
        </div>
        </span>
        </div>
        <div class="col-12 col-md-8 col-sm-12">
     <form action="hit_api.php" method="POST" style="display: flex;">
        <input required type="text" class="form-control inpCust" name="enterCustomerName" placeholder="Enter Your Reg" style="margin-right:4%;border:0px;border-radius: 10px; height: 48px; width:170%; margin-left:-100px">
     </div>
     <div class="col-12 col-md-2 col-sm-12">
        <a href="reqQuote.html" >
       <button name="getCar" class="btn GQBtn" style="color:white;margin-right: auto; font-weight:light; border:0px !important; border-radius: 10px; background-color: #1E2E81; height: 50px; ">Get Quotes</button>
     </a>
 </form>
     </div>
    </div>
  </div>



<!-- Head End -->
  </div>
      <br>
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
     
      <br><br><br><br>
      <br>
      </div>
      
      

  </div>

  <div class="container-fluid text-center kcs" style="background-color:#fff; margin-top: 180px;"></div>
    
    
    

  </div> <br><br> <br><br>
    <div class="container-fluid text-center">
      <h1 style="margin-top:3%;"   data-aos="fade-in">How It Work?</h1>
      <p style="margin-top:3%; margin-bottom: 3%; font-size: 1.2em;">Find a great local garage in 4 easy steps.</p>
<br>
<div class="container"style="align-items: center;
justify-content: center">
<div class="row d-flex justify-content-around" style="display: flex; align-content: space-between; text-align: center;">
  <div class="col-12 col-md-6 hvrWhite"data-aos="fade-down" style="max-width: 49% !important; cursor: pointer; padding: 20px; background-color: #1E2E81; color: white;">
    <h4 >Enter Your Details</h4>
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
</div><br> <br>
<div class="container-fluid" style="background-color: #000000; justify-content: center;">
  <br>
  <div class="container text-center" > 
  <h2 style="color:#fff; font-weight: bolder;">Car Servicing & Repair Quotes</h2>
  
  <p style="color: #fff; ">Compare prices across 15,334 local garages.</p>
  </div>
  <br><br>
  <div class=" container " style="color:#fff;">
  
    <b style="color: #fff;">Do you need  Car servicing, MOT or Repair Work?</b><br>
  Compare prices across 15,358 local garages and specialists with OTTO's mechanic.com.<br><br>
  
  <b style="color: #fff;" >It’s quick and easy</b><br>
  First, tell us what's needed, such as , Clutch Replacement, Service and MOT, Brake or many other car maintenance types. Or you might want a Specialist for your BMW Service, Ford Service or Vauxhall Service.<br><br>
  
  Local garages, specialists and dealerships will then get back to you with a competitively-priced quote. We also have over 800 mobile mechanics nationwide who will come to your home or work - so whether its an exhaust replacement or a cambelt change, one of our 15,358 local experts is sure to help. So - do you need a car service or car repairs? Are you looking to find a friendly, well-priced local garage? That’s what we do! Click here to get your quotes NOW.<br><br>
  
  Finally, would you like a little help diagnosing an issue with you car, or even understanding a little more about  what you can do to maintain your own car? Why not take a look at our new Ultimate Car Maintenance Guide.<br><br>
  
  <p style="color: #fff; text-align: left;">Are you a garage, dealership or mechanic? Are you interested in becoming a member?
    <br>
    Click here to find out more.</p><br><br><br>
      </div>
      </div>
     
    <!-- Reviews -->
    <div class="container-fluid" style="background-color: #1E2E81;">
      <br>
      <h1 style="text-align: center; color: white;">Latest Reviews</h1>
      <div id="testimonial_095" class="carousel slide testimonial_095_indicators testimonial_095_control_button thumb_scroll_x swipe_x ps_easeOutSine" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
          <!-- Header of Slider -->
          <div class="testimonial_095_header">
            
          </div> <!-- /Header of Slider -->
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#testimonial_095" data-slide-to="0" class="active"></li>
              <li data-target="#testimonial_095" data-slide-to="1"></li>
              <li data-target="#testimonial_095" data-slide-to="2"></li>
          </ol> <!-- Wrapper For Slides -->
          <div class="carousel-inner" role="listbox">
              <!-- First Slide -->
              <div class="carousel-item active">
                  <!-- Text Layer -->
                  <div class="testimonial_095_slide">
                    <img src="images/REVIEW2.jpg" width="90px" height="90px" alt="" style="border-radius: 50px;">
                    <img src="" alt="">
                    <h4 style="margin-top: 20px; color:#fff">Liam James <br>
                        
                    </h4>
                      <p style="margin-top: 0px">
                        <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i> 
                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i> <br>
                        Excellent  Price and Service We will definitly be using it again. <br> Fully satisfied</p>
                      
                  </div>  <!-- /Text Layer -->
              </div> <!-- /item -->
              <!-- End of First Slide -->
              <!-- Second Slide -->
              <div class="carousel-item">
                  <!-- Text Layer -->
                  <div class="testimonial_095_slide">
                    <img src="images/REVIEW2.jpg" width="90px" height="90px" alt="" style="border-radius: 50px;">
                    <img src="" alt="">
                    <h4 style="margin-top: 20px; color:#fff">Liam James <br>
                        
                    </h4>
                      <p style="margin-top: 0px">
                        <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i> 
                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i> <br>
                        Excellent  Price and Service We will definitly be using it again. <br> Fully satisfied</p>
                      
                  </div> <!-- /Text Layer -->
              </div> <!-- /item -->
              <!-- End of Second Slide -->
              <!-- Third Slide -->
              <div class="carousel-item">
                  <!-- Text Layer -->
                  <div class="testimonial_095_slide">
                    <img src="images/REVIEW2.jpg" width="90px" height="90px" alt="" style="border-radius: 50px;">
                    <img src="" alt="">
                    <h4 style="margin-top: 20px; color:#fff">Liam James <br>
                        
                    </h4>
                      <p style="margin-top: 0px">
                        <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color:yellow;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i> 
                        <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i> <br>
                        Excellent  Price and Service We will definitly be using it again. <br> Fully satisfied</p>
                      
                  </div> <!-- /Text Layer -->
              </div> <!-- /item -->
              <!-- End of Third Slide -->
          </div> <!-- End of Wrapper For Slides -->
          <!-- Left Control --> <a class="carousel-control-prev" href="#testimonial_095" data-slide="prev"> <span class="fa fa-chevron-left"></span> </a> <!-- Right Control --> <a class="carousel-control-next" href="#testimonial_095" data-slide="next"> <span class="fa fa-chevron-right"></span> </a>
      </div> <!-- End Paradise Slider -->
  </div>








    <!-- <div class="container-fluid" style="padding: 20px; width: 100% !important;background-color: rgb(48, 48, 48);">
      <h1 style="text-align: center; font-weight: 700; color: white">Happy Drivers Every Week</h1><br>
      <p style="text-align: center; color: white">Take a look at these helpful videos.</p><br>
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
            <div class="col-12 col-md-5 col-lg-5 secVid">
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
    
  <div class="container-fluid text-center img-fluid" style="min-height:400px;background-image: url('XD Assets/abvfooter.png'); background-size: cover; background-repeat:no-repeat;">
    <br><br>
     <div class="d-flex justify-content-center">
    <div class="row m-auto" style="margin-top:4% !important; " >
      <div class="col-md-2 col-14 col-sm-12 abcText">
      <span class="input-group-text " style="font-size: 18px;border-radius: 10px;  background-color: #1E2E81; color: white; border:0px; width: 25%; "> 
       <div class="select ">
          <select name="slct" id="slct">
            <option selected >GB</option>
            <option value="1">UK</option>
            <option value="2">USA</option>
            <option value="3">GM</option>
          </select>
        </div>
        </span>
        </div>
        <div class="col-12 col-md-8 col-sm-12">
     <form action="hit_api.php" method="POST" style="display: flex;">
        <input required type="text" class="form-control inpCust" name="enterCustomerName" placeholder="Enter Your Reg" style="margin-right:4%;border:0px;border-radius: 10px; height: 48px; width:170%; margin-left:-100px">
     </div>
     <div class="col-12 col-md-2 col-sm-12">
        <a href="reqQuote.html" >
       <button name="getCar" class="btn GQBtn" style="color:white;margin-right: auto; font-weight:light; border:0px !important; border-radius: 10px; background-color: #1E2E81; height: 50px; ">Get Quotes</button>
     </a>
 </form>
     </div>
    </div>
  </div>  </div>


<!-- Foter -->
<footer>
    <div class="container-fuild" style="background-image: url(footer-bg.jpg); height: auto;background-size: cover;width: 100%; padding: 5%;">
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
          $(document).ready(function() {    
    
    var id = '#dialog';
    
    //Get the screen height and width
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
    
    //Set heigth and width to mask to fill up the whole screen
    $('#mask').css({'width':maskWidth,'height':maskHeight});
    
    //transition effect   
    $('#mask').fadeIn(500); 
    $('#mask').fadeTo("slow",0.9);  
    
    //Get the window height and width
    var winH = $(window).height();
    var winW = $(window).width();
              
    //Set the popup window to center
    $(id).css('top',  winH/2-$(id).height()/2);
    $(id).css('left', winW/2-$(id).width()/2);
    
    //transition effect
    $(id).fadeIn(2000);   
    
    //if close button is clicked
    $('.window .close').click(function (e) {
    //Cancel the link behavior
    e.preventDefault();
    
    $('#mask').hide();
    $('.window').hide();
    });   
    
    //if mask is clicked
    $('#mask').click(function () {
    $(this).hide();
    $('.window').hide();
    });   
    
    });
    
    
        </script>
      
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
<script src="jquery.js"></script>


<script>$(document).ready(function() { 
    02
     
    03
    var id ='#dialog';
    04
       
    05
    //Get the screen height and width
    06
    var maskHeight = $(document).height();
    07
    var maskWidth = $(window).width();
    08
       
    09
    //Set heigth and width to mask to fill up the whole screen
    10
    $('#mask').css({'width':maskWidth,'height':maskHeight});
    11
     
    12
    //transition effect
    13
    $('#mask').fadeIn(500);
    14
    $('#mask').fadeTo("slow",0.9); 
    15
       
    16
    //Get the window height and width
    17
    var winH = $(window).height();
    18
    var winW = $(window).width();
    19
                   
    20
    //Set the popup window to center
    21
    $(id).css('top',  winH/2-$(id).height()/2);
    22
    $(id).css('left', winW/2-$(id).width()/2);
    23
       
    24
    //transition effect
    25
    $(id).fadeIn(2000);  
    26
       
    27
    //if close button is clicked
    28
    $('.window .close').click(function (e) {
    29
    //Cancel the link behavior
    30
    e.preventDefault();
    31
     
    32
    $('#mask').hide();
    33
    $('.window').hide();
    34
    });
    35
     
    36
    //if mask is clicked
    37
    $('#mask').click(function () {
    38
    $(this).hide();
    39
    $('.window').hide();
    40
    });
    41
       
    42
    });
    </script>

    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="jquery.js"></script>

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