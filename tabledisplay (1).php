<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="customer_page_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <style>
        body{
            background:#ECF0F1;
        }
        .container{
            padding:10px;
            margin-top: 100px;
            width: 100%;
            height: 77%;
        }
        table,th{
            text-align:center;
            padding:10px;
            border:2px solid black;
        }
        tr{
            padding-left: 30px;
            padding-right: 30px;
        }
        td{
            padding:10px;
            border:2px solid black;
        }
    </style>
<body>
<?php
   if(isset($_POST['submit'])){
    $conn = mysqli_connect("localhost","root","","testtable");
    if($conn==false){
        echo "error: ".mysqli_connect_error($conn);
    }else{
       // echo "successfully connected.";
    }
    $username=$_POST['username'];
    $sql="select * from testtable1 where username='".$username."'";
    $query=mysqli_query($conn,$sql);
    if($query==false){
        echo "query is not working.";
    }else{
       // echo "query is working.";
    }
?>
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
    <center>
    <h1>HISTORY</h1>
    <br>
    <br>
<table>
    <thead>
        <tr>
            <th>USERNAME</th>
            <th>CUSTOMER ID</th>
            <th>DATE</th>
            <th>PLACE</th>
            <th>SERVICE TYPE</th>
        </tr>
    </thead>
    <tbody>
        
            <?php
        while( $row = mysqli_fetch_assoc($query)){
           $name=$row['username'];
           $transaction=$row['transaction'];
           $date=$row['date'];
           $place=$row['place'];
           $servicetype=$row['servicetype'];
            ?>
            <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $username; ?></td>
            <td><?php echo $transaction; ?></td>
            <td><?php echo $date; ?></td>
            <td><?php echo $place; ?></td>
            <td><?php echo $servicetype; ?></td>
        </tr>
        <?php } } ?>
    </tbody>
</table>
    </center>
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
</body>
</html>