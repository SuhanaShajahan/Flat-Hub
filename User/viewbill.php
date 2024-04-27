<?php
include("header.php");
include("config.php");
$user_id = $_SESSION['userid'];
$order_id = $_GET['oid'];

$sql = mysqli_query($con, "SELECT * FROM tbl_order WHERE id = $order_id ");
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
    <h1>Order ID: <?php echo $row['id'] ?></h1><br><br>


    <div class="container">
        <div class="details">
            <div class="a5">
                <?php $sql2 = mysqli_query($con, "SELECT * FROM tbl_orderitems WHERE order_id = $order_id ");
                while ($rows = mysqli_fetch_array($sql2)) {
                    $sql3 = mysqli_query($con, "SELECT * FROM tbl_books WHERE book_id = {$rows['p_id']}");
                    $pro = mysqli_fetch_array($sql3); ?>
                    <div class="product">
                        <div class="flex">
                            <img src="../Admin/img/Bookimg/<?php echo $pro['image']; ?>" alt="Image">
                        </div>
                        <div class="flex2">
                            <div>Product Name: <?php echo $pro['book_name']; ?> </div>
                            <div>Quantity: <?php echo $rows['quantity']; ?></div>
                            <div>Price: <?php echo $rows['price']; ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="other">
                <div>Name: &nbsp; <?php echo $row['name']; ?> </div>
                <div>Email:&nbsp; <?php echo $row['email']; ?> </div>
                <div>Phone: &nbsp; <?php echo $row['phone']; ?> </div>
                <div>Address:&nbsp; <?php echo $row['address']; ?> </div>
                <div>Pincode: &nbsp; <?php echo $row['pincode']; ?> </div>
                <br>
                <div>Order Status:&nbsp; <?php echo $row['order_status']; ?> </div>
                <div>Payment Status: &nbsp; <?php echo $row['payment_status']; ?> </div>
                <br>
                <div>Total Price: &nbsp; <?php echo $row['price']; ?> </div>

            </div>
        </div>
    </div>







</section>
</body>

</html>