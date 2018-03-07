/* global $ */

function validateDetails(){
    
    var pin;
    var number;
    
    pin = document.getElementById("user_number").value;
    pin = document.getElementById("user_pin").value;
    
    /*algorithm for pin, firstname, lastname, email, card number error count*/
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        enablebtnPurchase();
        }
        if (number==""){
        alert("Please enter your Card number");
        }
    else if (String(pin).length<16){
        alert("");
        }
    else{
        enablebtnPurchase();
        }
}

function validateName(){
 var name;
    
    name = document.getElementById("name").value;
    
    if (name==""){
        alert("Please enter your name");
        }
    else if (String(name).length<2){
        alert("Please make sure your Name is accurate");
        }
    else{
        enablebtnPurchase();
        }
}
function validateEmail(){
 var email;
    
    email = document.getElementById("email").value;
    
    if (email==""){
        alert("Please enter your email");
        }
    else if (String(email).length<2){
        alert("Please make sure your email is accurate");
        }
    else{
        enablebtnPurchase();
        }
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}
