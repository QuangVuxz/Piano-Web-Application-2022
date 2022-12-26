"use strict";

const password = document.getElementById("password");
const passwordConfirm = document.getElementById("passwordConfirm");
const registerBtn = document.getElementById("submit");

registerBtn.addEventListener("click", function() {
    //Password and Password confirm are NOT NULL
    //Password and Password confirm have same value
    //Password contain numbers, special characters, upper and lower case
    //When everything is OK, direct to index.html
    if(passwordConfirm.value == "" || password.value == ""){
        alert("Please try again");
    }else if(passwordConfirm.value == password.value) {
        alert("Password ok!");
    }else{
        alert("Please try again!");
    }
    
})