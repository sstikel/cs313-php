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

function checkout() {
    //navigate to purchase.php
    window.location.href = "https://warm-refuge-37557.herokuapp.com/ShopCart/purchase.php";
}

function purchase() {
    //navigate to 'confirmation.php'
    window.location.href = "https://warm-refuge-37557.herokuapp.com/ShopCart/confirmation.php";
    //clear cart
}