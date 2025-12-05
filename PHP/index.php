<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Emkehu Electronics LTD. Store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="./Resources/Images/favicon.png">
</head>
<body>
    <? php
    $textTitle = "Welcome to EMKEHU Electronics Online Shop";
    ?>
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
        <h1><?= $textTitle ?></h1>
        <section>
            <table class="slide-ads">
                <thead>
                    <th>Featured Promotions</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <!-- Placeholder Image Area for Ads-->
                            <img src="./Resources/Images/ad_banner.png" class="banner"/>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
        <br />
        <section class="best-sellers">
            <div class="table-wrapper">
            <table class="product-list">
                <thead>
                <tr>
                    <th colspan="5">Best Sellers</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="product">
                        <span class="product-title">Title 1</span><br>
                        <img src="./Resources/Images/kuhlschrank.jpg" width="150" height="200" /><br>
                        <span class="product-price">100$</span>
                    </td>
                    <td class="product">
                        <span class="product-title">Title 2</span><br>
                        <img src="./Resources/Images/coffeemachine.jpg" width="150" height="200" /><br>
                        <span class="product-price">250$</span>
                    </td>
                    <td class="product">
                        <span class="product-title">Title 3</span><br>
                        <img src="./Resources/Images/phone.jpg" width="150" height="200" /><br>
                        <span class="product-price">50$</span>
                    </td>
                    <td class="product">
                        <span class="product-title">Title 4</span><br>
                        <img src="./Resources/Images/toaster.jpg" width="150" height="200" /><br>
                        <span class="product-price">75$</span>
                    </td>
                    <td class="product">
                        <span class="product-title">Title 5</span><br>
                        <img src="./Resources/Images/machine.jpg" width="150" height="200" /><br>
                        <span class="product-price">180$</span>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </section>
        <br />
        <section class="on-sale">
            <div class="table-wrapper">
            <table class="product-list">
                <thead>
                <tr>
                    <th colspan="5" style="color:red;">ON SALE!</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="product">
                        <span class="product-title">Title 1</span><br>
                        <img src="./Resources/Images/machine.jpg" width="150" height="200" /><br>
                        <span class="product-price">100$</span>
                    </td>
                    <td class="product">
                        <span class="product-title">Title 2</span><br>
                        <img src="./Resources/Images/coffeemachine.jpg" width="150" height="200" /><br>
                        <span class="product-price">250$</span>
                    </td>
                    <td class="product">
                        <span class="product-title">Title 3</span><br>
                        <img src="./Resources/Images/machine.jpg" width="150" height="200" /><br>
                        <span class="product-price">50$</span>
                    </td>
                    <td class="product">
                        <span class="product-title">Title 4</span><br>
                        <img src="./Resources/Images/toaster.jpg" width="150" height="200" /><br>
                        <span class="product-price">75$</span>
                    </td>
                    <td class="product">
                        <span class="product-title">Title 5</span><br>
                        <img src="./Resources/Images/phone.jpg" width="150" height="200" /><br>
                        <span class="product-price">180$</span>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </section>
    </main>
    <hr />
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