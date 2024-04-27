<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <title>Complaint Form of projectt</title>
  <style>
    .mainform {
      margin: 50px 230px 50px 230px;
      padding: 2rem;
      border: 1px solid rgb(224, 224, 224);
      border-radius: 15px;
      box-shadow: 10px 7px 0 rgb(224, 224, 224);
      background-color: white;
      display: flex;
    }
    
    .header {
      font-size: 17px;
      font-family: candara;
      display: flex-end;
    }

    input[type=text],
    select,
    textarea {
      display: flex;
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    @media screen and (max-width: 680px) {
      .header,
      .mainform,
      input[type=submit] {
        margin: 0px 0px 0px 0px;

      }
    }
    .navbar{
      background-color: black;
    }
    .navbar a {
        display: inline-block; /* Make the link a block element to center it */
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        margin-top: 68px;
        margin-right: 1000px;
    }
    .navbar h1 {
        float: left;
        margin-left: 20px;
        color: white;
    }
    .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center; /* Align items vertically */
        }
        .navbar ul li {
            margin-left: 15px;
        }
        .navbar ul li a {
            text-decoration: none;
            color: white;
            margin-right: 20px;
        }

        .navbar ul li a:hover {
            text-decoration: underline;
        }
  
  </style>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  
  
  
  
  <!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
</head>

<body style="background: linear-gradient(to top left, #ffffff 0%, #f35525 100%);">

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  
  <!-- ***** Header Area Start ***** -->
  <div class="navbar">
    <h1>Complaints</h1>
    
    
    <ul>
      <li><a href="inner.php">Home</a></li>
      <li><a href="payment.php">Payments</a></li>
      <li><a href="notice.php">Notice</a></li>
  </ul>
    
</div>
  <div class="mainform">
    <form action="complaintact.php" method="POST">
      

      <!--Header-->

      <div class="header">
        <h1><b>Complaint Form</b></h1>
        <p>Please send us details about the incident you would like to report. Admin will analyze your complaint and take the appropriate measures
          in order that the reported situation will not occur at any other time in the future.</p>
        <hr />
      </div>



      <br><br>
      <!-- Name-->
    
      <div class="form-group">
        <label for=" residentname"><b>Resident Name:</b></label>
        <input type="text" class="form-control" id="subject"  name="residentname">
      </div>

      <br>

      <div class="form-group">
        <label for="appartmentno"><b>Apartment number:</b></label>
        <input type="text" class="form-control" id="subject" name="appartmentno" required>
      </div>

      <br>

      <!-- Phone number-->

      <div class="form-group">
        <label for="phoneno"> <b>Phone Number: </b> </label>
        <input type="text" class="form-control" id="subject" name="phoneno" pattern="[0-9]{10}" title="Enter 10 Digits" required>
      </div>

      <br>
      <div class="form-group">
        <label for="email"> <b>Email Address: </b> </label>
        <input type="text" id="email" class="form-control"  name="email">
      </div>

      <br>
      <!-- Select your area

      <label for="Select Your Area"><b>Select Your Area</b></label>
      <select id="area" name="area" >
        <option value="----">----</option>
        <option value="I.J Colony">I.J Colony</option>
        <option value="Defence Colony">Defence Colony</option>
        <option value="Dinga">Dinga</option>
        <option value="Gazi Colony">Gazi Colony</option>
        <option value="Naseera">Naseera</option>
        <option value="Tanveer Town">Tanveer Town</option>
      </select>

      <br>
      <br>
      Category of complaint

      <div id="formsection">
        <label><b>What is the category of complain you are facing?</b></label>

        <p><input type="checkbox" name="section" value="sports">Sports</p>
        <p><input type="checkbox" name="section" value="business">Business</p>
        <p><input type="checkbox" name="section" value="health">Health</p>

      </div>


      <br>-->
      <!-- Complaint Details-->

      <label for="subject"><b>Complaint Details:</b></label>
      <textarea id="subject" name="complaint" placeholder="Enter your complaint details......." style="height:200px"></textarea><br>


      <!--Submit Button-->
      <input type="submit" value="submit" name="submit">
    </form>
  </div>

 

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

 

</body>

</html>
