<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="service_providers_form.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="#"><img src="main_logo.png"></a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    
                </li>
                
                <li class="nav-item">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
                        Signup
                    </button>
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
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox"> Remember me
                                </label>
                              </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

      <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
            </div>
        </div>


        <!--div for main form -->
        <div class="service_info">

            
            <h1> <b>Home services  helps millions of 
                businesses get found by customers</b> </h1>
    

    
   
      <div class="container">
      	<h4>Find and claim your business on Home Services </h4>
    <h5><i>Search by city and mobile number/business name</i></h5>

      	<br>
        <form>
          <input type="business" placeholder="Enter business name ">
          <button type="submit" class="button_1"><p>search</p></button>
      </form>
      <div class="vl"></div>
  </div>
     
    

       <div class="right container">
           <h4><b>Can't find your business?</b></h4>
           <h5><b>List your business with us in 3 simple steps</b></h5><br>
        <form>
            <a class="btn" href="../ServiceProvider_data.php" style="background-color: red;color:white;font-weight: bold;">List your Business</a><h6><b>Already listed?</b> <b><a href="serviceprovider_login.php">SIGN IN</a></b></h6>
          
        </form>
    
  </div>
   
</div>
      
     <!--main center form for further information-->
     <div class="business_details">
     	<h4><b>Create your free business profile in minutes</b></h4>
     	<ul>
     	    <li> <h6>Get your own business listing page created instantly from 
     	     the information you provide</h6>
     		    </li>
     		<li> <h6>Add photos, social links, and source reviews from happy
     		 customers for a rich listing</h6>
     		     </li>
     		<li> <h6>8+ million unique people visit Sulekha.com every month for
     		 their local service requirements</h6></li>  
     		<li> <h6>Upgrade your free business listing to a paid account and 
     		start getting leads!</h6></li>   


     	</ul>
     	<form>
          <a class="btn" href="index.html" style="background-color: red;color:white;font-weight: bold;">List your Business</a>
          
        </form>
       <b><hr></b>

       <h3><b>Benefits of Partnering with Home-Services</b></h3>
       
        <div class="box">
        
          <img src="brand-icon.png" style="width:150px;height:100px;">
          <h5><b>TRUSTED BRAND</b></h5>
          <p>38 lakh users are looking for services on HomeServices every month and 90k partners are growing their business with HomeServices.</p>
       </div>
        <div class="box">
          <img src="list.png" style="width:150px;height:100px;">
          <h5><b>PRIORITIZED LISTING</b></h5>
          <p>Paid partners are listed higher than free businesses in our listing pages.</p>
        </div>
        <div class="box">
          <img src="delivery.png" style="width:150px;height:100px;">
          <h5><b>PRIORITIZED LEAD DELIVERY</b></h5>
          <p>User service requests on Sulekha website are sent via SMS / email / app notifications with complete details of services requested and cost of leads.</p>
        </div>
		<div class="box">
          <img src="rating.png" style="width:150px;height:100px;" >
          <h5><b>HOME-SERVICES SCORE</b></h5>
          <p>Paid partners get a score based on their profile completeness, responsiveness to customers, and verified KYC documents.</p>
        </div>
		<div class="box">
          <img src="report.png">
          <h5><b>DETAILED REPORTS</b></h5>
          <p>Detailed lead information and reports on leads delivered are available via emails, business app, and web dashboard.</p>
        </div>
		<div class="box">
          <img src="support.png"  style="width:150px;height:100px;">
          <h5><b>HOME-SERVICES SUPPORT</b></h5>
          <p>Email / phone / chat support from HomeServices in case you run into any problems.</p>
        </div>
        <!--copyright-->


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
</div>


    </body>
</html>