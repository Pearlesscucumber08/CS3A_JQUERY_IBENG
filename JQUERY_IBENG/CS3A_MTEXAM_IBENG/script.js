// Shopping Cart Array
let cart = [];

// Function to Add Item to Cart
function addToCart(productName, price, image) {
    let existingItem = cart.find(item => item.name === productName);

    if (existingItem) {
        existingItem.quantity += 1; // Increase quantity if item already exists
    } else {
        cart.push({ name: productName, price: price, image: image, quantity: 1 }); // Add new item
    }

    updateCart();
}

// Function to Remove Item from Cart
function removeFromCart(productName) {
    let itemIndex = cart.findIndex(item => item.name === productName);

    if (itemIndex !== -1) {
        if (cart[itemIndex].quantity > 1) {
            cart[itemIndex].quantity -= 1; // Reduce quantity
        } else {
            cart.splice(itemIndex, 1); // Remove item if quantity is 0
        }
    }

    updateCart();
}

// Function to Update Cart Display
function updateCart() {
    let cartList = document.querySelector(".cart");
    cartList.innerHTML = "<h2>Cart List</h2>"; // Reset cart list

    if (cart.length === 0) {
        cartList.innerHTML += "<p>Your cart is empty.</p>";
        return;
    }

    cart.forEach(item => {
        let cartItem = document.createElement("div");
        cartItem.classList.add("cart-item");
        cartItem.innerHTML = `
            <img src="${item.image}" alt="${item.name}" class="cart-img">
            <div class="cart-info">
                <h3>${item.name}</h3>
                <p>₱${item.price.toLocaleString()}</p>
            </div>
            <div class="listCart">
                <button class="minus" onclick="removeFromCart('${item.name}')">-</button>
                <span>${item.quantity}</span>
                <button class="add" onclick="addToCart('${item.name}', ${item.price}, '${item.image}')">+</button>
            </div>
        `;
        cartList.appendChild(cartItem);
    });
}
