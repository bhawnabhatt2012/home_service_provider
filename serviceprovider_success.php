<html>
    <head>
        <title>Confirmation for sign up</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <style>
        body {
            background: url(loginbg.jpg);
            background-size: cover;
        }
        .container {
            background-color: white;
            margin: auto;
            padding: 25px;
            width: 1000px;
            height: auto;
        }
        .update {
            width: 100%;
            height:200px;
            text-align: center;
            font-family: monospace;
            color: darkorange;
            font-weight: bold;
            font-size: 50px;
        }
        .datalink {
            width: 100%;
            height:100px;
            text-align: center;
            font-family: monospace;
            color: black;
            font-weight: bold;
            font-size: 25px;
        }
        a:link {
            color:black;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
            color: blue;
            background-color: transparent;
        }
    </style>
    <body>
        <div class="container">
            <?php
            $database = mysqli_connect("localhost", "userdb", "userdb","homeservices");
            if($database === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            $type=$_POST['services'];
            $bname=$_POST['bname'];
            $area=$_POST['area_name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $uname=$_POST['uname'];
            $password=$_POST['pword'];
            $sql = "INSERT INTO serviceproviderdb (servicetype,business_name,business_area,business_email,phone,address,username,password) VALUES ('$type','$bname','$area','$email','$phone','$address','$uname','$password')";

                if(mysqli_query($database, $sql)){
                    echo "<div class='update'>You have successfully registered yourself.</div>";
                }  else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($database);
                }
                mysqli_close($database);
            ?>
            <br>
            Click here to login again<button class="btn btn-primary" onclick="window.location.href='/bhawna_serviceProvider_page/serviceprovider.php'">Login</button>
        </div>
        
    </body>
</html>