<!DOCTYPE html>
<html>
<head>
  <title>Customer Information</title>
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
        <h1>Customer Information</h1>

        <form id="updateForm">
            <label>Username:</label>
            <input type="text" name="username" value="Hugo" style="margin-right:20px;">

            <label>Current Password:</label>
            <input type="password" name="password" value="Example">

            <br><br>
        </form>

        <form>
            <div class="error-msg">XXXXXXXX</div>
            <label>New Username:</label>
            <input type="text" name="username_new" value="Hugo2" style="margin-right:20px;">

            <label>New Password:</label>
            <input type="password" name="password_new" value="Example2">

            <br><br>
            <input type="submit" value="Save Changes" class="disabled-btn">
            <input type="reset" value="Cancel">
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
