<?php
include("config.php");
$residentid = $_GET['residentid'];


$sql = mysqli_query($con, "SELECT * FROM tbl_electricity WHERE id = $residentid ");
$row = mysqli_fetch_array($sql);

?>
<style>
  

    h1 {
        color: black;
    }

    .a1 {
        margin-top: 100px;
        margin-left: 100px;
        margin-right: 100px;
        color: black;
    }

    body {
        background-color: #222;
    }

    .product {
        display: flex;
        margin-bottom: 20px;
    }

    .product div {
        margin-top: 10px;
    }

    .product img {
        width: 150px;
        margin-right: 10px;
        height: auto;
        border: 3px solid grey;

    }

    .other {
        border: 1px solid grey;
        border-radius: 10px;
        padding: 20px;
    }

    .other div {
        margin-top: 10px;

    }

    .a5 {
        display: flex;
        flex-wrap: wrap;
        gap: 50px;
    }
</style>



<section class="a1">
    <h1>Resident ID: <?php echo $row['residentid'] ?></h1><br><br>

    <?php

    $query = "SELECT * FROM `tbl_electricity`";
                $book = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($book)) 
              
                
                ?>


            <div class="other">
                <div>ID: &nbsp; <?php echo $row['residentid']; ?> </div>
                <div>month:&nbsp; <?php echo $row['month']; ?> </div>
                <div>amount: &nbsp; <?php echo $row['amount']; ?> </div>
                <br>
                <div>Order Status:&nbsp; <?php echo $row['bill_sts']; ?> </div>
                <div>Payment Status: &nbsp; <?php echo $row['payment_sts']; ?> </div>
                <br>
                

            </div>
        </div>
    </div>







</section>
</body>

</html>