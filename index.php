<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Only for test</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     -->
     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
     <style type="text/css">
         #myCarousel{
            background: url('hj.mp4');
         }
         video{
          height: 100%;
          width: 100%;
          z-index: -1000;
         }
         input{
          width: 100%;
          height: 30px;
          border-top: 0;
          border-left: 0;
          border-right: 0;
          border-color: black;
          margin-bottom: 15px;
         }
         textarea{
          width: 100%;
          height: 30px;
          border-top: 0;
          border-left: 0;
          border-right: 0;
          border-color: black;
         }
         
  .fullscreen-bg {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
  z-index: -100;
}

.fullscreen-bg__video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

@media (min-aspect-ratio: 16/9) {
  .fullscreen-bg__video {
    height: 300%;
    top: -100%;
  }
}

@media (max-aspect-ratio: 16/9) {
  .fullscreen-bg__video {
    width: 300%;
    left: -100%;
  }
}

@media (max-width: 767px) {
  .fullscreen-bg {
    background: url('../img/videoframe.jpg') center center / cover no-repeat;
  }

  .fullscreen-bg__video {
    display: none;
  }
}
.img-thumbnail
{
  height: 350px;
  width: 100%;
}
         p{
            color: black;
            text-align: center;
            font-size: 40px;
            margin-top: 40px;
            
            
         }
         .carousel .item {
  height: 600px;
}
     </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation" style="background-color:#f9f9f9 ; color: black; height: 70px; backface-visibility: 50%;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs" style="background-color: #f9f9f9">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs">
                <ul class="nav navbar-nav navbar-right" style="font-family:Ebrima;">
                    <!-- <li>
                        <a style="color:#e4d9b9;font-size: 19px;" href="about.php">About</a>
                    </li>
                    <li>
                        <a style="color:#e4d9b9;font-size: 19px;" href="new.php">Institutes</a>
                    </li>-->
                    <li>
                        <a style="color:black;font-size: 19px;" href="#myCarousel">Home</a>
                    </li>
                    <li><a style="color:black;font-size: 19px;" href="#about">About Us</a></li>
                    <li><a style="color:black;font-size: 19px;" href="#what">What We Do</a></li>
                    <li><a style="color:black;font-size: 19px;" href="#our">Our Team</a></li>
                    <li><a style="color:black;font-size: 19px;" href="#">Projects</a></li>
                    <li><a style="color:black;font-size: 19px;" href="#con">contact Us</a></li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
      </nav>
      

<div id="myCarousel" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
    <div class="item active" role="listbox">
    <!--<video
  src="hj.mp4" 
  poster="#myCarousel"
  autoplay mute 
/>-->
<div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        
        <source src="hj.mp4" type="video/mp4">
        
    </video>
</div>
   <div style="z-index: 1000;">     <br><br><br>
      <p style="font-size: 40px;color: white;">We create experiences</p>
      <br>
      <P style="color: white;">THAT BUILD <span style="color: blue;">MOTIVATON.</span><br>
      <button style="background:transparent;border-color: white;color: white; font-size: 30px;">FIND OUT MORE</button> </P>     
    </div></div>
    <div class="item">
    <div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        
        <source src="hj.mp4" type="video/mp4">
        
    </video>
</div>
      <br><br><br>
      <p style="font-size: 40px;color: white;">Inspired by purpose</p>
      <br>
      <P style="color: white;">DRIVEN BY <span style="color: blue;">PASSION.</span><br>
      <button style="background:transparent;border-color: white;color: white; font-size: 30px;">FIND OUT MORE</button> </P>
    </div>
    <div class="item">
    <div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        
        <source src="hj.mp4" type="video/mp4">
        
    </video>
</div>
     <br><br><br>
     <div class="container">
     <div class="row">
      <p style="font-size: 30px; color: white;">YOU'VE PROBABLY NOTICED</p>
      <br>
      <P style="color;white">WE LOVE WHAT <span style="color: blue;">WE DO.</span><br>
      <button style="background:transparent;border-color: white;color: white; font-size: 30px;">FIND OUT MORE</button> </P>
    </div>
    </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
</div>
<div class="container-fluid" style="background-color:#323232 ">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<br><p style="color: white;text-align: center;font-size: 25px;">OUR FEATURED PROJECTS
<br><button style="background: transparent;border-color: white;">ALL PROJECTS</button></p>
</div>
</div><br>
<div class="row">
<div class="col-md-2">
  <span class="glyphicon glyphicon-menu-left" style="color: white; vertical-align: center;"></span>
</div>
<div class="col-md-8">
 <img class="img-responsive" src="carpe.jpg">
 <br><br><br><h2 style="color: white;text-align: center;">LOCATION MAP</h2><br><br> 
</div>
<div class="col-md-2">
  <span class="glyphicon glyphicon-menu-right" style="color: white;"></span>
</div>

</div>
</div>
<div class="container-fluid">
<br>
<div class="row">
<p style="text-align: center;">EFFICIENT AFFORDABLE PRICING MODELS</p>
</div>
<div class="row">
  <div class="col-md-3">
  <div class="panel panel-default" style="height: 360px;">
   <div class="panel-body" style="text-align: center;"">
     ~<br>
     PLOT<br>
     <h2>ON REQUEST</h2><br><br>
     STARTS WITH 100 SQ YD
MINUMUM 30 FEET ROAD
GATED SOCIETY WITH CLUB HOUSE FACILITES
BANK FINANCE AVAILABLE
<br><br>
<button>contact us</button>
</div>


   </div>
  </div>
  <div class="col-md-3">
  <div class="panel panel-default" style="height: 360px;">
   <div class="panel-body" style="text-align: center;"">
     ~<br>
     STANDARD VILLA<br>
     <h2>ON REQUEST</h2><br><br>
     1800 SQFT ON 100 SQYD PLOT
MINUMUM 30 FEET ROAD
GATED SOCIETY WITH CLUB HOUSE FACILITES
BANK FINANCE AVAILABLE
<br><br>
<button>contact us</button>
</div>


   </div>
  </div>
  <div class="col-md-3">
  <div class="panel panel-default" style="height: 360px;">
   <div class="panel-body" style="text-align: center;"">
     ~<br>
     CUSTOMIZED VILLA<br>
     <h2>ON REQUEST</h2><br><br>
     CUSTAMIZE PLOT SIZE
CHOOSE THE CONSTRUCTED AREA &amp; ARCHITECTURAL DESIGN
SEE THE HOUSE BEING BUILD
BANK FINANCE AVAILABLE
<br><br>
<button style="margin-bottom: 2px;">contact us</button>
</div>


   </div>
  </div>
  <div class="col-md-3">
  <div class="panel panel-default" style="height: 360px;">
   <div class="panel-body" style="text-align: center;"">
     ~<br>
     1 BHK APARTMENT<br>
     <h2>ON REQUEST</h2><br><br>
     520 SQ FT
30 FEET ROAD
GATED SOCIETY WITH CLUB HOUSE FACILITES
BANK FINANCE AVAILABLE
<br><br>
<button>contact us</button>
</div>


   </div>
  </div>

  </div>
</div>





</div>
<span id="about"><br></span>
<div class="container-fluid">
<div class="row" style="text-align: center;">
<h2>ABOUT US</h2>
</div>
<br><br>
<div class="row" style="text-align: center; opacity: .6;">
  WE ARE RELENTLESS IN MOVING BOUNDARIES AND CARRY OUT THE SPIRITED ATTITUDE INTO<br> CREATING EXPERIENCES, THAT ENGAGE, INSPIRE AND MAKE YOU FALL IN LOVE.
</div>
<br>
<div class="row">
  <div class="col-md-3" style="float: left; text-align: right; animation-name: ">
    <h2>PURPOSE</h2><br><br>
    To be a leader in the real estate<br> industry by providing enhanced<br> services, relationship and<br> profitability.<br><br><br><br>
    <h2>MISSION<br>STATEMENT</h2><br><br>
    To build long term relationships<br> with our customers and clients<br> and provide exceptional customer<br> services by pursuing business<br> through innovation and advanced <br>technology.
  </div>
  <div class="col-md-6">
  <img src="fg.jpg" class="img-responsive" style="height: 80%;width: 80%;margin-left: 10%; margin-right: 10%;">
  </div>
  <div class="col-md-3" style="float: right;text-align: left;">
  <h2>
VISION</h2><br><br>
    To provide quality services that <br>exceeds the expectations of our<br> esteemed customers.<br><br><br><br><br>
    <h2>CORE VALUES</h2><br><br>
    We believe in treating our<br> customers with respect and faith<br> and are driven by Passion for the<br> real estate industry.

</div>  
</div>
<span id="what"></span>
<div class="container-fluid">
<div class="row" style="text-align: center;font-size: 25px;">
<h2> WHAT WE DO</h2></div><br><br>
<div class="row" style="text-align: center;opacity: .6;font-size: 20px;">
WE TACKLE BUSINESS PROBLEMS WITH INTELLIGENCE. WE USE CUTTING-EDGE THINKING TO BRING<br> IDEAS TO LIFE.</div>
<br><br>
<div class="row">
  <div class="col-md-6">
    <h2 style="font-size: 25px;">THE BEST SOLUTION FOR YOUR NEED</h2><br><br>
    <span style="font-size: 20px; opacity: .7;">Prominence Realty is a 21st century visionary real estate<br> developers, we believe in housing for all. creating quality<br> housing with futuristic and innovative designs, putting "ART IN<br> REAL ESTATE".</span>

  </div>
  <div class="col-md-6">
  <ul style="font-size: 20px; opacity: .7;">
    <li>We have control over huge land parcels i.e. in access of 1050 acres, all across Delhi/NCR, and have been dealing in it.</li>
    <li>We are into entertainment industry, funding and independently producing bollywood movies.</li>
    <li>We are also the authorized representatives of FDI and other fund houses, managing funds for infrastructure and development projects in access of INR 1000 crores.</li>
    <li>V R Prominence Realty India Pvt. Ltd. Deals exclusively in the development part of real estate business of the group.</li>
    <li>In addition to the current 7 acres of development on hands, 40 acres of township in faridabad and 50 acres of township in Gaziabad is in the pipeline currently and will be in offering by April 2016.</li></ul>
  
  </div>
</div> 
</div>
<br><br>
<div class="container-fluid">
  <div class="row" style="text-align: center;">
    <h1 id="our">OUR TEAM</h1>
   </div><br><br>
   <div class="row" style="text-align: center;font-size: 20px; opacity: .7;">
   WE'RE A SMALL, FRIENDLY AND TALENTED TEAM. WE ONLY HIRES <b style="opacity: 1;">TALENTED TEAM.</b> WE ONLY HIRES <br><b style="opacity:1;">SMART PEOPLE</b> WITH HIGH ETHICAL VALUES. WE FOCUS ENTIRELY ON INNOVATIVE SOLUTIONS AND <br>TAKING CARE OF OUR CUSTOMERS.
    
  </div><br><br><br>
  <div class="row">
  <div class="col-md-3">
  <div class="panel panel-default text-center" style="height: 550px;">
  <div class="panel-header">
  <img src="kl.jpg" class="img-responsive img-thumbnail" style="padding: 10px;">
  </div>
  <div class="panel-body">
  <h4>XYZDF</h4>
   <span class="text-info">Managing director</span> <br><br>
   Has an experience of almost 2 decades in construction and brick manufacturing after passing out from Cambridge. 
</div>
</div>
</div>
<div class="col-md-3">
  <div class="panel panel-default text-center" style="height: 550px;">
  <div class="panel-header">
  <img src="hl.jpg" class="img-responsive img-thumbnail" style="padding: 10px;">
  </div>
  <div class="panel-body">
  <h4>AA</h4>
   <span class="text-info">Director Strategy &amp; Planning</span><br><br>
  Has 10 years experience in international real estate and fund raising. he also represents FDI and Fund Houses in India.
</div>
</div>
</div>
<div class="col-md-3">
  <div class="panel panel-default text-center" style="height: 550px;">
  <div class="panel-header">
  <img src="jk.jpg" class="img-responsive img-thumbnail" style="padding: 10px;">
  </div>
  <div class="panel-body">
  <h4>bbbb</h4>
   <span class="text-info">Director</span>  
</div>
</div>
</div>
<div class="col-md-3">
  <div class="panel panel-default text-center" style="height: 550px;">
  <div class="panel-header">
  <img src="op.jpg" class="img-responsive img-thumbnail" style="padding: 10px;">
  </div>
  <div class="panel-body">
  <h4>XYZDF</h4>
   <span class="text-info">Managing director</span>  
</div>
</div>
</div>
</div><br><br><br><br><br>
<div class="row text-center" id="con">
<b style="font-size: 20px;">Are you ready to start a conversation?</b><br><br>
<i style="opacity: .8;font-size: 20px;">Get in Touch!</i><br><br><br><br><br>
<h1>CONTACT</h1><br><br>
<i style="opacity: .8;font-size: 20px;">LET US WORK WITH YOU TO CREATE</i><b style="font-size: 20px;"> STRATEGY</b><i style="opacity: .8;font-size: 20px;"> THAT WORKS</i><br><br><br>
<h1>WANT TO DISCUSS YOUR IDEAS</h1>
</div><br><br>

</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<form>
  <div class="row">
  <div class="form-group col-md-6">
  <input type="text" name="name" placeholder="Enter Your Name" required=""></div>
  <div class="form-group col-md-6">
  <input type="email" name="em" placeholder="Enter Your Email" required=""></div></div>
  <div class="row">
  <div class="col-md-12">
  <textarea placeholder="Tell Us Everything"></textarea></div></div><br><br>
  <div class="row text-center">
    <button style="background: transparent;border-color: black;font-size: 30px;">SUBMIT</button>
  </div><br><br>
</form>
</div>
</div>
</div>
<div class="container-fluid" style="background-color:#f2f2f2;">
<div class="row text-center">
  <div class="col-md-4">
  <br><br>
  <h2>OFFICE:</h2>
  <br>
  <br>
  <span style="font-size:20px;">123,abcd sector-3,Noida,Uttar Pradesh</span>
  </div>
  <div class="col-md-4">
  <br><br>
  <h2>PHONE:</h2><br><br>
  <span style="font-size: 20px;">0120-123-4567</span>
  </div>
  <div class="col-,d-4">
  <br><br>
  <h2>EMAIL:</h2><br><br>
  <span style="font-size: 20px;">abcdefg123@gmail.com</span>
  </div>
  </div><br><br>
</div>
<footer style="height: 90px;margin-right: 0px;margin-left: 0px; background-color: black; color:cyan;"></footer>
</body>

</html>