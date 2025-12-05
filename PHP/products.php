<?php
// Load JSON file
$json = file_get_contents("products.json");
$data = json_decode($json, true);
$products = $data["products"]; //array with all the products

// Helper: find a product by ID
function findProductById($products, $pid) {
    foreach ($products as $product) {
        if ($product["pid"] == $pid) {
            return $product;
        }
    }
    return null;
}

$error = "";
$product = null;

// Check if parameter exists
if (!isset($_GET["pid"])) {
    $error = "Parameter is missing!";
} elseif ($_GET["pid"] === "") {
    $error = "No value for the parameter!";
} else {
    $pid = (int)$_GET["pid"];
    $product = findProductById($products, $pid);

    if ($product === null) {
        $error = "Product with id $pid not found.";
    }
}
?>
<head>
    <title>Product detail</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Product detail</h1>

<?php if ($error !== ""): ?>

    <p style="color:red;"><?php echo $error; ?></p>

<?php else: ?>

    <h2><?php echo $product["name"]; ?></h2>
    <p><strong>Category:</strong> <?php echo $product["category"]; ?></p>
    <p><strong>Subcategory:</strong> <?php echo $product["subcategory"]; ?></p>
    <p><strong>Description:</strong> <?php echo $product["description"]; ?></p>
    <p><strong>Price:</strong> € <?php echo $product["price"]; ?></p>

    <?php if (!empty($product["imagepath"])): ?>
        <img src="<?php echo $product["imagepath"]; ?>" 
             alt="<?php echo $product["name"]; ?>" 
             width="200">
    <?php endif; //This makes the code cleaner and easier to read when HTML is inside the condition ?>
        
<?php endif; ?>

<p><a href="mobile-devicesList.php">Back to Mobile-devices</a></p>
<p><a href="kitchen-appliancesList.php">Back to Kitchen appliances</a></p>

</body>
</html>