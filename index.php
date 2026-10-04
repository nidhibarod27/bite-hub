<!DOCTYPE html>
<html>

<head>

    <title>Bite Hub - Home</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff8e8;
            color: #3b2923;
        }

        header {
            background-color: #8b2740;
            color: white;
            padding: 20px 45px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 32px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 22px;
            font-size: 16px;
        }

        nav a:hover {
            color: #d9a441;
        }

        .hero {
            text-align: center;
            padding: 80px 20px;
        }

        .hero h1 {
            color: #8b2740;
            font-size: 46px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .button {
            display: inline-block;
            background-color: #d9a441;
            color: #3b2923;
            padding: 13px 28px;
            border-radius: 7px;
            text-decoration: none;
            font-weight: bold;
            font-size: 17px;
        }

        .button:hover {
            background-color: #8b2740;
            color: white;
        }

        .about {
            background-color: white;
            text-align: center;
            padding: 55px 20px;
        }

        .about h2 {
            color: #8b2740;
            font-size: 32px;
        }

        .about p {
            max-width: 700px;
            margin: auto;
            line-height: 1.7;
            font-size: 17px;
        }

        .featured {
            text-align: center;
            padding: 55px 20px;
        }

        .featured h2 {
            color: #8b2740;
            font-size: 32px;
        }

        .food-container {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .food {
            background-color: white;
            width: 270px;
            padding: 18px;
            border-radius: 12px;
            box-shadow: 0 3px 12px #ddd;
        }

        .food img {
            width: 100%;
            height: 175px;
            object-fit: cover;
            border-radius: 9px;
        }

        .food h3 {
            color: #8b2740;
            font-size: 22px;
        }

        .food p {
            line-height: 1.5;
        }

        .food .price {
            font-weight: bold;
            font-size: 18px;
        }

        .order-button {
            display: inline-block;
            background-color: #d9a441;
            color: #3b2923;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 5px;
        }

        .order-button:hover {
            background-color: #8b2740;
            color: white;
        }

        footer {
            background-color: #3b2923;
            color: white;
            text-align: center;
            padding: 28px;
            margin-top: 20px;
        }

        footer p {
            margin: 6px;
        }

    </style>

</head>

<body>


<header>

    <div class="logo">
        Bite Hub
    </div>

    <nav>

        <a href="index.php">Home</a>

        <a href="menu.php">Menu</a>

        <a href="order.php">Order</a>

        <a href="about.php">About Us</a>

        <a href="help.php">Help Center</a>

        <a href="contact.php">Contact</a>

        <a href="orders.php">My Orders</a>

    </nav>

</header>


<section class="hero">

    <h1>Welcome to Bite Hub</h1>

    <p>
        Delicious Punjabi food, made simple and easy to order.
    </p>

    <a href="menu.php" class="button">
        Explore Menu
    </a>

</section>


<section class="about">

    <h2>About Bite Hub</h2>

    <p>
        Bite Hub is a simple online food ordering website
        made for people who love tasty Punjabi food.
        Explore our menu, choose your favourite dish
        and place your order easily.
    </p>

</section>


<section class="featured">

    <h2>Our Popular Dishes</h2>

    <div class="food-container">


        <div class="food">

            <img src="images/chole.jpg" alt="Chole Bhature">

            <h3>Chole Bhature</h3>

            <p>
                Spicy chole served with soft and fluffy bhature.
            </p>

            <p class="price">
                ₹120
            </p>

            <a href="order.php" class="order-button">
                Order Now
            </a>

        </div>


        <div class="food">

            <img src="images/dal.jpg" alt="Dal Makhani">

            <h3>Dal Makhani + Naan</h3>

            <p>
                Creamy dal served with fresh naan.
            </p>

            <p class="price">
                ₹150
            </p>

            <a href="order.php" class="order-button">
                Order Now
            </a>

        </div>


        <div class="food">

            <img src="images/paneer.jpg" alt="Paneer Tikka">

            <h3>Paneer Tikka</h3>

            <p>
                Grilled paneer with delicious Indian spices.
            </p>

            <p class="price">
                ₹180
            </p>

            <a href="order.php" class="order-button">
                Order Now
            </a>

        </div>


    </div>

</section>


<footer>

    <p><b>Bite Hub</b></p>

    <p>Punjabi food made with love.</p>

    <p>© 2026 Bite Hub</p>

</footer>


</body>

</html>