<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
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
    <div  class="background " style="margin-top: -2%; ">
      <div class="container h-100 ">
        <div class="row align-items-center h-100" >
            
            
          <div class="col-8 mx-auto" style="margin-top: -30%;">

                <div class="shadow-lg bg-dark mt-4">
                    <div class="col form-header text-white text-center p-3" style="background:black;">
                        Add Books
                    </div>
                    <form action="add-books-action.php" method="get">
                        <div class="form-group mx-4 mt-4">
                            <input type="text" required name="bookname" class="form-control" placeholder="Enter the book name">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="text" required name="bookid" class="form-control" placeholder="Enter Book-ID">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="text" required name="autname" class="form-control" placeholder="Enter the Author name">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="text" required name="pub" class="form-control" placeholder="Enter publisher of books">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <input type="number" required name="qty" class="form-control" placeholder="Enter quantity">
                        </div>
                        <button type="submit" class=" login-btn " style="
                                    background-color: green;
                                    display: inline-block;
                                    border-radius: 30px;
                                    transition: 0.5s;
                                    font-weight: 600;
                                    font-size: 20px;
                                    width: 257px;
                                    height: 45px;
                                    margin-left: 33%;    margin-bottom: 16px;">Add Books</button>
                    </form>
                </div>
                
          </div>
        </div>
    </div>    
      </div>
</body>
</html>