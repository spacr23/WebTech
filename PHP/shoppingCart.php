<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Logout - EMKEHU Electronics</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
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
  <h1>Shopping cart</h1>
  <h3>Your shopping cart is empty.</h3>
  <a href="index.php">Back to homepage</a>
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