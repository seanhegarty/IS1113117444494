<?php
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECIPT</title>
    </head>
    <body>
        <h4>RECIPT</h4>
        
        <?php
        //Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>