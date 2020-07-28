<?php 
 
    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['UName'];
       $Email = $_POST['Email'];
       $Subject = $_POST['Subject'];
       $Msg = $_POST['msg'];

       $to = "dhruvmangesh04@gmail.com";

       $headers = "From: ".$Email;

 
       if(empty($UserName) || empty($Email) || empty($Subject) || empty($Msg))
       {
           header('location:team2.php?error');
       }
       else
       {
           $to = "dhruvmangesh04@gmail.com";
 
           if(mail($to,$Subject,$Msg,$Email,$headers));
           {
           header("location:team2.php?success");
           }
       }
    }
    else
    {
        header("location:team2.php");
    } 





?>