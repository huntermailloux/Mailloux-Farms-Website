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

function addToCart(itemId, userId, price) {
    
    // Set up an AJAX request
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "add_to_cart.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Handle the response
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Perform any desired actions after a successful request, e.g. display a success message
            alert("Item added to cart!");
        }
    };
    var total;
    total += price;

    // Send the request with the item ID and user ID
    xhr.send("itemId=" + itemId + "&userId=" + userId + "total=" + total);
}
