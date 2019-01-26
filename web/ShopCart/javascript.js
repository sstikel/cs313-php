function itemAdd(str) {
      console.log("Called: itemAdd()");
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("cartNum").innerHTML = this.responseText;
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
                document.getElementById("cartNum").innerHTML = this.responseText;
                console.log("Return: " + this.responseText);
            }
        }
        xmlhttp.open("GET", "itemAddRemove.php?q="+str, true);
        xmlhttp.send();
    
}

//////////////buttons  Navigation///////////////////////

function toBrowse() {
    //navigate to browse.php
    window.location.href = "https://warm-refuge-37557.herokuapp.com/ShopCart/browse.php";
}

function toCart() {
    //navigate to cart.php
    window.location.href = "https://warm-refuge-37557.herokuapp.com/ShopCart/cart.php";
}

function toCheckout() {
    //navigate to checkout.php
    window.location.href = "https://warm-refuge-37557.herokuapp.com/ShopCart/checkout.php";
    //window.location.href = "checkout.php";
}

function toConfirmation() {
    //navigate to 'confirmation.php'
    window.location.href = "https://warm-refuge-37557.herokuapp.com/ShopCart/confirmation.php";
   
    //TODO clear cart
}