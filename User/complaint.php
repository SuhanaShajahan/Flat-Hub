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
  </style>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
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

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@company.com</li>
            <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h1>FlatHub</h1>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="appartment.html">Appartment</a></li>
              <!-- <li><a href="property-details.html">Property Details</a></li> -->
              <li><a href="contact.html" class="active">Contact Us</a></li>
              <!-- <li><a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a></li> -->
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <div class="mainform">
    <form id="complaintForm">


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
        <label for="fname"><b>Resident Name:</b></label>
        <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname">
      </div>

      <br>

      <div class="form-group">
        <label for="lname"><b>Apartment number:</b></label>
        <input type="text" class="form-control" id="lname" placeholder="Enter apartment" name="lname">
      </div>

      <br>

      <!-- Phone number-->

      <div class="form-group">
        <label for="phoneNo"> <b>Phone Number: </b> </label>
        <input type="text" id="phone" class="form-control" placeholder="Enter phone Number" name="phoneNo">
      </div>

      <br>
      <div class="form-group">
        <label for="email"> <b>Email Address: </b> </label>
        <input type="text" id="address" class="form-control" placeholder="Enter email" name="phoneNo">
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
      <textarea id="subject" name="subject" placeholder="Enter your complaint details......." style="height:200px"></textarea>


      <!--Submit Button-->
      <button style="margin-top: 20px;" type="button" class="btn btn-outline-primary" >Submit</button>


    </form>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 Villa Agency Co., Ltd. All rights reserved.

          <a rel="nofollow" href="https://templatemo.com" target="_blank"></a> : <a href="https://themewagon.com"></a></p>
      </div>
    </div>
  </footer>

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
