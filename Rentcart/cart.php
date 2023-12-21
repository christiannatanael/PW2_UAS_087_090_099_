
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="cart.css">
        <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
        <link rel="icon" href="/UAS/Mainpage/img/logo.png ">
    </head>
    <title> Cart </title>
    <script>
            function checkout() {
                // Kirim item keranjang ke server
                fetch('checkout.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ cartItems: cart }),
                })
                .then(response => response.text())
                .then(message => {
                    alert(message); // Tampilkan pesan sukses
                    // mengarahkan pengguna setelah pesanan berhasil
                })
                .catch(error => console.error('Error:', error));
            }
        </script>
    <body>
        <div class="header">
            <p class="logo">Lanecars | Order / Days</p>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
        </div>
        <div class="container">
            <div id="root"></div>   
            <div class="sidebar">
                <div class="head"><p>Cart</p></div>
                <div id="cartItem">Cart is empty</div>
                <div class="foot">
                    <h3>Total</h3>
                    <h2 id="total">$ 0.00</h2>
                    <button class="btn" onclick="checkout()">Checkout</button>
                </div>
            </form>
            </div>
        </div>
        <script src="cart.js"></script>
    </body>
</html>