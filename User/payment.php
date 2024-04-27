
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment</title>
<style>
    html, body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(to top left, white 0%, #f35525 100%);
        height: 100%;
    }

    h1 {
        text-align: center;
        margin: 35px;
    }

    table {
        width: 80%;
        margin: 55px auto;
        border-collapse: separate;
        border-spacing: 0 8px; /* Adjust the spacing between rows */
        background-color: white;
    }

    th, td {
        padding: 20px;
        border-bottom: 1px solid #ddd; /* Add horizontal lines between rows */
        text-align: left;
        border-right: 1px solid #ddd; /* Add vertical lines between columns */
    }

    th {
        background-color: rgb(3, 3, 3);
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Remove right border from last cell in each row */
    tr td:last-child {
        border-right: none;
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
          <li><a href="inner.php">Home</a></li>
          <li><a href="notice.php">Notice</a></li>
          <li><a href="complaints.php">Complaints</a></li>
      </ul>
    </div>
    <table>
        <tr>
       
        <th>  Resident ID</th>
            <th>Month</th>
            <th>Amount</th>
            <th>Proceed</th>
      
            </tr><tbody>
       <?php include("config.php");

                $query = "SELECT * FROM `tbl_electricity`";
                $book = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($book)) {


                ?>


                  <tr>
             
                  <td><?php echo $row['residentid'] ?></td>
                    <td><?php echo $row['month'] ?></td>
                    <td><?php echo $row['amount'] ?></td>
           

                    <?php
<<<<<<< HEAD
                    echo "<td> <a href='payment2.php?id=" . $row['residentid'] . "'><button class='btn btn-danger'>Pay</button></a></td>";
=======
                   
>>>>>>> 739d51d453168dd521c943b710a88b57a78d1e65
                    ?>
                  </tr>
                <?php   } ?>
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
        </div>
      </div>
    </div>
  </section>
    </table>
  
    

    

  
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

                       
                   
                  
                     
                     
                     
                     
                       
                     