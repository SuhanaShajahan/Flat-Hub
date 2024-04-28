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
    height:100%;
  }
  #adminPanel input,
  #adminPanel button {
    display: block;
    margin: 10px auto;
    width: 80%;
    height: 30px;
  }
  #adminPanel button {
    width: 140px;
    background-color: black;
    color: white;
    cursor: pointer;
    border-radius: 6px;
    height: 38px;
  }
  #adminPanel button:hover {
    background-color: rgb(49, 51, 49);
  }
</style>
</head>
<body>
  <h1>Notice Board</h1>
  
  
  <!-- Admin Panel -->
  <div id="adminPanel">
   
    <form id="noticeForm" action="noticeact.php" method="POST" >
      <label for="notice_title">Notice Title:</label>
      <input type="text" id="notice_title" name="notice_title" required >
      
      <label for="notice_content">Notice Content:</label>
      <textarea id="notice_content" name="notice_content" rows="4" required ></textarea>
      <input type="submit" value="Add Notice" name="submit">
    </form>
  </div>

  <script>
    
      
      // Clear form fields
      document.getElementById('noticeForm').reset();
  </script>
</body>
</html>