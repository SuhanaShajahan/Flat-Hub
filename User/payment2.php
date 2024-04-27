<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Form</title>
<style>
    body {
            background: linear-gradient(to top left, white 0%, #f35525 100%);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
    .form-container {
        max-width: 400px;
        margin: 20px auto;
        padding: 50px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.9); /* Light white background */
        border-radius: 3%;
    }
    .form-group {
        margin-bottom: 15px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #1c521a; 
    }
    .navbar {
        background-color: black;
        overflow: hidden;
        text-align: center;
        height:130px;
    }

    .navbar a {
        display: inline-block;
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
</head>
<body>
    <div class="navbar">
        <h1>Payment</h1>
        <ul>
          <li><a href="payment.php">Home</a></li>
          
      </ul>
    </div>
<h2 style="margin-top:40px;"><center>Debit-Card Payment</center></h2>
<div class="form-container">
    <form>
        <div class="form-group">
            <label for="totalAmount">Total Amount:</label>
            <input type="text" id="totalAmount" name="totalAmount" readonly value="$100">
        </div>
        <div class="form-group">
            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter card number" required>
        </div>
        <div class="form-group">
            <label for="cardHolder">Card Holder:</label>
            <input type="text" id="cardHolder" name="cardHolder" placeholder="Enter card holder name" required>
        </div>
        <div class="form-group">
            <label for="expiryDate">Expiry Date:</label>
            <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>
        </div>
        <div class="form-group">
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Proceed to Payment">
        </div>
    </form>
</div>

</body>
</html>
