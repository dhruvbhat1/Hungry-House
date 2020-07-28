<?php 
 
    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       $to = "dhruvmangeshb4@gmail.com";

       $headers = "From: ".$Email;

 
       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:home32.php?error');
       }
       else
       {
           $to = "dhruvmangeshb4@gmail.com";
 
           if(mail($to,$Subject,$Msg,$Email,$headers));
           {
           header("location:home32.php?success");
           }
       }
    }
    else
    {
        header("location:home32.php");
    } 





?>