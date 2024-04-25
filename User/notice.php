<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
    <style>
        body {
            background: linear-gradient(to top left, white 0%, #f35525 100%);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
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
            margin-top: -10px; /* Adjusted margin to align with heading */
            margin-right: 10px;
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
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
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
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Notice</h1>
        
        <table>
            <thead>
                <tr>
                    <th>SI No</th>
                    <th>Notice Title</th>
                    <th>Notice Content</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                </tr>
                <!-- Additional rows can be added here -->
            </tbody>
        </table>
    </div>
</body>
</html>
