<?php
?>
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
    
</style>
</head>
<body>
<h2 style="margin-top:40px;"><center>Debit-Card Payment</center></h2>
<div class="form-container">
    <form action="success.php" method="POST">
        <div class="form-group">
            <label for="amount">Total Amount:</label>
            <input type="text" id="price" name="amount" readonly value=" <?php echo $row['amount'] ?> ">
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
        <?php include("config.php");

$query = "SELECT * FROM `tbl_electricity`";
$book = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($book)) {


?>


  <tr>

    <td><?php echo $row['amount'] ?></td>
    
    
      


    <?php
    
    ?>

<?php   } ?>

<!-- End Default Table Example -->

</form>
</div>

</body>
</html>

<script>
document.addEventListener("DOMContentLoaded", function() {
const searchInput = document.getElementById("user-search");
const userTableRows = document.querySelectorAll("table.table tbody tr");

searchInput.addEventListener("input", function() {
const query = searchInput.value.toLowerCase();

userTableRows.forEach((row) => {
const name = row.querySelector("td:nth-child(1)").textContent.toLowerCase();
const email = row.querySelector("td:nth-child(2)").textContent.toLowerCase();

if (name.includes(query) || email.includes(query)) {
row.style.display = "table-row";
} else {
row.style.display = "none";
}
});
});
});
</script>

       
   
  
     
    </form>
</div>

</body>
</html>
