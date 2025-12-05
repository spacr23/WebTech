<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mobile Devices - Product List</title>
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
        <h1>Mobile Devices</h1>

        <h2>Smartphones</h2>
        <ul>
            <li>
                <strong>EMKEHU Pulse X</strong><br>
                Price: €899.00<br>
                <em>High-performance smartphone with edge-to-edge display and all-day battery life.</em><br>
                <a href="pulsex.php">View details</a>
                <label style="display: block; width: 50%; margin: 0 auto; text-align: center;">Quantity:
                <input type="number" id="qty-phone" value="1" min="1">
                </label>
                <button onclick="addToCollection('EMKEHU Pulse X', document.getElementById('qty-phone').value)">
                    Add to collection list
                </button>
            </li>
    
        </ul>

        <h2>Tablets</h2>
        <ul>
            <li>
                <strong>EMKEHU Slate Pro</strong><br>
                Price: €1399<br>
                <em>Ultra-thin tablet designed for work, streaming, and creativity on the go.</em><br>
                <a href="slatepro.php">View details</a>
                <label style=" display: block; width: 50%; margin: 0 auto; text-align: center;">Quantity:
                <input type="number" id="qty-tablet" value="1" min="1">
                </label>
                <button onclick="addToCollection('EMKEHU Slate Pro', document.getElementById('qty-tablet').value)">
                Add to collection list
                </button>
            </li>
        </ul>
        <h2>Collection list</h2>
        <div id="collectionList">
         No items selected yet.
        </div>
        <button onclick="clearCollectionList()">Clear collection list</button><br><br>
        <a href="index.php">Back to homepage</a>
        


<script src="script.js"></script>
    </main>
    <footer>
        <div>
            <b>Copyright&copy; EMKEHU Electronics LTD. All rights reserved.</b>
            <p><u><em>Contact:</em></u> helpdesk@emkehu.de</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>