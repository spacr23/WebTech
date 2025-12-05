// TASK 1 - CHECK FORM INPUTS
var usernameCheck = false;
var passwordCheck = false;
var errorMessage = "";

document.querySelectorAll("input").forEach(input => {
    input.addEventListener("blur", checkForm);
});

function checkForm(){
    let errorBox = document.getElementsByClassName("error-msg")[0];
    let submitBtn = document.querySelector("input[type=submit]");
    
    let usernameEl = document.getElementsByName("username")[0];
    let passwordEl = document.getElementsByName("password")[0];
    let confirmEl = document.getElementsByName("confirmPassword")[0]; 
    let usernameNewEl = document.getElementsByName("username_new")[0];
    let passwordNewEl = document.getElementsByName("password_new")[0];
        
    errorMessage = "";

    if(confirmEl){  
        // REGISTRATION PAGE
        checkUsername(usernameEl.value);
        checkPassword(passwordEl.value, confirmEl.value);
    }
    else if(usernameNewEl && passwordNewEl){
        // CUSTOMER PAGE
        checkUsername(usernameNewEl.value);
        checkPassword(passwordNewEl.value, passwordNewEl.value); 
    }
    else if(usernameEl && passwordEl){
        // LOGIN PAGE
        if((usernameEl.value.trim() == "") || (passwordEl.value.trim() == "")){
            usernameCheck = false;
            passwordCheck = false;
            errorMessage += "Username or password can't be empty."
        }else{
            usernameCheck = true;
            passwordCheck = true;
        }
    }
    
    if (usernameCheck && passwordCheck){
        errorBox.classList.remove("display");
        submitBtn.classList.remove("disabled-btn"); 
    }else{
        errorBox.innerHTML = errorMessage;
        errorBox.classList.add("display");
        submitBtn.classList.add("disabled-btn");
    }

    styleInputFields();
}

function styleInputFields(){
    let inputFields = document.querySelectorAll("input");

    for(inputField of inputFields){
        let label = inputField.previousElementSibling;

        if(document.title !== "Customer Information"){
            styleInputArea(inputField, "username", "password", label);
        }else{
            styleInputArea(inputField, "username_new", "password_new", label);
        }   
    }
}

function styleInputArea(inputField, var_user, var_pass, label){
    if(inputField.name === var_user){
            if(usernameCheck){
                inputField.style.borderColor = "green";
                label.style.color = "green";
            } else {
                inputField.style.borderColor = "red";
                label.style.color = "red";
            }
    }else if(inputField.name === var_pass || inputField.name === "confirmPassword"){
        if(passwordCheck){
            inputField.style.borderColor = "green";
            label.style.color = "green";
        } else {
            inputField.style.borderColor = "red";
            label.style.color = "red";
        }
    }else {
        if(inputField.value.trim() !== ""){
            inputField.style.borderColor = "green";
            label.style.color = "green";
        } else {
            inputField.style.borderColor = "red";
            label.style.color = "red";
        }
    }
}

function checkUsername(username){
    if(username.length >= 5){
        const hasUpper = username.toLowerCase() !== username;
        const hasLower = username.toUpperCase() !== username;
        if (hasUpper && hasLower){
            usernameCheck = true;
        }else{
            usernameCheck = false;
            errorMessage += "Username must contain at least one uppercase and one lowercase letter.\n";
        }
    }else{
        usernameCheck = false;
        errorMessage += "Username should consist at least of 5 characters."
    }
}

function checkPassword(password, passwordRep){
    if(password.length >= 10){
        if(password == passwordRep){
            passwordCheck = true;
        }else{
            passwordCheck = false;
            errorMessage += "The password repetition must correspond to the password";
        }
    }else{
        passwordCheck = false;
        errorMessage += "Password must have at least 10 characters."
    }
}


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