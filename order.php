<?php
$conn = mysqli_connect("localhost", "root", "", "bite_hub");

if (!$conn) {
    die("Database connection failed.");
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"] ?? "");
    $food = trim($_POST["food"] ?? "");
    $price = trim($_POST["price"] ?? "");

    if ($name != "" && $food != "" && $price != "") {

        $stmt = mysqli_prepare($conn, "INSERT INTO orders (name, food, price) VALUES (?, ?, ?)");

        mysqli_stmt_bind_param($stmt, "ssi", $name, $food, $price);

        if (mysqli_stmt_execute($stmt)) {
            $message = "Your order has been placed!";
        } else {
            $message = "Unable to place order.";
        }

        mysqli_stmt_close($stmt);

    } else {
        $message = "Please fill all fields.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Place Order - Bite Hub</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff8e8;
            color: #222;
        }

        nav {
            background: #8b2740;
            padding: 22px 55px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h1 {
            color: white;
            margin: 0;
            font-size: 32px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 28px;
            font-size: 18px;
        }

        .box {
            width: 600px;
            max-width: 90%;
            margin: 70px auto;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.12);
        }

        h2 {
            text-align: center;
            color: #8b2740;
            font-size: 34px;
        }

        .success {
            text-align: center;
            color: green;
            font-size: 21px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        label {
            display: block;
            font-size: 20px;
            margin-top: 22px;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 15px;
            font-size: 17px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        button {
            margin-top: 25px;
            background: #d9a441;
            color: #222;
            border: 2px solid #222;
            padding: 14px 30px;
            font-size: 18px;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #c99332;
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

<div class="box">

    <h2>Place Your Order</h2>

    <?php if ($message != "") { ?>
        <div class="success">
            <?php echo htmlspecialchars($message); ?>
        </div>
    <?php } ?>

    <form method="POST" action="order.php">

        <label>Your Name</label>
        <input type="text" name="name" placeholder="Enter your name" required>

        <label>Food Item</label>

        <select name="food" id="food" required onchange="setPrice()">
            <option value="">Select food</option>
            <option value="Chole Bhature" data-price="120">Chole Bhature - ₹120</option>
            <option value="Dal Makhani + Naan" data-price="150">Dal Makhani + Naan - ₹150</option>
            <option value="Paneer Tikka" data-price="180">Paneer Tikka - ₹180</option>
        </select>

        <label>Price</label>
        <input type="number" name="price" id="price" placeholder="Price" readonly required>

        <button type="submit">Place Order</button>

    </form>

</div>

<script>
function setPrice() {
    var food = document.getElementById("food");
    var price = food.options[food.selectedIndex].getAttribute("data-price");

    document.getElementById("price").value = price ? price : "";
}
</script>

</body>
</html>

<?php
mysqli_close($conn);
?>