<?php
if(isset($_POST["go"])){ 
    if(isset($_POST['user'])){
        $username=$_POST['user'];
        if($username=="customer"){
            if(!empty($_POST['login']) && !empty($_POST['password'])) {  
            $user=$_POST['login'];  
            $pass=$_POST['password'];  

            $con=mysqli_connect('localhost','userdb','userdb') or die(mysql_error());  
            mysqli_select_db($con,'homeservices') or die("cannot select DB");  

            $query=mysqli_query($con,"SELECT * FROM userdb WHERE username='".$user."' AND password='".$pass."'");  
            $numrows=mysqli_num_rows($query);  
            if($numrows!=0)  
            {  
            while($row=mysqli_fetch_assoc($query))  
            {  
            $dbusername=$row['username'];  
            $dbpassword=$row['password'];  
            }  

            if($user == $dbusername && $pass == $dbpassword)  
            {  
            session_start();  
            $_SESSION['userid']=$user;  

            /* Redirect browser */  
            header("Location: himanshi/customer_page.php");  
            }  
            } else {  
            echo "Invalid username or password!";  
            }  
        }
    }else{
          $user=$_POST['login'];  
        $pass=$_POST['password'];  
  
        $con=mysqli_connect('localhost','userdb','userdb') or die(mysql_error());  
        mysqli_select_db($con,'homeservices') or die("cannot select DB");  

            $query=mysqli_query($con,"SELECT * FROM serviceproviderdb WHERE sid='".$user."' AND password='".$pass."'");  
            $numrows=mysqli_num_rows($query);  
            if($numrows!=0)  
            {  
            while($row=mysqli_fetch_assoc($query))  
            {  
            $dbusername=$row['sid'];  
            $dbpassword=$row['password'];  
            }  

            if($user == $dbusername && $pass == $dbpassword)  
            {  
            session_start();  
            $_SESSION['userid']=$user;  

            /* Redirect browser */  
            header("Location: bhawna_serviceProvider_page/serviceprovider.php");  
            }  
            } else {  
            echo "Invalid username or password!";  
            }  
        }     
        }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="login.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/additional-methods.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="login.js"></script>
        <title>Login Page</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="#"><img src="main_logo.png"></a>
            </nav>
            </div>
            <br>
            <br>
            <br>
            <div class="login-form">
                <form method="post" id="login" action="himanshi/customer_page.php">
                    <div class="title">Login Form</div>
                    <br>
                    <br>
                    <div class="form-details">
                        <table align="center">
                            <tr>
                                <td>Username</td>
                                <td><input type="text" name="login" placeholder=Username></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" placeholder="Password"></td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="user" value="customer" id="">Customer</td>
                                <td><input type="radio" name="user" value="serviceprovider">Service Provider</td>
                            </tr>
                        </table>
                        <br>
                        <input type="submit" name="go" value="Login" id="go-btn" class="btn btn-primary">
                        <br>
                        <br>
                        <a href="#dummy">Forgot Password?</a>
                    </div>
                    <br>
                    <br>                    
                </form>
                <br>
        </div>
    </body>
</html>