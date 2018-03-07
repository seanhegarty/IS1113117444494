<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        <link href="EBus.css" rel="stylesheet" type="text/css"/>
        
         <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="number.js"></script>
      
     
     </head>
    <body class="paymentbackground">
    <h1>Receipt</h1>
             <?php
            //Echo session varaibles that were set to the previous page
        echo("<strong>Name: </strong>". $name);
        echo("<br><strong>Email: </strong>". $email);
        echo "<br><strong>Total: $</strong>" .$_SESSION["total"] ;
        ?>
    </body>
    </html>
