<!DOCTYPE html>
<html lang="en">
<?php
// Start the session
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Library</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "9850";

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		// Create database
		$sql = "CREATE DATABASE IF NOT EXISTS librarydb";
		if ($conn->query($sql) === TRUE) {
			//echo "Database created successfully";
			
		
		
		$conn->close();
		}
		?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12 background">
                <nav class="navbar">
                    <a class="navbar-brand" href="dashboard.php">
                    <i class="fa fa-bookmark fa-4x" alt="logo" width="140" height="50" alt="" loading="lazy" aria-hidden="true"></i>
                       <!--  <img src="images/simplelogo.svg" alt="logo" width="140" height="50" alt="" loading="lazy"> -->
                    </a>
                </nav>
                <div class="col-12 col-lg-12 " style="margin-top: 10%;">
                <h3 class="login-header pb-2">READ & GROW</h3>
                <div class="container h-100">
                    <div class="row align-items-center h-100" >
                        <div class="col-6 mx-auto" style="outline-style: outset;background-color: black;">
                            <h3 class="login-header pb-2">Login</h3>
                            <form action="user-login.php" method="get">
                                <div class="form-group">
                                <label for="loginUsername" style="color: bisque;font-size: larger;font-weight: 700;padding-left: 40%;" >Username</label>
                                <input type="text" name="userid" class="form-control" id="loginUsername" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group pb-2">
                                <label for="loginPassword"style="color: bisque;font-size: larger;font-weight: 700;padding-left: 40%;">Password</label>
                                <input type="password" name="userpass" class="form-control" id="loginPassword">
                                </div>
                                <button type="submit" class="btn login-btn btn-block" style="
                                font-weight: 500;
                                font-size: 14px;
                                background-color: #58CCF7;
                                letter-spacing: 0px;
                                display: inline-block;
                                border-radius: 30px;
                                transition: 0.5s;
                                line-height: 20.5px;
                                color: #fff !important;
                                align-self: center;
                                border: 0px solid #58CCF7;
                                font-weight: 600;
                                font-size: 14px;
                                outline: none;
                                width: 198px;
                                height: 37px;
                                margin-left: 32%;">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
            </div>
            
        </div>
    </div>
</body>
</html>