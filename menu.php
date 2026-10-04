<!DOCTYPE html>
<html>
<head>
    <title>Bite Hub - Menu</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: #fff7e8;
            color: #222;
        }

        nav {
            background: #84243d;
            padding: 22px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h1 {
            color: white;
            margin: 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-size: 18px;
        }

        .title {
            text-align: center;
            padding: 40px;
        }

        .title h2 {
            color: #84243d;
            font-size: 38px;
        }

        .menu {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            padding: 20px 5% 60px;
        }

        .card {
            background: white;
            width: 300px;
            padding: 20px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 3px 12px #ddd;
        }

        .card img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card h3 {
            color: #84243d;
            font-size: 25px;
        }

        .price {
            font-size: 21px;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            background: #d9a441;
            color: #222;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 7px;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>

<nav>
    <h1>Bite Hub</h1>
    <div>
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="order.php">Order</a>
        <a href="about.php">About Us</a>
        <a href="help.php">Help Center</a>
        <a href="contact.php">Contact</a>
        <a href="orders.php">My Orders</a>
    </div>
</nav>

<div class="title">
    <h2>Our Punjabi Menu</h2>
    <p>Fresh and delicious food from our Punjabi Dhaba</p>
</div>

<div class="menu">

    <div class="card">
        <img src="images/chole.jpg">
        <h3>Chole Bhature</h3>
        <p>Spicy chole served with soft bhature.</p>
        <p class="price">₹120</p>
        <a class="btn" href="order.php?food=Chole%20Bhature&price=120">Order Now</a>
    </div>

    <div class="card">
        <img src="images/dal.jpg">
        <h3>Dal Makhani + Naan</h3>
        <p>Creamy dal makhani served with fresh naan.</p>
        <p class="price">₹150</p>
        <a class="btn" href="order.php?food=Dal%20Makhani%20%2B%20Naan&price=150">Order Now</a>
    </div>

    <div class="card">
        <img src="images/paneer.jpg">
        <h3>Paneer Tikka</h3>
        <p>Grilled paneer with delicious Indian spices.</p>
        <p class="price">₹180</p>
        <a class="btn" href="order.php?food=Paneer%20Tikka&price=180">Order Now</a>
    </div>

</div>

</body>
</html>