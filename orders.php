<?php
$conn = mysqli_connect("localhost", "root", "", "bite_hub");

if (!$conn) {
    die("Database connection failed.");
}

$result = mysqli_query($conn, "SELECT * FROM orders ORDER BY id DESC");

if (!$result) {
    die("Unable to load orders.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Orders - Bite Hub</title>

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

        nav div a {
            color: white;
            text-decoration: none;
            margin-left: 28px;
            font-size: 18px;
        }

        .container {
            width: 85%;
            margin: 60px auto;
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.12);
        }

        h2 {
            text-align: center;
            color: #8b2740;
            font-size: 34px;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #8b2740;
            color: white;
            padding: 18px;
            font-size: 18px;
        }

        td {
            padding: 18px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 17px;
        }

        tr:hover {
            background: #fff4d6;
        }

        .empty {
            text-align: center;
            font-size: 20px;
            padding: 30px;
        }

        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: 80px;
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

<div class="container">

    <h2>Order History</h2>

    <?php if (mysqli_num_rows($result) > 0) { ?>

    <table>
        <tr>
            <th>Order ID</th>
            <th>Name</th>
            <th>Food</th>
            <th>Price</th>
        </tr>

        <?php
        $display_id = 1;

        while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <tr>
            <td><?php echo $display_id; ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
            <td><?php echo htmlspecialchars($row['food']); ?></td>
            <td>₹<?php echo htmlspecialchars($row['price']); ?></td>
        </tr>

        <?php
            $display_id++;
        }
        ?>

    </table>

    <?php } else { ?>

        <div class="empty">
            No orders have been placed yet.
        </div>

    <?php } ?>

</div>

<footer>
    Bite Hub © 2026
</footer>

</body>
</html>

<?php
mysqli_close($conn);
?>