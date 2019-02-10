/*****************************************
* generalJS.js
*Author: Sam Gay
*Date: ......
* For storing/reusing common Javascript functions
*
*******************************************/



///////////Recipe////////////////
function soItBegins() {
    //general page setup
    
}


//selectForm - used on recipeLogin.php
function selectForm(value) {
    //hides unused login form

    if (value == "return") {
        document.getElementById("divReturnForm").hidden = false;
        document.getElementById("divNewForm").hidden = true;
    }
    else if (value == "new") {
        document.getElementById("divReturnForm").hidden = true;
        document.getElementById("divNewForm").hidden = false;
    }
    else {
        document.getElementById("divReturnForm").hidden = true;
        document.getElementById("divNewForm").hidden = true;
    }
};