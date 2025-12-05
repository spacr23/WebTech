<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
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
        <h1>Login page</h1>
        <form>
            <div class="error-msg">XXXXXXXX</div>
            <p>
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username">
            </p>

            <p>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password">
                <input type="checkbox" onclick="myFunction()">Show Password
            </p>

            <p>
                <input type="submit" value="Login" class="disabled-btn">
                <input type="button" value="Register" onclick="window.location.href='registration.php'">
            </p>
        </form>

        <p><a href="index.php">Back to Home</a></p>
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