<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Book</title>
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
            
            
          <div class="col-8 mx-auto" style="margin-top: -12%; background:aliceblue">

                <div class="shadow-lg bg-white mt-4">
                    <div class="col form-header text-center p-3">
                        Issue Book
                    </div>
                    <form action="issue-book-action.php" method="get">
                        <div class="form-group mx-4 mt-4">
                            <input type="text" required name="studentid" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="text" required name="phoneid"  maxlength="10" class="form-control" placeholder="phone no">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="text" required name="bookid" class="form-control" placeholder="Book ID">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <label for="lastDateToSubmit">Last Date to Return</label>
                            <input type="date" id="lastDateToSubmit" name="date" class="form-control" placeholder="Book ID">
                        </div>
                        <button type="submit" class="btn login-btn btn-block my-4"style="    background-color: darkblue; " >Issue Book</button>
                    </form>
                </div>
                
          </div>
        </div>
          
      </div>
</body>
</html>