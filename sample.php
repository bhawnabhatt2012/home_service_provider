<?php
session_start();
if(session_id()===''||!isset($_SESSION['userid'])){
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <style>
            .parallax-window {
                min-height: 400px;
                background: transparent;
            }
            .window-wrapper {
                height:300px;
                background: #ffffff;
            }
            .footer {
               left: 0;
               bottom: 0;
               width: 100%;
                height: 50px;
               background-color:grey;
               color: white;
               text-align: center;
            }
            a:link {
                text-decoration: none;
                color:black;
            }
            a:hover {
                text-decoration: none;
                color:blue;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="parallax.min.js"></script>
        <script src="sample.js"></script>
        
        <script>
            $('.parallax-window').parallax();
        </script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="#"><img src="main_logo.png"></a>
            <ul class="navbar-nav ml-auto">
                 <li class="nav-item">
                    <a class="btn btn-warning" href="bhawna_serviceProvider_page/serviceprovider.php" style="color:red;">List your business</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-basic" href="login.php" style="color:grey;">Login</a>
                </li>
                
                <li class="nav-item">
                    <a class="btn btn-basic" href="signup.html" style="color:grey;">Signup</a>
                </li>
            </ul>
        </nav>
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

      <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">User login form</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal1">
            <div class="modal-dialog">
                <div class="modal-content">

      <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">User login form</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="/action_page.php">
                            <div class="form-group">
                                <label for="email">First Name</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="email">Last Name</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                              <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd">
                              </div>
                            <div class="form-group">
                                <label for="mobile">Mobile Number</label>
                                <input type="number" class="form-control" id="mobile">
                              </div>
                            <div class="form-group">
                                <label for="user_type">You are a :</label>&ensp;
                                <input type="radio" name="user" value="male" checked> Customer&ensp;&emsp;
                                  <input type="radio" name="user" value="female"> Service Provider<br>
                                  
                            </div>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox"> Remember me
                                </label>
                              </div>
                                <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
                        </form>
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
            </div>
        </div>
        <div class="parallax-window" data-parallax="scroll" data-image-src="laundryservices.jpg">
            <div style="padding-top:200px;" class="text-center">
                <h1 style="color:#fff;font-weight:bolder;">Home service provider in Chennai</h1>
                <div class="dropdown">
                    <a href="#" class="btn dropdown-toggle" data-toggle="dropdown" style="background-color:gainsboro;color:black;text-align:center" id="select_location">
                    <img src="location.png">Location
                    </a> &ensp;&emsp;<div class="ui-widget"><input type="text" placeholder="Search for a service" style="width: 500px;border-radius:8px;padding: 12px 20px;margin: 8px 0;" id="services"></div>
                    <div class="dropdown-menu" style="opacity:1">
                        <a class="dropdown-item" href="#">Nungambakkam</a>
                        <a class="dropdown-item" href="#">Kodambakkam</a>
                        <a class="dropdown-item" href="#">Adyar</a>
                        <a class="dropdown-item" href="#">Mylapore</a>
                        <a class="dropdown-item" href="#">Royapettah</a>
                        <a class="dropdown-item" href="#">East Tambaram</a>
                        <a class="dropdown-item" href="#">West Tambaram</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="window-wrapper">
            <div class="container" style="padding-top:10px;">
                <h2 style="text-align:center;">Get your work all done on a single click.</h2>
                <div style="width: 100%;height:100px;">
                    <br/>
                    <table>
                        <tr>
                            <td style="text-align:center;padding:2px;"><a href="#" class="btn btn-basic" data-toggle="modal" data-target="#cleaning"><img src="icons/cleaning.png"></a></td>
                            <td style="text-align:center;padding:2px;"><a href="#" class="btn btn-basic" data-toggle="modal" data-target="#healthcare"><img src="icons/stethoscope.png"></a></td>
                            <td style="text-align:center;padding:2px;"><a href="#" class="btn btn-basic" data-toggle="modal" data-target="#repair"><img src="icons/running-repair.jpg"></a></td>
                            <td style="text-align:center;padding:2px;"><a href="#" class="btn btn-basic" data-toggle="modal" data-target="#catering"><img src="icons/catering.png"></a></td>
                            <td style="text-align:center;padding:2px;"><a href="#" class="btn btn-basic" data-toggle="modal" data-target="#basic"><img src="icons/basicneeds.png"></a></td>
                            <td style="text-align:center;padding:2px;"><a href="#" class="btn btn-basic" data-toggle="modal" data-target="#personals"><img src="icons/personals.png"></a></td>
                            <td style="text-align:center;padding:2px;"><a href="#" class="btn btn-basic" data-toggle="modal" data-target="#packers"><img src="icons/packers.png"></a></td>
                            <td style="text-align:center;padding:2px;"><a href="#" class="btn btn-basic" data-toggle="modal" data-target="#security"><img src="icons/security.png"></a></td>
                            <td style="text-align:center;padding:2px;"><a href="#" class="btn btn-basic" data-toggle="modal" data-target="#emergency"><img src="icons/emergency.png"></a></td>
                            
                        </tr>
                        <tr>
                            <td style="text-align:center;padding:5px;"><a href="#">Home Cleaning</a></td>
                            <td style="text-align:center;padding:5px;"><a href="#">Health Care</a></td>
                            <td style="text-align:center;padding:5px;"><a href="#">Repair</a></td>
                            <td style="text-align:center;padding:5px;"><a href="#">Catering Services</a></td>
                            <td style="text-align:center;padding:5px;"><a href="#">Basic Amenities</a></td>
                            <td style="text-align:center;padding:5px;"><a href="#">Personal Care</a></td>
                            <td style="text-align:center;padding:5px;"><a href="#">Packers and Movers</a></td>
                            <td style="text-align:center;padding:5px;"><a href="#">Security Services</a></td>
                            <td style="text-align:center;padding:5px;"><a href="#">Emergency Services</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="parallax-window" data-parallax="scroll" data-image-src="home_cleaning.jpg">
            <h1 style="text-align:center;color:white;">About Us</h1>
            <br>
            <p style="font-size:25px;text-align:center;color:white;">Home Services provides you all sorts of local services at your destination. More than 1000 trusted professionals near you to take care of all your needs. It delivers reliable services at the push of a button. You can get multiple price quotes with reviews and select a business.</p>
            <br>
            <div class="read" style="width:100%; height:20px;padding-right:15px;">
                <button type="button" class="btn btn-basic" style="text-align:center;float:right;padding-">Read More</button>
            </div>
        </div>
        <div class="services" style="width:100%;height:500px;" >
            <table align="center">
                <td>
                    <div class="card" style="width:500px;">
                        <img src="ac_installer_hd.jpg" style="width:100%">
                        <div class="card-body">
                            <h5>Planning to get your AC repaired?</h5>
                            <a href="#" class="btn btn-basic" style="background-color:gainsboro;color:black;float:right;">Click Here</a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="card" style="width:500px;">
                        <img src="home_cleaning.jpg" style="width:100%">
                        <div class="card-body">
                            <h5>Wasting your time to clean your home?</h5>
                            <a href="#" class="btn btn-basic" style="background-color:gainsboro;color:black;float:right;">Click Here</a>
                        </div>
                    </div>
                </td>
            </table>
        </div>
        <div class="footer">
            <img src="icons/Screenshot%20(22).png" style="padding:10px;float:left;">
            
            <h5 style="padding-top:15px;float:left; color:black;"><img src="icons/copyright.png">Home Services India Pvt Ltd.</h5>
            <div class="social" style="padding-top:9px;float:right; padding-right:15px;">
                <table>
                <tr>
                    <td style="padding:5px;text-align:center;"><img src="icons/facebook.png"></td>
                     <td style="padding:5px;text-align:center;"><img src="icons/twitter.png"></td>
                     <td style="padding:5px;text-align:center;"><img src="icons/instagram.png"></td>
                    <td style="padding:5px;text-align:center;"><img src="icons/linkedin.png"></td>
                    <td style="padding:5px;text-align:center;"><img src="icons/twitter.png"></td>
                </tr>
            </table>
            </div>
        </div>
        <div class="modal fade" id="healthcare">
            <div class="modal-dialog">
                <div class="modal-body">
                <h3 style="text-align:center;color:white;">Related Services</h3>
                <ul style="list-style-type:none;">
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/stethoscope.png" style="width:20px;height:20px;">&ensp;&emsp;Dentist
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/stethoscope.png" style="width:20px;height:20px;">&ensp;&emsp;Dietician
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                           <img src="icons/stethoscope.png" style="width:20px;height:20px;text-align:left;">&ensp;&emsp;ENT Specialist
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/stethoscope.png" style="width:20px;height:20px;">&ensp;&emsp;Neurologists
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/stethoscope.png" style="width:20px;height:20px;">&ensp;&emsp;General Physician
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/stethoscope.png" style="width:20px;height:20px;">&ensp;&emsp;Paediatrician
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/stethoscope.png" style="width:20px;height:20px;text-align:left;">&ensp;&emsp;Psychologists
                        </button></li>
                </ul>
                    <div style="text-align:center;"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
            </div>
            </div>
            
        </div>
        <div class="modal fade" id="cleaning">
            <div class="modal-dialog">
                <div class="modal-body">
                <h3 style="text-align:center;color:white;">Related Services</h3>
                <ul style="list-style-type:none;">
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/cleaning.png" style="width:20px;height:20px;">&ensp;&emsp;Home Deep Cleaning
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/cleaning.png" style="width:20px;height:20px;">&ensp;&emsp;Kitchen Deep Cleaning
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                           <img src="icons/cleaning.png" style="width:20px;height:20px;text-align:left;">&ensp;&emsp;Bathroom Deep Cleaning
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/cleaning.png" style="width:20px;height:20px;">&ensp;&emsp;Sofa Cleaning
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/cleaning.png" style="width:20px;height:20px;">&ensp;&emsp;Commercial Pest Control
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/cleaning.png" style="width:20px;height:20px;">&ensp;&emsp;Chimney Cleaning
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/cleaning.png" style="width:20px;height:20px;text-align:left;">&ensp;&emsp;Carpet Cleaning
                        </button></li>
                </ul>
                <div style="text-align:center"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
            </div>
            </div>
        </div>
        <div class="modal fade" id="catering">
            <div class="modal-dialog">
                <div class="modal-body">
                <h3 style="text-align:center;color:white;">Related Services</h3>
                    <br>
                <ul style="list-style-type:none;text-align:center;">
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/catering.png" style="width:20px;height:20px;">&ensp;&emsp;Office Caterers
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/catering.png" style="width:20px;height:20px;">&ensp;&emsp;Birthday Party Caterers
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                           <img src="icons/catering.png" style="width:20px;height:20px;text-align:left;">&ensp;&emsp;Wedding Caterers
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/catering.png" style="width:20px;height:20px;">&ensp;&emsp;Only veg
                        </button></li>
                </ul>
                    <div style="text-align:center"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
            </div>
            </div>
        </div>
        <div class="modal fade" id="repair">
            <div class="modal-dialog">
                <div class="modal-body">
                <h3 style="text-align:center;color:white;">Related Services</h3>
                <ul style="list-style-type:none;">
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/running-repair.jpg" style="width:20px;height:20px;">&ensp;&emsp;AC Services and Repair
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/running-repair.jpg" style="width:20px;height:20px;">&ensp;&emsp;iPhone, iPad, Mac Repair
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                           <img src="icons/running-repair.jpg" style="width:20px;height:20px;text-align:left;">&ensp;&emsp;Geyser/Water Heater Repair
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/running-repair.jpg" style="width:20px;height:20px;">&ensp;&emsp;Laptop Repair
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/running-repair.jpg" style="width:20px;height:20px;">&ensp;&emsp;Microwave Repair
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/running-repair.jpg" style="width:20px;height:20px;">&ensp;&emsp;Refrigerator Repair
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/running-repair.jpg" style="width:20px;height:20px;">&ensp;&emsp;RO/Water Purifier Repair
                        </button></li>
                </ul>
            
            </div>
            </div>
            
        </div>
        <div class="modal fade" id="basic">
            <div class="modal-dialog">
                <div class="modal-body">
                <h3 style="text-align:center;color:white;">Related Services</h3>
                <ul style="list-style-type:none;">
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/basicneeds.png" style="width:20px;height:20px;">&ensp;&emsp;Grocery
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/basicneeds.png" style="width:20px;height:20px;">&ensp;&emsp;Bakery
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                           <img src="icons/basicneeds.png" style="width:20px;height:20px;text-align:left;">&ensp;&emsp;Cakes and Desserts
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/basicneeds.png" style="width:20px;height:20px;">&ensp;&emsp;Ice Creams
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/basicneeds.png" style="width:20px;height:20px;">&ensp;&emsp;Dairy Products
                        </button></li>
                </ul>
                <div style="text-align:center"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
            </div>
            </div>
        </div>
        <div class="modal fade" id="security">
            <div class="modal-dialog">
                <div class="modal-body">
                <h3 style="text-align:center;color:white;">Related Services</h3>
                <ul style="list-style-type:none;">
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/security.png" style="width:20px;height:20px;">&ensp;&emsp;CCTV Cameras
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/security.png" style="width:20px;height:20px;">&ensp;&emsp;Security Guards
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                           <img src="icons/security.png" style="width:20px;height:20px;text-align:left;">&ensp;&emsp;Security Lock system
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/security.png" style="width:20px;height:20px;">&ensp;&emsp;Walkie Talkie
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/security.png" style="width:20px;height:20px;">&ensp;&emsp;Hire Detectives
                        </button></li>
                </ul>
                <div style="text-align:center"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
            </div>
            </div>
            
        </div>
        <div class="modal fade" id="personals">
            <div class="modal-dialog">
                <div class="modal-body">
                <h3 style="text-align:center;color:white;">Related Services</h3>
                <ul style="list-style-type:none;">
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/personals.png" style="width:20px;height:20px;">&ensp;&emsp;Tutor
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/personals.png" style="width:20px;height:20px;">&ensp;&emsp;Counsellor
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/personals.png" style="width:20px;height:20px;">&ensp;&emsp;Lawyer
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/personals.png" style="width:20px;height:20px;">&ensp;&emsp;Photographer
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/personals.png" style="width:20px;height:20px;">&ensp;&emsp;Passport Agent
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/personals.png" style="width:20px;height:20px;">&ensp;&emsp;Insurance Agent
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/personals.png" style="width:20px;height:20px;">&ensp;&emsp;Laundry and Dry Cleaners
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/personals.png" style="width:20px;height:20px;">&ensp;&emsp;Painting
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/personals.png" style="width:20px;height:20px;">&ensp;&emsp;Roofing
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/personals.png" style="width:20px;height:20px;">&ensp;&emsp;Tiles
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/personals.png" style="width:20px;height:20px;">&ensp;&emsp;Wall Cladding
                        </button></li>
                </ul>
                <div style="text-align:center"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
            </div>
            </div>
            
        </div>
        <div class="modal fade" id="packers">
            <div class="modal-dialog">
                <div class="modal-body">
                <h3 style="text-align:center;color:white;">Related Services</h3>
                <ul style="list-style-type:none;">
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/packers.png" style="width:20px;height:20px;">&ensp;&emsp;Business and Industrial Goods
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/packers.png" style="width:20px;height:20px;">&ensp;&emsp;Junk transporters
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/packers.png" style="width:20px;height:20px;">&ensp;&emsp;Vehicle Transporters
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/packers.png" style="width:20px;height:20px;">&ensp;&emsp;Antique and Special Care Items
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/packers.png" style="width:20px;height:20px;">&ensp;&emsp;Plants and Heavy Equipments
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/packers.png" style="width:20px;height:20px;">&ensp;&emsp;Household Goods
                        </button></li>
                    
                </ul>
                <div style="text-align:center"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
            </div>
            </div>
            
        </div>
        <div class="modal fade" id="emergency">
            <div class="modal-dialog">
                <div class="modal-body">
                <h3 style="text-align:center;color:white;">Related Services</h3>
                <ul style=";list-style-type:none;">
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/emergency.png" style="width:20px;height:20px;">&ensp;&emsp;Blood Banks
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/emergency.png" style="width:20px;height:20px;">&ensp;&emsp;Ambulances
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/emergency.png" style="width:20px;height:20px;">&ensp;&emsp;Duplicate key stores
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/emergency.png" style="width:20px;height:20px;">&ensp;&emsp;Fire Brigade
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/emergency.png" style="width:20px;height:20px;">&ensp;&emsp;Towing Services
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/emergency.png" style="width:20px;height:20px;">&ensp;&emsp;Cardiologists
                        </button></li>
                    <li><button type="button" style="width:400px;height:50px;padding:10px;border-radius:8px;text-align:left;">
                            <img src="icons/emergency.png" style="width:20px;height:20px;">&ensp;&emsp;24-Hours Chemists
                        </button></li>
                    
                </ul>
                <div style="text-align:center"><button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
            </div>
            </div>
            
        </div>
    </body>
</html>
<?php
}
?>
