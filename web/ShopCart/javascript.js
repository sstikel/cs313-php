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
            }
        }
        xmlhttp.open("GET", "itemAddRemove.php?q="+str, true);
        xmlhttp.send();
    
}