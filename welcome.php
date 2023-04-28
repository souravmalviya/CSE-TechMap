<?php
    session_start();
    if (!isset($_SESSION["SESSION_EMAIL"])) {
        header("Location: index.php");
    }
    include 'config.php';
?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style3.css">
   
    <title>Home page</title>
</head>

<body>
    
    <header class="showcase">
        <div class="container showcase-inner">
            <h1>CSE TechMap</h1>
            <p>Considering online learning mode we have come to a conclusion that students are not able to get sufficient
                information due to a lot of sources available with different variables. Therefore, we have taken an initiative to
                 create a suitable webpage for the same. The page contains information about CSE and the best part is everything 
                 is provided in one place to get easy access.</p>
            
            <div class="wrapper">
        <?php
            $sql = "SELECT * FROM users WHERE email='{$_SESSION["SESSION_EMAIL"]}'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        ?>
        <br></br>
        <h2>Welcome, <?php echo $row["name"]; ?> <span class="form"></span></h2>
        <?php } ?>
        
        <a href="Main.php" class="btn">ENTER</a>
        </div>
    </header>
</body>

</html>
