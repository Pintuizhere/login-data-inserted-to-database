<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 80%;
            background-color: white;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #333;
            color: white;
        }

        h1 {
            margin-bottom: 30px;
        }
        a{
            color: red;
            cursor: pointer;
        }
    </style>

    <!-- Load Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Registered Users</h1>
    <a href="./login.php" style="text-decoration: none; color: blue;">Login</a>



    <?php
        // Database connection
        $con = mysqli_connect('localhost', 'root', '', 'mydb');

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch all users
        $query = "SELECT * FROM user";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr><th>Name</th><th>Email</th><th>Password</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No users found.";
        }

        mysqli_close($con);
    ?>
</body>
</html>
