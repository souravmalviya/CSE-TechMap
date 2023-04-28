<?php
    session_start();
    if (isset($_SESSION["SESSION_EMAIL"])) {
        header("Location: welcome.php");
    }

    if (isset($_POST["submit"])) {
        include 'config.php';

        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
        $cpassword = mysqli_real_escape_string($conn, md5($_POST["cpassword"]));
        $limits = mysqli_real_escape_string($conn, $_POST["limits"]);
        $limit_used = 0;

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
            echo "<script>alert('{$email} - This email has already taken.');</script>";
        }else {
            if ($password === $cpassword) {
                $sql = "INSERT INTO users (name, email, password, login_limits, limit_used) VALUES ('{$name}', '{$email}', '{$password}', '{$limits}', '{$limit_used}')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    header("Location: index.php");
                }else {
                    echo "<script>Error: ".$sql.mysqli_error($conn)."</script>";
                }
            }else {
                echo "<script>alert('Password and confirm password do not match.');</script>";
            }
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
        <h2 class="title">Register</h2>
        <form action="" method="post" class="form">
            <div class="input-field">
                <label for="name" class="input-label">Full Name</label>
                <input type="name" name="name" id="name" class="input" placeholder="Enter your full name" required>
            </div>
            <div class="input-field">
                <label for="email" class="input-label">Email</label>
                <input type="email" name="email" id="email" class="input" placeholder="Enter your email" required>
            </div>
            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="password" id="password" class="input" placeholder="Enter your password" required>
            </div>
            <div class="input-field">
                <label for="cpassword" class="input-label">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword" class="input" placeholder="Enter your confirm password" required>
            </div>
            <div class="input-field">
                <label for="limit" class="input-label">Login Limit</label>
                <select id="limit" name="limits" class="input" required>
                    <option value="" disabled selected>Select Limit</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <button class="btn" name="submit">Register</button>
            <p>You have already an account! <a href="index.php">Login</a>.</p>
        </form>
    </div>
</body>
</html>