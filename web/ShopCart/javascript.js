var cart = 0;

function itemAdd(str) {
      console.log("Called: itemAdd()");
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                cart++;
                document.getElementById("cartNum").innerHTML = cart;
                console.log("Return: " + this.responseText);
                
            }
        }
        xmlhttp.open("GET", "itemAddRemove.php?q="+str, true);
        xmlhttp.send();
}

function itemRemove(str) {
    console.log("Called: itemRemove()");
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                cart--;
                document.getElementById("cartNum").innerHTML = cart;
                console.log("Return: " + this.responseText);
            }
        }
        xmlhttp.open("GET", "itemAddRemove.php?q="+str, true);
        xmlhttp.send();
    
}

//////////////buttons  Navigation///////////////////////

function toBrowse() {
    //navigate to browse.php
    window.location.href = "browse.php";
}

function toCart() {
    //navigate to cart.php
    window.location.href = "cart.php";
}

function toCheckout() {
    //navigate to checkout.php
    //window.location.href = "https://warm-refuge-37557.herokuapp.com/ShopCart/checkout.php";
    window.location.href = "checkout.php";
}

function toConfirmation() {
    //navigate to 'confirmation.php'
    window.location.href = "confirmation.php";
   
    //clear cart
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            cart = 0;
            document.getElementById("cartNum").innerHTML = cart;
            console.log("Return: " + this.responseText);
            
        }
    }
    xmlhttp.open("GET", "clearCart.php", true);
    xmlhttp.send();
}