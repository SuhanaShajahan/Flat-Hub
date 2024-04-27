<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Notice Board</title>
<style>
  body {
    text-align: center;
    font-size: 24px;
    background: linear-gradient(to top left, #ffffff 0%, #f35525 100%);
    min-height: 100vh; /* Set minimum height to full viewport height */
   
  }
  #noticeContent {
    width: 647px;
    height: 100px; /* Set fixed height to 100px */
    resize: none; /* Disable resizing */
  }
  
  .notice {
    margin-bottom: 20px;
  }
  #adminPanel {
    margin-top: 20px;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
    height:300px;
  }
  #adminPanel input,
  #adminPanel button {
    display: block;
    margin: 10px auto;
    width: 80%;
    height: 30px;
  }

    
  .navbar {
        background-color: black;
        overflow: hidden;
        text-align: center;
        height:130px;
        width:100%;
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

    .navbar h2 {
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
            font-size: 20px;
        }

        .navbar ul li a:hover {
            text-decoration: underline;
        }
        .notice_content{
          height: 119px;
    width: 709px;

        }
        .btn{
          width: 10px;
    background-color: black;
    color: white;
    cursor: pointer;
    border-radius: 6px;
    height: 50px;
  }
  .btn:hover {
    background-color: rgb(49, 51, 49);
  }
</style>
</head>
<body>
  <div class="navbar">
    <h2>Notice</h2>
    <ul>
      <li><a href="inner.php">Home</a></li>
      <li><a href="viewnotice.php">View_notice</a></li>
  </ul>
</div>
  
  <!-- Admin Panel -->
  <div id="adminPanel">
   
    <form id="noticeForm" action="noticeact.php" method="POST">
      <label for="notice_title">Notice Title:</label>
      <input type="text" id="notice_title" name="notice_title" required>
      
      <label for="notice_content">Notice Content:</label>
      <textarea class="notice_content" name="notice_content" rows="4" required></textarea>
      <input class="btn" type="submit" value="Add Notice" name="submit">
    </form>
  </div>

  <script>
    
      
      // Clear form fields
      document.getElementById('noticeForm').reset();
  </script>
</body>
</html>