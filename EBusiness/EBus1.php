<DOCTYPE! html>
    <html>
        <head>
            <title> Select Product</title>
            
            
            
            <!--jQuery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type="text/javascript" src="cost_calc.js"> </script>
        </head>
        
        <body>
            
            <PHP><head><link href ="Ebus.css" rel= "stylesheet" type="text/css"></head></PHP>
            <h4> Select a product </h4>
            <br>
            <form method="POST" action="EBus2.php">
                <label for="salesforce">
                    <input type ="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                    Salesforce @ $100
                </label>
                
                <br>
                
                <label for="aws">
                    <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                    AWS @ $300
                </label>
                
                <br>
                <br>
                
                <label for="subtotal">
                    Sub Total
                    <input type="text" id="subtotal" value="0.00" readonly/>
                </label>
                
                <br>
                
                <label for="total">
                    Total
                    <input type="text" id="total" value="0.00" readonly/>
                </label>
                
                <br>
                
                <button type="submit" id="btnProceed" disabled> Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button onClick="calcSub()" > Calculate Cost</button>
            <a href="EBus1.php"><input type="button" class="clear"  value="Clear"></a>
            
        </body>
        
    </html>
</DOCTYPE>
