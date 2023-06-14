<?php
    // Include auth_session.php file on all user panel pages
    include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client Area</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: black;
            font-family: Arial, sans-serif;
        }

        .form {
            width: 400px;
            padding: 30px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fade-in 0.5s ease-in-out;
        }

        @keyframes fade-in {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="form">
        <h2 style="color: crimson;">Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <p style="color: crimson;"><strong> To our Website ScriptLabs where you can but evreything to your laptops. </strong> </p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
