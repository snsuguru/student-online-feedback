<?php
    include("loginconn.php");
    if(isset($_POST['submit'])){
    $USN = $_POST['usn'];
    $password = $_POST['password'];

    $sql = "select * from login where USN = '$USN' and password ='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count==1){
        header("Location:main.php");
    }
    else {
        echo '<script>
            window.location.href = "login.php";
            alert("Login failed, Invalid USN or Password")
        </script>';
    }
    }
?>