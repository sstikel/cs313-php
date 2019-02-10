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

//////////////////Login - Logout////////////////
function login(num){
    switch (num) {
        case 0: 
            //logout
            location.replace("web/recipe/recipeLogin.php?logout");
            break;
        case 1:
            //login
            location.replace("web/recipe/recipeLogin.php?login");
            break;
        default:
            //logout automatically
    }
        
}

//selectForm - used on recipeLogin.php
function selectForm(name) {
    //hides unused login form

    if (name == "return") {
        document.getElementById("divReturnForm").hidden = false;
        document.getElementById("divNewForm").hidden = true;
    }
    else if (name == "new") {
        document.getElementById("divReturnForm").hidden = true;
        document.getElementById("divNewForm").hidden = false;
    }
    else {
        document.getElementById("divReturnForm").hidden = true;
        document.getElementById("divNewForm").hidden = true;
    }
}