<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    h2 {
        text-align: center;
    }

    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: white;
    }

    th, td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        text-align: left;
        border-right: 1px solid #ddd; /* Vertical lines */
    }

    th {
        background-color: orange;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Remove right border from last cell in each row */
    tr td:last-child {
        border-right: none;
    }
</style>
</head>

    <!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-11">
  
          <div class="card" style="margin-left: 300px;">
            <div class="card-body">
  
  
              <!-- Default Table -->
<body>
    <h2>USER REGISTERATION</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Register ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Password</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
    </body>
</html>
  
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
                    <td><?php echo $row['Phone'] ?></td>
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

     
   
                       
                   
                  
                     
                     
                     
                     
                       
                     