<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vender/css/all.css">
</head>
<body style="    background: blanchedalmond;">
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
      
      <div class="container ">
        <div style="margin-top: 13%;">
          <div class="row my-4">
              <div class="col-sm">
                <button class="btn btn-block p-3" id="action-btn" onclick="location.href='add-books.php'">
                    <i class="far fa-plus-square pr-3"></i> Add Books
                </button>
              </div>
              <div class="col-sm">
                <button class="btn btn-block  p-3" id="action-btn"  onclick="location.href='view-books.php'">
                    <i class="fas fa-stream pr-3"></i> All Books
                </button>
            </div>
              
          </div>
          <div class="row my-4">
            
          <div class="col-sm">
              <button class="btn btn-block  p-3" id="action-btn" onclick="location.href='issue-book.php'">
                <i class="fas fa-book pr-3"></i> Issue Books
              </button>
            </div> 
            
            <div class="col-sm">
              <button class="btn btn-block  p-3" id="action-btn" onclick="location.href='return-books.php'">
                <i class="fas fa-book pr-3"></i> Return Books
              </button>
          </div>
          
            
          </div>
          <div class="row my-4">
          <div class="col-sm">
                <button class="btn btn-block  p-3" id="action-btn" onclick="location.href='search-books.php'">
                    <i class="fas fa-search pr-3"></i> Search
                </button>
            </div>
          <div class="col-sm">
              <button class="btn btn-block  p-3" id="action-btn" onclick="location.href='add-admin.php'">
                <i class="fas fa-user-shield pr-3"></i> Admin
              </button>
          </div>
      </div>
        </div>
       </div>   




          <!-- <div class="col-lg-6  ">
          
              <div class="buttonBox col-sm">
                <button class=" p-3" id="action-btn" onclick="location.href='add-books.php'">
                    <i class="far fa-plus-square pr-3"></i> Add Books
                </button>
              </div>
              <div class="buttonBox col-sm">
                <button class=" p-3" id="action-btn" onclick="location.href='search-books.php'">
                    <i class="fas fa-search pr-3"></i> Search
                </button>
            </div>
            <div class="buttonBox col-sm">
                <button class=" p-3" id="action-btn" onclick="location.href='view-books.php'">
                    <i class="fas fa-stream pr-3"></i> View Books
                </button>
            </div>
          
        </div>
        
          <div class="col-lg-6 ">
            <div class="buttonBox col-sm">
              <button class=" p-3" id="action-btn" onclick="location.href='issue-book.php'">
                <i class="fas fa-book pr-3"></i> Issue Books
              </button>
            </div>
            <div class="buttonBox col-sm">
              <button class=" p-3" id="action-btn" onclick="location.href='return-books.php'">
                <i class="fas fa-book pr-3"></i> Return Books
              </button>
          </div>
          <div class="buttonBox col-sm">
              <button class=" p-3" id="action-btn" onclick="location.href='add-admin.php'">
                <i class="fas fa-user-shield pr-3"></i> Admin
              </button>
          </div>
        </div> -->
      
      
      
</body>
</html>