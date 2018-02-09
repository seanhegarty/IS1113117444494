<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajaz.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <h4>Please enter your payment details</h4>
        
            <form action="EBus3.php" method="POST">
                
                    <label for="user_pin">PIN</label>
                    
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                    
                <button type="submit" id="btnPurchase" disabled>proceed with Purchase</button>
                
            </form>
            
            <br/>
            
            <button onClick="validateDetails()"> Validate </button>
            
        <script type=text/javascript" src=EBus2_validator.js"></script>
    </body>
    
</html>