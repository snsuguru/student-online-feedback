<?php
    include("loginconn.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Student Feedback Portal | CMRIT</title>
        <link rel="stylesheet" href="style1.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="nav">
            <div class="lick">
                <a href="https://www.cmrit.ac.in/" target="_blank">CMRIT</a>
            </div>
            <div class="new_user">
                <label>Student Feedback Portal</label>
                <a href="#">Login</a>
            </div>
        </div>
        <div class="login">
        <div class="form">
            <div class="text">
                <p>Your Feedback MATTERS!</p>
            </div>
            <div class="text1"> 
                <p>Login to continue</p>
            </div>
            <form action="loginlogic.php" method="POST">
            <div class="input_area">
                <i class='bx bxs-user'></i><input type="text" placeholder="USN" name="usn" required>
            </div>
            <div class="input_area">
                <i class='bx bxs-lock-alt'></i><input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="btn">
                <button type="submit" name="submit">LOGIN</button>
            </div>
            </form>
        </div>
        </div>
    </body>
</html>