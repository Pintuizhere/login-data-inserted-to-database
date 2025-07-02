<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: black;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.2);
            display: inline-block;
        }

        h1 {
            color: white;
            margin-bottom: 30px;
        }

        input {
            margin: 8px 0;
            padding: 8px;
            width: 80%;
        }

        button {
            padding: 10px 20px;
            margin-top: 10px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

     
    </style>    
</head>
<body>

    <div class="container">
        <h1>Login Page</h1>

        <form action="" method="POST">
            Name<br>
            <input type="text" name="name" required><br><br>

            Email<br>
            <input type="text" name="email" required><br><br>

            Password<br>
            <input type="password" name="password" required><br><br>
            
            <button type="submit" name="sb" onclick="alert('✅ Data inserted successfully!')">Submit</button>
        </form>

        
        <?php
            $con = mysqli_connect('localhost', 'root', '', 'mydb');

            if (isset($_POST['sb'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $query = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
                $execute = mysqli_query($con, $query);
               

            }
        ?>
    
    </div>

</body>
</html>
