<?php
    session_start();
    if (isset($_SESSION["SESSION_EMAIL"])) {
        header("Location: welcome.php");
    }

    if (isset($_POST["login"])) {
        include 'config.php';
        
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

        $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['login_limits'] === $row['limit_used'] || $row['login_limits'] < $row['limit_used']) {
                echo "<script>alert('Your login limits are not enough.');</script>";
            }else {
                $x = $row["limit_used"] + 1;
                mysqli_query($conn, "UPDATE users SET limit_used='{$x}' WHERE email='{$email}'");

                $_SESSION["SESSION_EMAIL"] = $email;
                header("Location: welcome.php");
            }
        }else {
            echo "<script>alert('Your Login details is incorrect.');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Create Login Limits PHP Script</title>
</head>
<body>
    <div class="wrapper">
        <h2 class="title">Login</h2>
        <form action="" method="post" class="form">
            <div class="input-field">
                <label for="email" class="input-label">Email</label>
                <input type="email" name="email" id="email" class="input" placeholder="Enter your email" required>
            </div>
            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="password" id="password" class="input" placeholder="Enter your password" required>
            </div>
            <button class="btn" name="login">Login</button>
            <p>Create Account! <a href="register.php">Register</a>.</p>
        </form>
    </div>
</body>
</html>