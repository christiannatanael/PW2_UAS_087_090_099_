<?php
require 'koneksi.php';
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tbl_user (username, email, password)
            VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $query_sql)){
    header("Location: loginmain.php");
} else {
    echo "pendaftaran gagal : " . mysqli_error($conn);
}

?>