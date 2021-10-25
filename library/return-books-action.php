<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue book</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vender/css/all.css">
</head>
<body>
    <?php
        if($_SESSION["userid"] === ""){
          echo $_SESSION['userid'];
          echo "login";
          header("Location: index.php ");
        }
      ?>
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
      <div class="background " style="margin-top: -2%;">
      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
          <div class="col-8 mx-auto" style="margin-top: -30%; background:aliceblue">  
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
		
		$bookid = filter_input(INPUT_GET,'bookid');
		$usn = filter_input(INPUT_GET,'studentid');
		$rdate = filter_input(INPUT_GET,'date');
		
		$sql1 = "SELECT * FROM issue_database WHERE usn='$usn'";
        $res = $conn->query($sql1);

		if ($res->num_rows > 0) {
		
        $sql1 = "SELECT date FROM issue_database WHERE usn='$usn' AND book_id='$bookid'";
        $res = $conn->query($sql1);
        
        if($res->num_rows > 0 ){
            $row = mysqli_fetch_array($res);
            $ldate = $row['date'];
            
            $x=date_create($ldate);
            $t=date_create($rdate);
            $dat=date_diff($x,$t);
            $aa= $dat->format("%a");
            $aaa= $dat->format("%R");
            
            
            $_SESSION["bookid"] = $bookid;
            $_SESSION["usn"] = $usn;
            
            
            if($aaa=='+')
            {
                echo "<h3 class='text-center m-4'>Fine : Rs ".$aa."</h3><form action='book-returned.php'><button class='btn btn-block login-btn' type='submit'>pay</button></form><form action='dashboard.php'><button class='btn btn-block bg-light mt-2' type='submit'>Cancel</button></form>";
            }
            else{
                
                $sql = "DELETE FROM issue_database WHERE usn='$usn' AND book_id='$bookid'";
                if ($conn->query($sql) === TRUE) {
                    $sql2 = "UPDATE book_database SET qty=qty+1 WHERE book_id='$bookid'";
                    $resul = $conn->query($sql2);
                    echo "<h3 class='text-center m-4'>Book Returned successfully</h3><form action='dashboard.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
                } else {
                    //echo "Error deleting record: " . $conn->error;
                }
            }
        }else{
			echo "<h3 class='text-center m-4'>Invalid Infomation... Try Again with Valid Information.</h3><form action='dashboard.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
        }
		
		}
		else
		{
			echo "<h3 class='text-center m-4'>No book for Return</h3><form action='dashboard.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
		}
		
		
		$conn->close();
		
		?>
             </div>   
          </div>
        </div>
          
      </div>
      
</body>
</html>