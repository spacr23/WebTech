<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kitchen Appliances - Product List</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div>
            <!--LOGO-->
            <img src="./Resources/Images/emkehu_logo.png" class="logo" />
            <!-- Navigation -->
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <strong>Categories</strong>
                        <ul>
                            <li><a href="mobile-devicesList.php">Mobile Devices</a></li>
                            <li><a href="kitchen-appliancesList.php">Kitchen Appliances</a></li>
                            <li><a href="products.php"> Products</a></li>
                        </ul>
                    </li>
                    <li><a href="shoppingCart.php">Checkout</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registration.php">Register</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <hr />
    <main>
        <h1>Kitchen Appliances</h1>

        <h2>Sandwich Maker</h2>
        <ul>
            <li>
                <strong>EMKEHU HotPress 700</strong><br>
                Price: €59.90<br>
                <em>Quick-heating sandwich maker with non-stick plates and compact design.</em><br>
                <a href="hotpress700.php">View details</a>
            </li>
        </ul>

        <h2>Refrigerator</h2>
        <ul>
            <li>
                <strong>EMKEHU CoolBox 300L</strong><br>
                Price: €899<br>
                <em>Energy-efficient refrigerator with smart cooling zones and quiet performance.</em><br>
                <a href="coolbox300L.php">View details</a>
            </li>
        </ul>

        <h2>Frying Pan</h2>
        <ul>
            <li>
                <strong>EMKEHU SteelPan 28</strong><br>
                Price: €49.90<br>
                <em>Durable stainless-steel pan with even heat distribution and ergonomic handle.</em><br>
                <a href="steelpan28.php">View details</a>
            </li>
        </ul>

        <a href="index.php">Back to homepage</a>
    </main>
    <footer>
        <div>
            <b>Copyright&copy; EMKEHU Electronics LTD. All rights reserved.</b>
            <p><u><em>Contact:</em></u> helpdesk@emkehu.de</p>
            <button id="modeToggleBtn" onclick="toggleDarkMode()">Toggle dark mode</button>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>