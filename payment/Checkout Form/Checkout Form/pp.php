<?php
  if(isset($_GET['submit'])){
    $cardholder_name =$_GET['cdname'];
    $card_number =$_GET['cno'];
    $exp_date =$_GET['expdt'];
    setcookie("cardholder_name", $cardholder_name, time() + (86400 * 30), "/"); // 86400 = 1 day
    setcookie("card_no", $card_number, time() + (86400 * 30), "/");
    header("Location: payementform.php");
  }
  else{
    echo "Not here";
  }
?>
