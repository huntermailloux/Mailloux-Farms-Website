function signin() {
    alert('You must sign in first before going to this page!');
}

function signinadd() {
    alert('You must sign in first before adding to cart!');
}

function logout() {
    alert('You have been successfully logged out!');
}

function login() {
    alert('You have been successfully loggin in!');
}

function accountcreated() {
    alert('Thank you for making an account! If it worked, you should have no errors pop up at the bottom of the page');
}

function addToCart(itemId, itemPrice, userId, itemName, quantity, btn) {
    var stock = parseInt(btn.getAttribute("data-stock"));

    if (quantity <= 0 || stock <= 0) {
        alert("Cannot add item to cart. Stock is at or below 0.");
        return;
    }

    var xhrCartQuantity = new XMLHttpRequest();
    xhrCartQuantity.open("POST", "get_cart_quantity.php", true);
    xhrCartQuantity.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhrCartQuantity.onreadystatechange = function() {
        if (xhrCartQuantity.readyState === 4 && xhrCartQuantity.status === 200) {
            var cartQuantity = parseInt(xhrCartQuantity.responseText);

            if (cartQuantity + quantity > stock) {
                alert("Cannot add item to cart. The total quantity exceeds the available stock.");
            } else {
                var xhrAddToCart = new XMLHttpRequest();
                xhrAddToCart.open("POST", "add_to_cart.php", true);
                xhrAddToCart.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                xhrAddToCart.onreadystatechange = function() {
                    if (xhrAddToCart.readyState === 4 && xhrAddToCart.status === 200) {
                        alert("Item(s) added to cart!");
                    }
                };

                xhrAddToCart.send("itemId=" + itemId + "&itemPrice=" + itemPrice + "&userId=" + userId + "&itemName=" + itemName + "&quantity=" + parseInt(quantity));
            }
        }
    };

    xhrCartQuantity.send("itemId=" + itemId + "&userId=" + userId);
}




function clearCart(userId) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "clear_cart.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            location.reload(); 
        }
    };

    xhr.send("userId=" + userId);
}


function checkout() {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "checkout.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            if (response === "success") {
                alert("Order placed successfully!");
                location.reload();
            } else {
                alert("Error: " + response);
            }
        }
    };

    xhr.send();
}