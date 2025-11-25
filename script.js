// Task 2 - Toggling dark mode and saving it to storage - with button change so it doesn't need to reload
function toggleDarkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
    var btn = document.getElementById("modeToggleBtn");

    if(element.classList.contains("dark-mode")) {
        localStorage.setItem("darkMode", "enabled");
        btn.textContent = "Toggle light mode";
        } else {
            localStorage.setItem("darkMode", "disabled");
            btn.textContent = "Toggle dark mode";
               }
}

// Task 2 - when loading the page read out the storage and change the button text
    window.onload = function() {
        var btn = document.getElementById("modeToggleBtn");
        if(localStorage.getItem("darkMode") === "enabled") {
            document.body.classList.add("dark-mode");
            btn.textContent = "Toggle light mode";
        } else {
                btn.textContent = "Toggle dark mode";
               }
}


let lastPrice = null; // stores the last calculated price

// Task 4 - Function 1: Price with and without tax
function getTotalPrice(priceNoTax) {
    // Check if input is empty
    if (isNaN(priceNoTax) || priceNoTax === "" || priceNoTax<=0) {
        document.getElementById("result").innerHTML = "<span style='color:red;'>Price not inserted or unsuitable price.</span>";
        return;
    }
    let taxRate = 0.19;
    let priceWithTax = priceNoTax * (1 + taxRate);

    document.getElementById("result").innerHTML =
        "Price without tax: &euro; " + priceNoTax.toFixed(2) +
        "<br>Price with tax (19%): &euro; " + priceWithTax.toFixed(2);

    lastPrice = priceWithTax; //update the last price
}


// Task 4 - Function 2: Apply discount
function applyDiscount(price, discountPercent) {
    // Check if input is empty
    if (isNaN(price) || price === "" || price<=0) {
        document.getElementById("discountResult").innerHTML = "<span style='color:red;'>Price not inserted or unsuitable price.</span>";
        return;
    }
    let taxRate = 0.19;
    let discount = price * (discountPercent / 100);
    let finalPrice = price - discount;
    let priceDiscoutTax = finalPrice * (1 + taxRate);

    document.getElementById("discountResult").innerHTML =
        "Original price: &euro; " + price.toFixed(2) +
        "<br>Discount: " + discountPercent + "% = &euro; " + discount.toFixed(2) +
        "<br>Final price: &euro;  " + finalPrice.toFixed(2) +
        "<br>Final price with tax (19%): &euro; " + priceDiscoutTax.toFixed(2);


     lastPrice =  priceDiscoutTax; //update the last price
}

// Task 4 - Function 3: Convert price to USD
function convertToUSD(price) {
    // Check if input is empty
    if (isNaN(price) || price === "" || price<=0) {
        document.getElementById("usdResult").innerHTML = "<span style='color:red;'>Price not inserted or unsuitable price.</span>";
        return;
    }
    let usdRate = 1.07; // Example conversion rate
    let priceUSD = lastPrice * usdRate;

    document.getElementById("usdResult").innerHTML =
        "&euro;  " + lastPrice.toFixed(2) + " = &dollar; " + priceUSD.toFixed(2);
}

// ===== Task 3 - Collection List =====

let collectionItems = []; // stores selected items

function addToCollection(productName, quantity) {
    quantity = parseInt(quantity);

    // check quantity
    if (isNaN(quantity) || quantity <= 0) {
        document.getElementById("collectionList").innerHTML =
            "<span style='color:red;'>Please insert a valid quantity.</span>";
        return;
    }

    // add item to array (simple version, no merge)
    collectionItems.push({
        name: productName,
        qty: quantity
    });

    // update the HTML view
    showCollectionList();
}

function showCollectionList() {
    let container = document.getElementById("collectionList");

    if (collectionItems.length === 0) {
        container.innerHTML = "No items selected yet.";
        return;
    }

    let html = "<ul>";
    for (let i = 0; i < collectionItems.length; i++) {
        html += "<li>" + collectionItems[i].name +
                " – Quantity: " + collectionItems[i].qty + "</li>";
    }
    html += "</ul>";

    container.innerHTML = html;
}

function clearCollectionList() {
    // empty the array
    collectionItems = [];

    // update the view
    document.getElementById("collectionList").innerHTML = "No items selected yet.";
}