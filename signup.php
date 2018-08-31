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
            $firstname=mysqli_real_escape_string($database, $_REQUEST['firstname']);
            $lastname=mysqli_real_escape_string($database, $_REQUEST['lastname']);
            $email=mysqli_real_escape_string($database, $_REQUEST['email']);
            $username=mysqli_real_escape_string($database, $_REQUEST['username']);
            $password=mysqli_real_escape_string($database, $_REQUEST['password']);
            $mobile=mysqli_real_escape_string($database, $_REQUEST['mobile']);
            $houseno=mysqli_real_escape_string($database, $_REQUEST['houseno']);
            $street=mysqli_real_escape_string($database, $_REQUEST['street']);
            $city=mysqli_real_escape_string($database, $_REQUEST['city']);
            $state=mysqli_real_escape_string($database, $_REQUEST['state']);
            if(isset($_POST['remember'])){
                $sql = "INSERT INTO userdb (firstname,lastname,username,password,email,mobile,house_no,street,city,state) VALUES ('$firstname','$lastname','$username','$password','$email','$mobile','$houseno','$street','$city','$state')";

                if(mysqli_query($database, $sql)){
                    echo "<div class='update'>You have successfully registered yourself.</div>";
                }  else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($database);
                }
                mysqli_close($database);
            }
            ?>
        </div>
        
    </body>
</html>