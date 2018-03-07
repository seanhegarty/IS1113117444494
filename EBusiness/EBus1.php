<DOCTYPE! html>
    <html>
        <head>
            <title> Select Product</title>
            
            
            
            <!--jQuery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type="text/javascript" src="cost_calc.js"> </script>
        </head>
        
        <!--specialised class for design of body in EBus.css-->
        <body class="paymentbackground">
         
         
         <!--navigation bar-->   
    <ul>
    <li><a href="../CV/cv_page1.html" class="button button1">Curriculum Vitae</a></li>
    <li><a href="../interests/travel.html" class="button button5">Travel</a></li>
    <li><a href="../interests/sports.html" class="button button2">Sports</a></li>
    <li><a href="../interests/cloudservices.html" class="button button4">Cloud Servies</a></li>
    <li><a href="../interests/raven.html" class="button button10">Raven .Ltd</a></li>
    <li><a href="EBus1.php" class="button button3">E Business</a></li>
    <li style="float:right"><a href="https://github.com/seanhegarty/IS1113117444494/graphs/commit-activity" class="button button8">GitHub</a></li>
    </ul>
            <!--link for style sheet EBus.css-->
        <PHP><head><link href ="EBus.css" rel= "stylesheet" type="text/css"></head></PHP>
            
            <!--Heading-->
        <h1 class="headingpayment"> Select a product </h1>
            <!--Page Break-->
        <br>
            <!--Links items to EBus2-->
            <form method="POST" action="EBus2.php">
                
            <!--Creation of radio buttons for product options (assigned with prices)-->    
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
                
                <!--creats a text box which displays the subtotal/discount/VAT/Total-->
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
                
                <!--Buttons-->
                <br>
                <div class="shoppingcart">
                <button class="button button33" type="submit" id="btnProceed" disable> Add to Shopping Cart</button>
                </div>
            
            </form>
            
            <button class="button button22" onClick="calcSub();calcDisVatTotal()"> Calculate Cost</button>
            <br>
            <a href="EBus1.php"><input type="button" class="button button11"  value="Clear"></a>
            
            <div class="homebutton">
            <form method ="get" action="../homepage.html">    
            <button class="button button44">Home</span></button>
            </form>
            </div>
            
        </body>
        
    </html>
</DOCTYPE>
