<html>
<head>
    <title>Price Calculator</title>
</head>
<body>

<h1>Task 4 Function test</h1>

<p>Enter price without tax:</p>
<input id="priceInput" type="number">

<button onclick="getTotalPrice(parseFloat(document.getElementById('priceInput').value))">
    Calculate Price With Tax
</button>

<div id="result">Click the botton to see the result</div>

<br><br>

<button onclick="applyDiscount(parseFloat(document.getElementById('priceInput').value), 10)">
    Apply 10% Discount
</button>

<div id="discountResult">Click the botton to see the result</div>

<br><br>

<button onclick="convertToUSD(parseFloat(document.getElementById('priceInput').value))">
    Convert to USD
</button>

<div id="usdResult">Click the botton to see the result</div>

<script src="script.js"></script>
</body>
</html>