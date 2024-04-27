<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            background: linear-gradient(to top left, black 0%, #f35525 100%);
            display: flex;
            min-height: 100vh;
        }
        .navbar {
            background-color: black;
            color: #fff;
            width: 200px;
            padding: 10px;
            overflow-y: auto;
        }
        .navbar-header {
            padding: 10px;
            text-align: center;
        }
        .navbar-header img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .navbar a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 15px 0;
        }
        .navbar a:hover {
            background-color: #555;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        .nav1{
            background-color: black;
            color: #fff;
       font-family: calibri;
       padding-right: 15px;
       padding-left: 15px;
        }
        li{
            list-style: none;
            display: inline-block;
        }
        li a{
            color: white;
            font-size: 18px;
            font-weight: bold;
            margin-right: 30px;

        }
        .nav1div
        {
            display: flex;
            align-items: left;
            justify-content: center;
            margin-left:900px;
        }

        .nav1 .logout-btn:hover{
            background:#4d3831 ;
        }
        .nav1 .logout-btn {
            margin-left: 10px;
            background-color: #f35525;
            color: #fff;
            border-radius: 5px;
            padding: 8px 15px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav class="nav1">
        <div class="nav1div">
            
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="logout.php" class="logout-btn">Logout</a></li>
                  <!-- <li><a href="property-details.html">Property Details</a></li> -->
                  
                </ul>
             
                <!-- ***** Menu End ***** -->
            
            </div>
            </nav>
    <div class="container">
        <div class="navbar">
            <img style="margin-left:66px;" src="icons8-authentication-48.png" alt="User Icon">
            <div class="navbar-header">
                
                
            </div>
<<<<<<< HEAD
            <a href="notice.php">Notice</a>
            <a href="complaint.php">Complaints</a>
            <a href="payment.php">Payments</a>
            <a href="payment3.php">Payment History</a>
=======
            <a href="notice.html">Notice</a>
            <a href="complaint.html">Complaints</a>
            <a href="payment.html">Payments</a>
>>>>>>> 739d51d453168dd521c943b710a88b57a78d1e65
        </div>
        <div class="content">
            <!-- Content area where you can add specific content for each section -->
            <h2>Welcome to Your Dashboard</h2>
            <p>This is where you can manage notices, file complaints, and view/payments.</p>
        </div>
    </div>
  
                    <?php
                    if (isset($_SESSION['id'])) {
                    ?>
                        <li><a href="#Blog"><?php echo $_SESSION['fname'] ?></a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php } else { ?>
                        <a href="login.php">
                            <i class="fas fa-user icon"></i>
                        </a>
                    <?php } ?>
                  
</body>
</html>
