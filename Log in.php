<?php
$conn = mysqli_connect("localhost", "root", "", "log in");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM faculty WHERE username = '$username' AND password = '$password'";
$stmt = mysqli_prepare($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: welcome.html");
    exit();
} else {
    echo "Login failed!";

}

mysqli_close($conn);x
?>
