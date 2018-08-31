<?php
session_start();
$name=$_POST['login'];
$_SESSION['username']=$name;
?>
<!DOCTYPE html>
<html>
<head>
	<title>customer_page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="customer_page_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" id="top">
          <a class="navbar-brand" href="homepage.html"><img src="main_logo.png"></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <?php
                        echo $_SESSION['username'];
                        ?>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../transaction.php">My transactions</a>
                      </div>
                    </div>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-primary">
                        Logout
                    </button>
                </li>
            </ul>
    </nav>
         <div class="main-menu">
        	<div class="list-horizontal">
        		<ul >
        			<li><a>Health Care</a>
        				<ul>
		        		    <li><a>Dentist</a></li>
		        			<li><a>Dietician</a></li>
		        			<li><a>ENT Specialist</a></li>
		        			<li><a>Neurologists</a></li>
		        			<li><a>General Physician</a></li>
		        			<li><a>Paediatricians</a></li>
		        			<li><a>Psychologists</a></li>
	        		    </ul>
        			</li>
        			<li><a>Home Cleaning</a>
        				<ul>
		        		    <li><a>Home Deep Cleaning</a></li>
		        			<li><a>Bathroom Deep Cleaning</a></li>
		        			<li><a>Sofa Cleaning</a></li>
		        			<li><a>Kitchen Cleaning</a></li>
		        			<li><a>Commercial Pest Control</a></li>
		        			<li><a>Chimney Cleaning</a></li>
		        			<li><a>Carpet Cleaning</a></li>
	        		    </ul>
        			</li>
        			<li><a>Catering</a>
        				<ul>
		        		    <li><a>Office</a></li>
		        			<li><a>Birthday Party</a></li>
		        			<li><a>Wedding</a></li>
		        
		        			<li><a>Only Veg</a></li>
	        		    </ul>
        			</li>
        			<li><a>Basic-Needs</a>
        				<ul>
		        			<li><a>Grocery</a></li>
		        			<li><a>Bakery</a></li> 
		        			<li><a>Cakes and Desserts</a></li>
		        			<li><a>Ice-Creams</a></li>
		        			<li><a>Dairy Products</a></li>
	        		    </ul>
        			</li>
        			<li><a>Repairs</a>
        				<ul>
		        		    <li><a>AC services and repair</a></li>
		        			<li><a>iPhone, iPad, Mac repair</a></li>
		        			<li><a>Geyser/Water heater repair</a></li>
		        			<li><a>Laptop repair</a></li>
		        			<li><a>Microwave repair</a></li>
		        			<li><a>Refrigerator repair</a></li>
		        			<li><a>RO/Water purifier repair</a></li>
	        		    </ul>
        			</li>
        			<li><a>Personnels</a>
        				<ul>
		        		    <li><a>Tutor</a></li>
		        			<li><a>Counsellor</a></li>
		        			<li><a>Lawyer</a></li>
		        			<li><a>Photographer</a></li>
		        			<li><a>Passport Agent</a></li>
		        			<li><a>Insurance Agent</a></li>
		        			<li><a>Laundry and Dry cleaner</a></li>
		        			<li><a>Painting</a></li>
		        			<li><a>Roofing</a></li>
		        			<li><a>Tiles</a></li>
		        			<li><a>Wall cladding</a></li>
	        		    </ul>
        			</li>
        			<li><a>Packers and movers</a>
        				<ul>
		        		    <li><a>Business and Industrial goods</a></li>
		        			<li><a>Junk Transporters</a></li>
		        			<li><a>Vehical Transporters</a></li>
		        			<li><a>Antiques and special care items</a></li>
		        			<li><a>Plants and heavy equipments</a></li>
		        			<li><a>Household goods</a></li>
	        		    </ul>
        			</li>
        			<li><a>Security</a>
        				<ul>
		        		    <li><a>CC TV Cameras</a></li>
		        			<li><a>Bodyguard</a></li>
		        			<li><a>Lock</a></li>
		        			<li><a>Walkie Talkie</a></li>
		        			<li><a>Hire Detectives</a></li>
	        		    </ul>
        			</li>
        			<li><a>Emergency</a>
        				<ul>
		        		    <li><a>Blood Banks</a></li>
		        			<li><a>Ambulance Services</a></li>
		        			<li><a>Duplicate key stores</a></li>
		        			<li><a>Fire Brigade</a></li>
		        			<li><a>Towing Services</a></li>
		        			<li><a>Cardiologists</a></li>
		        			<li><a>24 hour Chemists</a></li>
	        		    </ul>
        			</li>
        		</ul>
        	</div>
        </div>

        <!--parallax staring-->
        <div class="health">
          <center><h2>HEALTH CARE</h2></center>
          <p>We are equipped with all the necessary tools and equipments that are needed for best healthcare services. We at "Home Services" assure our users that we provide the best and reliable health care facilities.</p>
          <div class="btn">
          <button type="button" onclick="window.location.href='../healthcare_multistep.php'"><h4>Proceed</h4></button>
          </div>
        </div>
        <div class="homecleaning">
         <center><h2>HOME CLEANING</h2></center>
          <p>our professional home cleaning services cater to an array of household tasks such as Home Deep Cleaning, Floor Scrubbing & Polishing, Fabric Sofa Shampooing, Kitchen and Bathrooms Deep Cleaning, Dining Chair Shampooing.</p>
          <div class="btn">
          <button type="button" onclick="window.location.href='../homecleaning_multistep.php'"><h4>Proceed</h4></button>
          </div>
        </div>
          <div class="catering">
          <center><h2>CATERING</h2></center>
          <p>Catering by LT specializes full-service and special event catering. We also cater small pick-up orders and residential deliveries to make even your most intimate special event memorable.</p>
          <div class="btn">
          <button type="button" onclick="window.location.href='../catering_multistep.php'"><h4>Proceed</h4></button>
          </div>
        </div>
        <div class="basicneeds">
          <center><h2>BASIC NEEDS</h2></center>
          <p>"Home Services" is a low-price online supermarket that allows you to order products across categories like grocery, fruits and vegetables, beauty and wellness, household care, baby care, pet care and meats and seafood and gets them delivered to your doorstep.</p>
          <div class="btn">
          <button type="button" onclick="window.location.href='../basicneeds_multistep.php';"><h4>Proceed</h4></button>
          </div>
        </div>
          <div class="repairs">
          <center><h2>REPAIRS</h2></center>
          <p>Our team comprises of both certified technicians and qualified and trained engineers to redeem any laptop in need of saving.We also cater other needs like electricians, technicians,etc </p>
          <div class="btn">
          <button type="button" onclick="window.location.href='../repair_multipstep.php'"><h4>Proceed</h4></button>
          </div>
        </div>
        <div class="personals">
          <center><h2>PERSONALS</h2></center>
          <p>"Home Services" is in the business of getting curated home service providers for various services ranging from cleaning tasks, pest control, appliances repairs and handyman jobs. Any task is just a click away.</p>
          <div class="btn">
          <button type="button" onclick="window.location.href='../personal_multistep.php'"><h4>Proceed</h4></button>
          </div>
        </div>
          <div class="packers">
          <center><h2>PACKERS AND MOVERS</h2></center>
          <p>.Professional packers and movers in Chennai at cheap and best rates, now you can get pre-verified list of top packers movers in Chennai, to ensure your relocation process safe and affordable.</p>
          <div class="btn">
          <button type="button" onclick="window.location.href='../packersandmovers_multistep.php'"><h4>Proceed</h4></button>
          </div>
        </div>
          <div class="security">
         <center><h2>SECURITY</h2></center>
          <p>Ours is the Biggest and time honoured Security Agency having 32 years experience in Tamil Nadu and Pondicherry States, providing Security to most of the VIP's residence, factories,Tourism departments, Hotel industries, educational institutions, pvt.ltd., and Ltd. Industries, Residential Complexes, Construction sites and other renounce the local Police in throughout the state for easy solution of problems that arise during the course of our service contract.</p>
          <div class="btn">
          <button type="button" onclick="window.location.href='../security_multipstep.php'"><h4>Proceed</h4></button>
          </div>
        </div>
        <div class="emergency">
          <center><h2>EMERGENCY</h2></center>
          <p>Please call us if your home is damaged in a way that requires immediate attention. We’ll have a background-checked, licensed and Resolve-approved professional contact you within an hour.</p>
          <div class="btn">
          <button type="button" onclick="window.location.href='../emergency_multipstep.php'"><h4>Proceed</h4></button>
          </div>
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
</body>
</html>