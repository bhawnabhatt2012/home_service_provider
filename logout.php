<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="customer_page_style.css">
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
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" id="top">
          <a class="navbar-brand" href="homepage.html"><img src="main_logo.png"></a>
        </nav>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <?php
                session_start();
                setcookie(session_name(),"",time()-3600);
                session_destroy();
                session_write_close();
                echo "<div class='update'>You have successfully logged out.</div>"
            ?>
            <div class="datalink"><a href="login.php">Click here to login again.</a></div>
            <div class="datalink"><button class="btn btn-primary" onclick="window.location.href='index.php'">Home Page</button></div>
        </div>
    </body>
</html>