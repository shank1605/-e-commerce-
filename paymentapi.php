<?php

//Set useful variables for paypal form
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; 
//Test PayPal API URL
$paypalID = 'pranjalsk90-phpbatch34seller@gmail.com'; 
//Business Email
$name="bike";
$price=1000;
$item_no=1;
?>
<img src="logo.jpeg" height="200" width="200" />
    Name: <?php echo $name; ?>
    Price: <?php echo $price; ?>
    <form action="<?php echo $paypalURL; ?>" method="post">
        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $name; ?>">
        <input type="hidden" name="item_number" value="<?php echo $item_no; ?>">
        <input type="hidden" name="amount" value="<?php echo $price; ?>">
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/phpbatch34/myapp/cancel.php'>
        <input type='hidden' name='return' value='http://localhost/phpbatch34/myapp/success.php'>
        
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    </form>


