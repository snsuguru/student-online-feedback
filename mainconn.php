<?php
$first = $_POST['first'];
$last = $_POST['last'];
$branch = $_POST['branch'];
$subname = $_POST['subname'];
$subcode = $_POST['subcode'];
$one = $_POST['1'];
$two = $_POST['2'];
$three = $_POST['3'];
$four = $_POST['4'];
$five = $_POST['5'];
$six = $_POST['6'];

if (!empty($first) || !empty($last) || !empty($branch) || !empty($subname) || !empty($subcode) || !empty($one) || !empty($two) || !empty($three) || !empty($four) || !empty($five) || !empty($six)) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "fsd_project";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
     if (mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
     } else {
        $INSERT = "INSERT Into main (first, last, branch, subname, subcode, one, two, three, four, five, six) values(?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssssiiiiii", $first, $last, $branch, $subname, $subcode, $one, $two, $three, $four, $five, $six);
        $stmt->execute();
        echo '<script>
            window.location.href = "main.php";
            alert("Feedback given successfully")
        </script>';
     }
}
?>