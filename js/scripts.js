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

function addToCart(itemId, itemPrice, userId, itemName) {
    
  
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "add_to_cart.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            alert("Item added to cart!");
        }
    };

    xhr.send("itemId=" + itemId + "&itemPrice=" + itemPrice + "&userId=" + userId + "&itemName=" + itemName);
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

