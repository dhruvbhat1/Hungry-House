<!DOCTYPE html>
<?php
  if(isset($_POST['submit'])){
    $cardholder_name = $_POST['cdname'];
    $card_number = $_POST['cno'];
    $exp_date = $_POST['expdt'];
    setcookie($cardholder_name, $card_number, time() + (86400 * 30), "/"); // 86400 = 1 day
    echo "<"
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Responsive Checkout Form</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <link rel="shortcut icon" type="image/png" href="\HTML PROJECT\logo\final.png">
    <link rel="stylesheet" href="ch22.css">
</head>   


<body>
  <!-- <?php
if(isset($_COOKIE['$cardholder_name'])) {
     echo "Cookie named '" . $cardholder_name. "' is not set!";
} else {
     echo "Cookie '" . $cardholder_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cardholder_name];
}
?> -->
  <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#252e39",
      "text": "#ffdddd"
    },
    "button": {
      "background": "#14a7d0"
    }
  },
  "theme": "classic"
});
</script>
 <form action="" method="get">

<div class="wrapper">
  <div class="container">
    <div class="title">HUNGRYHOUSE</div>
    
    <div class="input-form">
      
      <div class="section-2">
        <div class="items">
          <label class="label">Name</label>
          <input type="text" name="cdname" class="input"  placeholder="Ross Geller">
        </div>
      </div>
      <div class="section-1">
        <div class="items">
          <label class="label">card number</label>
          <input type="text" name="cno" class="input" data-mask="0000 0000 0000 0000" placeholder="1234 1234 1234 1234">
        </div>
      </div>
      <div class="section-3">
        <div class="items">
          <label class="label">Expire date</label>
          <input type="text" name="expdt" class="input" data-mask="00/00" placeholder="MM/YY">
        </div>
        <div class="items">
          <div class="cvc">
            <label class="label">CVC code</label>
            <div class="tooltip">?
              <div class="cvc-img"><img src="p3.png" alt=""></div>
            </div>
          </div>
          <input type="text" name="cvcno" class="input" maxlength="3" placeholder="000">
        </div>

      </div>
       <input type="checkbox" name="remember" value="Remembered" style="color: black;" checked="true">Remember Card Details
    </div>
    
    <input class ="btn" type="submit" name-"submit" value="Proceed to checkout" onclick="prompt('Enter the OTP')">
    <!-- <button class="btn" onclick="prompt('Enter the OTP')">Proceed to checkout</button> -->
    
     
    
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
  </form>
</body>
</html>