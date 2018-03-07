<DOCTYPE! html>
    <html>
        <head>
            <title> Select Product</title>
            
            
            
            <!--jQuery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type="text/javascript" src="cost_calc.js"> </script>
        </head>
        
        <body class="paymentbackground">
            
            <PHP><head><link href ="EBus.css" rel= "stylesheet" type="text/css"></head></PHP>
            <h1 class="headingpayment"> Select a product </h1>
            <br>
            <form method="POST" action="EBus2.php">
                <label for="salesforce"> 
                    <input type ="radio" id="salesforce" name="product" checked="Checked" onClick="disablebtnProceed()"/>
                    
                    Salesforce @ $100
                </label>
                
                <br>
                
                <label for="Cloud9">
                    <input type ="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                    Cloud 9 @ $200
                </label>
                
                <br>
                
                <label for="aws">
                    <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                    Amazon Web Services @ $300
                </label>
                
                <br>
                
                <label for="GMail">
                    <input type ="radio" id="gmail" name="product"  onClick="disablebtnProceed()"/>
                    GMail @ $400
                </label>
                
                <br>
                <br>
                
                <label for="subtotal">
                    Sub Total
                    <input type="text" id="subtotal" value="0.00" readonly/>
                </label>
                
                <br>
                
                <label for="discount">
                    Discount @ 5%
                    <input type="text" id="discount" name="discount" readonly/>
                </label>
                
                <br>
                
                <label for="vat">
                    VAT @ 10%
                    <input type="text" id="vat" name="vat" readonly/>
                </label>
                
                <br>
                
                <label for="total">
                    Total
                    <input type="text" id="total" name="total" value="0.00" readonly/>
                </label>
                
                <br>
                <div class="shoppingcart">
                <button class="button button3" type="submit" id="btnProceed" disable> Add to Shopping Cart</button>
                </div>
            
            </form>
            
            <button class="button button2" onClick="calcSub();calcDisVatTotal()"> Calculate Cost</button>
            <br>
            <a href="EBus1.php"><input type="button" class="button button1"  value="Clear"></a>
            
        </body>
        
    </html>
</DOCTYPE>
