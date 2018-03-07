<?php
//start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <PHP><head><link href ="EBus.css" rel= "stylesheet" type="text/css"></head></PHP>
    <body class="paymentbackground">
        
        
            <h1 class="headingpayment"> Payment Details </h1>

            
            
            
            
             <form name = "myForm"  method="POST" action="EBus3.php">
                    <br>
                    <label for = "name">
                        <strong>  Name:</strong>
                        <br>
                        <input type ='text' id ="name" name = "name"/>
                    </label>
                    <br><br>
                    <label for = "email">
                        <strong> Email:</strong>
                        <br>
                        <input type = "email" id ="email" name="email"/>
                    </label>
                    <br><br>
                    
                    <label for = "user_number">
                        <strong>Card Number</strong></label>
                    <br>
                     <input type = "text" id ="user_number" name="user_number" maxlength="16"/>
               
                <br><br>
                
                    <label for="user_pin"><strong>PIN:</strong></label>
                    <br>
                   <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    <br><br><br><br><br>
                <button class="button button2" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <div class="validatebtn">
                <button class="button button3" onClick="validateDetails()">Validate</button>
            </div>
          
            <?php
            //set session variable 
            $_SESSION["total"]=$_POST["total"];
           
            ?>
        
        <script type="text/javascript" src="EBus2_validator.js"></script>
        
        
    </body>
    
    
    
</html>