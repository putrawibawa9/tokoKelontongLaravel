<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .register-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .register-container input[type="text"],
        .register-container input[type="password"],
        .register-container input[type="email"],
        .register-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .register-container input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .register-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Register Admin</h2>
    <form action="/registerAdmin" method="post">
        @csrf
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Register">
    </form>
</div>

</body>
</html>
