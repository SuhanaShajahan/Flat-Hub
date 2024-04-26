<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bookings</title>
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
        margin:35px;
    }

    table {
        width: 80%;
        margin: 55px auto;
        border-collapse: collapse;
        background-color: white;
    }

    th, td {
        padding: 20px;
        border-bottom: 1px solid #ddd;
        text-align: left;
        border-right: 1px solid #ddd; /* Vertical lines */
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
        <h1>Contacts</h1>
        <a href="adminhome.html"><u>Home</u></a>
    </div>
   
    <table>
        <tr>
            <th>Full Name</th>
            <th>Email Address</th>
            <th style="width: 200px;">Subject</th>
            <th style="width: 200px;">Message</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>
