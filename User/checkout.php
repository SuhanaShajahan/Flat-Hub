<?php
session_start();
include("config.php");
if(isset($_SESSION['id'])){
    $user_id = $_SESSION['id'];
    
    // Execute the SQL query to fetch the amount
    $sql = mysqli_query($con,"SELECT amount FROM tbl_electricity WHERE id = $user_id ");  
    
    // Check if the query was successful and if it returned any rows
    if($sql && mysqli_num_rows($sql) > 0) {
        // Fetch the row from the result set
        $rowprice = mysqli_fetch_array($sql);
    } else {
        // Set $rowprice to a default value or handle the case where no data is found
        $rowprice = array('amount' => 0); // Set a default value
    }
} else {
    // Handle the case where the session variable is not set
    $rowprice = array('amount' => 0); // Set a default value
}
?>
    <style>
.a1{
            margin-top: 100px;
            margin-left: 100px;
            margin-right: 100px;
        }

        body {
            background-color: #333;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: black;
            text-align: center;
        }

        .checkout-form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .checkout-field {
            width: 48%;
            margin-bottom: 20px;
        }

        .checkout-field label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .checkout-field input[type="text"],
        .checkout-field input[type="number"],
        .checkout-field select {
            width: 100%;
            padding: 10px;
            border: 1px solid #555;
            border-radius: 5px;
            background-color: #444;
            color: #fff;
        }

        .checkout-field select {
            background-color: #555;
        }

        .checkout-button {
            background-color: orangered;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .checkout-button:hover {
            background-color: red;
        }


        
    </style>
</head>
<body>
<section class="a1">
    <div class="container">
        <h1>Checkout</h1><br>
        <form class="checkout-form" method="post" action="checkoutaction.php">
        <div class="checkout-field">
                <label for="residentid" style="color: black;">Resident ID</label>
                <input type="text" id="residentid" name="residentid" required pattern="[a-zA-Z]*">
            </div>
            <div class="checkout-field">
                <label for="name" style="color: black;">Name</label>
                <input type="text" id="name" name="name" required pattern="[a-zA-Z]*">
            </div>
            <div class="checkout-field">
                <label for="email" style="color: black;">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="checkout-field">
                <label for="phno" style="color: black;">Phone Number</label>
                <input type="text" id="phno" name="phno" required pattern="[0-9]{10}">
            </div>
            <div class="checkout-field">
                <label for="address" style="color: black;">Address</label>
                <input type="text" id="address" name="address" required pattern="[a-zA-Z]*[a-zA-Z]">
            </div>
            
            <div class="checkout-field">
                <label for="pin" style="color: black;">Pin Code</label>
                <input type="text" id="pin" name="pin" required pattern="[0-9]{6}">
            </div>
            <div class="checkout-field">
                <label for="payment-method" style="color: black;">Total Amount</label>
                <input type="text" id="price" name="totalprice" readonly value="<?php echo $rowprice['amount'] ?>">
            </div>
           
            <div class="checkout-field">
                <button class="checkout-button" type="submit">Continue</button>
            </div>
        </form>
    </div>
</section>
</body>
</html>
