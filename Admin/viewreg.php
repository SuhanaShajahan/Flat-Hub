<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Register</title>
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
</style>
</head>
<body>
    <div class="navbar">
        <h1>User Registration</h1>
        <a href="adminhome.php"><u>Home</u></a>
    </div>
    <table>
        <tr>
            <th>Register ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Password</th>
            <th>Delete</th>
            </tr><tbody>
       <?php include("config.php");

                $query = "SELECT * FROM `tbl_register`";
                $book = mysqli_query($con, $query);
                while ($row = mysqli_fetch_array($book)) {


                ?>


                  <tr>
                  <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                  



                    <?php
                    echo "<td> <a href='deletereg.php?id=" . $row['id'] . "'><button class='btn btn-danger'>Delete</button></a></td>";
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

                       
                   
                  
                     
                     
                     
                     
                       
                     