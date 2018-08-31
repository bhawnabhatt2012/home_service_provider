        <!DOCTYPE html>
            <html>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
            <link rel="stylesheet" type="text/css" href="customer_page_style.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <script>
                 $(document).ready(function(){
                    var tags=[
    
                        "Catering Services",
                        "Office Caterers",
                        "Birthday Party Caterers",
                        "Wedding Caterers",
                        "Only veg"
                    ];
                $(".dropdown-menu a").click(function(){
                    var selText = $(this).text();
                    var icon="<img src='location.png'>";
                    console.log(selText);
                    $("#select_location").html(selText+icon);
                });

            $("#service_multistep").autocomplete({
                source:tags
            });
            });

        </script>


            <script>
              function validate(){
                  var phone=document.getElementById("phone").value;
                  var phreg=/^[0-9]{10}$/;
                  if(!phone.test(phreg)){
                      alert("phone number should contain only numbers and should contain 9 or 10 digits.");
                      return false;
                  }
                  return true;
              }
            </script>
            <style>
            * {
              box-sizing: border-box;
            }

            body {
              background-color: #f1f1f1;
            }

            #regForm {
              background-color: #ffffff;
              margin: 80px auto;
              font-family: Raleway;
              padding: 40px;
              width: 70%;
              height: 50%;
              min-width: 300px;
              margin-bottom: 5px;
            }

            h1 {
              text-align: center;  
            }

            input {
              padding: 10px;
              width: 100%;
              font-size: 17px;
              font-family: Raleway;
              border: 1px solid #aaaaaa;
            }

            /* Mark input boxes that gets an error on validation: */
            input.invalid {
              background-color: #ffdddd;
            }

            /* Hide all steps by default: */
            .tab {
              display: none;
            }

            button {
              background-color: #4CAF50;
              color: #ffffff;
              border: none;
              padding: 10px 20px;
              font-size: 17px;
              font-family: Raleway;
              cursor: pointer;
            }

            button:hover {
              opacity: 0.8;
            }

            #prevBtn {
              background-color: #bbbbbb;
            }

            /* Make circles that indicate the steps of the form: */
            .step {
              height: 15px;
              width: 15px;
              margin: 0 2px;
              background-color: #bbbbbb;
              border: none;  
              border-radius: 50%;
              display: inline-block;
              opacity: 0.5;
            }

            .step.active {
              opacity: 1;
            }

            /* Mark the steps that are finished and valid: */
            .step.finish {
              background-color: #4CAF50;
            }
            .container{
                width:100%;
                height:60%;
             }
            .footer{
               position: fixed;
               bottom:0px;
                width:100%;
            }
            </style>
            <body>
            <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" id="top">
                      <a class="navbar-brand" href="homepage.html"><img src="main_logo.png"></a>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    Logout
                                </button>
                            </li>
                        </ul>
                    </nav>
                          <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                  <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Log Out</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form action="/action_page.php">
                                        <div class="form-group">
                                            <center>
                                            <strong><label for="logout">Do you want to log out?</label></strong>
                                            <br>
                                          <button type="submit" class="btn btn-primary">Yes</button>&emsp;&ensp;
                                          <button type="submit" class="btn btn-primary">No</button>
                                    </center>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="container">
            <form id="regForm" action="customerprofile.php" onsubmit="return validate()" method="post">
              <h1>Request Service:</h1>
              <!-- One "tab" for each step in the form: -->
                <div class="tab"><b><center>Service info:</center></b><br>
                <p><b>Type of service:</b><br><input placeholder="Type of service needed..." oninput="this.className = ''" name="servicetype" id="service_multistep"></p>
                  <p><b>Date of service:</b><br><input type="date" placeholder="date of service..." oninput="this.className = ''" name="pdate"></p>
                  <p><b>Time</b><br><input type="time" placeholder="Time of service..." oninput="this.className = ''" name="ptime"></p>
              </div>
                <div class="tab"><b><center>Contact Info:</center></b><br>
                <p><b>Email:</b><br><input type="email" placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
                <p><b>Phone:</b><br><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
                <p><b>Address:</b><input placeholder="address..." oninput="this.className = ''" name="address"></p>
              </div>
                <div class="tab"><b><center>Login Info:</center></b><br>
                <p><b>Username:</b><br><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
                <p><b>Password:</b><br><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
              </div>
              <div style="overflow:auto;">
                <div style="float:right;">
                  <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
              </div>
              <!-- Circles which indicates the steps of the form: -->
              <div style="text-align:center;margin-top:30px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
              </div>
            </form>
        </div>
            <script>
            var currentTab = 0; // Current tab is set to be the first tab (0)
            showTab(currentTab); // Display the crurrent tab

            function showTab(n) {
              // This function will display the specified tab of the form...
              var x = document.getElementsByClassName("tab");
              x[n].style.display = "block";
              //... and fix the Previous/Next buttons:
              if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
              } else {
                document.getElementById("prevBtn").style.display = "inline";
              }
              if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
              } else {
                document.getElementById("nextBtn").innerHTML = "Next";
              }
              //... and run a function that will display the correct step indicator:
              fixStepIndicator(n)
            }

            function nextPrev(n) {
              // This function will figure out which tab to display
              var x = document.getElementsByClassName("tab");
              // Exit the function if any field in the current tab is invalid:
              if (n == 1 && !validateForm()) return false;
              // Hide the current tab:
              x[currentTab].style.display = "none";
              // Increase or decrease the current tab by 1:
              currentTab = currentTab + n;
              // if you have reached the end of the form...
              if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
              }
              // Otherwise, display the correct tab:
              showTab(currentTab);
            }

            function validateForm() {
              // This function deals with validation of the form fields
              var x, y, i, valid = true;
              x = document.getElementsByClassName("tab");
              y = x[currentTab].getElementsByTagName("input");
              // A loop that checks every input field in the current tab:
              for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                  // add an "invalid" class to the field:
                  y[i].className += " invalid";
                  // and set the current valid status to false
                  valid = false;
                }
              }
              // If the valid status is true, mark the step as finished and valid:
              if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
              }
              return valid; // return the valid status
            }

            function fixStepIndicator(n) {
              // This function removes the "active" class of all steps...
              var i, x = document.getElementsByClassName("step");
              for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
              }
              //... and adds the "active" class on the current step:
              x[n].className += " active";
            }
            </script>

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
            </body>
            </html>