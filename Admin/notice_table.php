<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
    <style>
         html, body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to top left, white 0%, #f35525 100%);
            height: 100%;
        }
        .container {
            width: 80%;
            height: 500px;
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.9); /* Light white background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Shadow for the container */
        }
        h1 {
            text-align: center; /* Center align the heading */
        }
        .btn-new-notice {
            margin-bottom: 20px;
            float: right;
            margin-top: 13px; /* Adjusted margin to align with heading */
            margin-right: 80px;
            padding: 10px 12px;
            text-decoration: none;
            background-color: black;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 9px;
        }
        .btn-new-notice:hover {
            background-color: rgb(114, 95, 95); /* Darker color on hover */
        }
        table {
            width: 1000px;
            border-collapse: collapse;
            margin-top: 20px;
            margin-left: 70px;
            margin: 55px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 20px;
            text-align: center;
            background-color: #f2f2f2;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 6px 12px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 9px;
            transition: background-color 0.3s ease; /* Smooth transition */
        }
        .btn:hover {
            background-color: #476949; /* Darker color on hover */
        }
        .btn-delete {
            background-color: #f44336;
        }
        .btn-delete:hover {
            background-color: #5c302d;
        }
        .navbar {
        background-color: black; /* Changed to black */
        overflow: hidden;
        text-align: center; /* Center align the navbar content */
    }
    .navbar a {
        display: inline-block; /* Make the link a block element to center it */
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
            <h1>Notice</h1>
            <a href="#"><u>Home</u></a>
        </div>
        <a href="new_notice.php" class="btn-new-notice">New Notice</a>
        <table>
            <thead>
                <tr>
                    <th>SI No</th>
                    <th>Notice Title</th>
                    <th>Notice Content</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- Additional rows can be added here -->
            </tbody>
        </table>
    
</body>
</html>
