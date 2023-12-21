<?php
require 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"]; 
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tbl_user
            WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn,$query_sql);

if (mysqli_num_rows($result) > 0){
    header("Location: Mainpage/index.html");
}else{
    echo "<div style='text-align: center; margin-top: 20%; background-color: #a89b9b; padding: 20px;'>
    <center><h1>Username or Password incorrect, please try again</h1>
    <button><strong><a href='loginmain.php'>Retry</a></strong></button></center>";
}
}
?>