<?php
//start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Title of Tab on browser-->
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <PHP><head><link href ="EBus.css" rel= "stylesheet" type="text/css"></head></PHP>
    <body class="paymentbackground">
        
        <!--navigation bar-->
    <ul>
    <li><a href="../CV/cv_page1.html" class="button button1">Curriculum Vitae</a></li>
    <li><a href="../interests/travel.html" class="button button5">Travel</a></li>
    <li><a href="../interests/sports.html" class="button button2">Sports</a></li>
    <li><a href="../interests/cloudservices.html" class="button button4">Cloud Servies</a></li>
    <li><a href="../interests/raven.html" class="button button10">Raven .Ltd</a></li>
    <li><a href="EBus1.php" class="button button3">Products</a></li>
    <li style="float:right"><a href="https://github.com/seanhegarty/IS1113117444494/graphs/commit-activity" class="button button8">GitHub</a></li>
    </ul>
        
            <!--Heading-->
            <h1 class="headingpayment"> Payment Details </h1>

            <!--links items to EBus3.php-->
            <form name = "myForm"  method="POST" action="EBus3.php">
                    
                    <br>
                    
                    <!--Textboxes to enter user details-->
                    <label for = "name">
                    <strong>Full Name:</strong>
                    <br>
                    <input type ='text' id ="name" name = "name"/>
                    </label>
                    
                    <br>
                    <br>
                    
                    <label for = "email">
                    <strong> Email:</strong>
                    <br>
                    <input type = "email" id ="email" name="email"/>
                    </label>
                    
                    <br>
                    <br>
                    
                    <label for = "user_number">
                    <strong>Card Number</strong></label>
                    <br>
                    <input type = "text" id ="user_number" name="user_number" maxlength="16"/>
               
                    <br>
                    <br>
                
                    <label for="user_pin">
                    <strong>PIN:</strong>
                    </label>
                    
                    <br>
                    
                    <!--type password for PIN-->
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    <br>
                    <br>
                    <br>
                <button class="button button22" type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
              
            </form>
            
            <div class="validatebtn">
            <button class="button button33" onClick="validateDetails()">Validate</button>
            </div>
          
            <?php
            //set session variable 
            $_SESSION["total"]=$_POST["total"];
           
            ?>
        
        <script type="text/javascript" src="EBus2_validator.js"></script>
        
        <div class="homebutton">
        <form method ="get" action="../homepage.html">    
        <button class="button button44">Home</span></button>
        </form>
        </div>
        
    </body>
    
    
    
</html>