<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Success</title>
<style>
    html, body {
        background: linear-gradient(to top left, white 0%, #f35525 100%);
        font-family: Arial, sans-serif;
        height:100%;
        width:100%;
        margin: 0; /* Remove default margin */
        padding: 0; /* Remove default padding */
    }
    .container {
        max-width: 600px;
        margin: 50px auto;
        text-align: center;
        background-color: rgba(255, 255, 255, 0.9); 
        padding: 20px;
        border-radius: 10px;
    }
    .success-message {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .confirmation-text {
        font-size: 18px;
        margin-bottom: 30px;
    }
    .back-to-home {
        display: inline-block;
        padding: 10px 20px;
        color: blue;
        text-decoration: none;
        border-radius: 5px;
        background-color: #fff;
    }
    .back-to-home:hover {
        background-color: #e0e0e0; /* Light gray background on hover */
    }
</style>
</head>
<body>

<div class="container">
    <h1>Payment Success</h1>
    <h3>Your last payment was successful</h3>
    <a href="inner.html" class="back-to-home"><u>Go back to Home</u></a>
</div>

</body>
</html>
