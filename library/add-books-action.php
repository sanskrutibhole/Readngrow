<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <a class="navbar-brand my-0 mr-md-auto" href="dashboard.php">
		<img src="images/logo5.jpg" alt="logo" width="20%"  alt="Logo" loading="lazy">
        </a>
        <p style="font-size: 190%;font-weight: 700;color: #601c1c;">Read and Grow</p>
        <button class=" logout-btn"  onclick="location.href='user-logout.php'" style="
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
                                width: 116px;
                                height: 37px;
                                margin-left: 32%;">Logout</button>

      </div>
	  <div  class="background " style="margin-top: -2%; ">
      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
            
          <div class="col-8 mx-auto" style="margin-top: -30%;">

                <div class="shadow-lg bg-white mt-4 p-4">
					<?php
							
							$servername = "localhost";
							$username = "root";
							$password = "9850";
							$dbname ="librarydb";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							} 
							
							$sql = "CREATE TABLE IF NOT EXISTS book_database (
								book_id VARCHAR(50) PRIMARY KEY,
								book_name VARCHAR(50), 
								aut_name VARCHAR(50),
								pub VARCHAR(50),
								qty INT(11)
							)";

							if ($conn->query($sql) === TRUE) {
							//echo "Table admin_database created successfully";
							} else {
							echo "Error creating table: " . $conn->error;
							}
							
							$bookid = filter_input(INPUT_GET,'bookid');
							$bookname = filter_input(INPUT_GET,'bookname');
							$autname = filter_input(INPUT_GET,'autname');
							$pub = filter_input(INPUT_GET,'pub');
							$qty = filter_input(INPUT_GET,'qty');


							$sql = "INSERT INTO book_database (book_id, book_name, aut_name, pub,qty) 
							VALUES ('$bookid', '$bookname','$autname','$pub','$qty')";


							if ($conn->query($sql) === TRUE) {
							//echo "New record created successfully";
							echo "<h3 class='text-center m-4'>New Book Added successfully</h3><form action='dashboard.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
							
							
							} else {
								echo "<h3 class='text-center m-4'>Book ID Already Taken!!!</h3><form action='add-books.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
							}

							$conn->close();
							
							?>
							</div>
                
				</div>
			  </div>
				
			</div>
</body>
</html>