<?php
include 'koneksi3.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Menampilkan nilai formulir
    var_dump($_POST);

    // Menyiapkan pernyataan SQL untuk memasukkan data ke dalam tabel
    $sql = "INSERT INTO tbl_contact (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<div style='text-align: center; margin-top: 20%; background-color: #a89b9b; padding: 20px;'>
        Thankyou for Trusting Us
        <center><h1></h1>;
    <button><strong><a href='index.html'>Back</a></strong></button></center>";
    } else {
    echo "";
}
    }


// Menutup koneksi
$conn->close();
?>
