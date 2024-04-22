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
            min-height: 0vh;
        }

        .nav1{
            background-color: black;
            color: #fff;
       font-family: calibri;
       padding-right: 15px;
       padding-left: 15px;
        }
        .nav1div
        {
            display: flex;
            align-items: left;
            justify-content: center;
        }
        li{
            list-style: none;
            display: inline-block;
        }
        li a{
color: white;
font-size: 18px;
font-weight: bold;
margin-right: 25px;

        }
        .navbar {
            background-color: black;
            color: #fff;
            width: 200px;
            padding: 10px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100vh;
        }
        .navbar-header {
            padding: 10px;
            text-align: center;
        }
        .navbar-header img {
            width: 35px;
            height: 35px;
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
        .logout {
            margin-top: auto;
            margin-bottom: 10px; /* Adjusted margin */
        }
    </style>
</head>

  <body>
<nav class="nav1">
    <div class="nav1div">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="appartment.html">Appartment</a></li>
              <!-- <li><a href="property-details.html">Property Details</a></li> -->
              <li><a href="contact.html" class="active">Contact Us</a></li>
              <!-- <li><a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a></li> -->
            </ul>
         
            <!-- ***** Menu End ***** -->
        
        </div>
        </nav>
  
    <div class="container">
        <div class="navbar">
            <div class="navbar-header">
                <img src="icons8-authentication-48.png" alt="User Icon">
                <p>Welcome, John Doe</p>
            </div>
            <a href="#">Notice</a>
            <a href="complaint.html">Complaints</a>
            <a href="#">Payments</a>
            <a href="#" class="logout">Logout</a>
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
