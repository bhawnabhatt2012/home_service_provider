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
            $user=$_POST['uname'];
            $type=$_POST['servicetype'];
            $date=$_POST['pdate'];
            $time=$_POST['ptime'];
            $address=$_POST['address'];
            $sql = "INSERT INTO customer_details (username,servicetype,date,time,custaddress) VALUES ('$user','$type','$date','$time','$address')";

                if(mysqli_query($database, $sql)){
                    echo "<div class='update'>You have successfully booked your service.</div>";
                }  else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($database);
                }
                mysqli_close($database);
            ?>
            <br>
            <button class="btn btn-primary" onclick="window.location.href='himanshi/customer_page.php'">Go back to main page</button>
        </div>
        
    </body>
</html>