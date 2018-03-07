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
    <ul>
    <li><a href="../CV/cv_page1.html" class="button button1">Curriculum Vitae</a></li>
    <li><a href="../interests/travel.html" class="button button5">Travel</a></li>
    <li><a href="../interests/sports.html" class="button button2">Sports</a></li>
    <li><a href="../interests/cloudservices.html" class="button button4">Cloud Servies</a></li>
    <li><a href="EBus1.php" class="button button3">E Business</a></li>
    <li style="float:right"><a href="https://github.com/seanhegarty/IS1113117444494/graphs/commit-activity" class="button button8">GitHub</a></li>
    </ul>
    
    
    <h1>Receipt</h1>
    
    
    <br>
    <br>
    <br>
             <?php
            /*Echo session varaibles from the previous page*/
        echo("<strong>Name: </strong>". $name);
        echo("<br><strong>Email: </strong>". $email);
        echo "<br><strong>Total: $</strong>" .$_SESSION["total"] ;
        ?>
    </body>
    </html>
