<?php
include 'koneksi2.php';

// Mengambil data pesanan dari request POST
$data = json_decode(file_get_contents("php://input"), true);
$cartItems = $data['cartItems'];

// masuk  kedalam tabel "tbl_cart"
foreach ($cartItems as $item) {
    $title = $item['title'];
    $price = $item['price'];

    $sql = "INSERT INTO tbl_cart (title, price) VALUES ('$title', $price)";
    
    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
        exit();
    }
}

// menutup koneksi
$conn->close();

echo "Your order success, we will contact you soon!";
?>
