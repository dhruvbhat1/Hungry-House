<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
<link rel="shortcut icon" type="image/png" href="\HTML PROJECT\logo\final.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="\HTML PROJECT\payment\Checkout Form\Checkout Form\Style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

.modal-box{ 
    font-family: 'Roboto Condensed', sans-serif; }

.modal-box .show-modal{
    color: #fff;
    background: #7b14f4;
    font-size: 18px;
    font-weight: 600;
    text-transform: capitalize;
    padding: 15px 55px;
     margin: 0 auto;
    margin-top: 3px;
    border: none;
    outline: none;
    display: block;
    transition: all 0.3s;
    border: 4px solid white;
    cursor: pointer;

}
.modal-box .show-modal:hover,
.modal-box .show-modal:focus{
    color: #fff;
    border: none;
    outline: none;
    text-decoration: none;
    text-shadow: 0 0 3px #000;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.4);
    border: 4px solid white;
    cursor: pointer;
}
.modal-backdrop.in{ opacity: 0; }
.modal-box .modal{ top: 70px !important; }
.modal-box .modal-dialog{
    width: 400px;
    margin: 30px auto 10px;
}
.modal-box .modal-dialog .modal-content{
    background: #DBECF6;
    border-radius: 25px;
    box-shadow: 0 0 25px -8px #555;
    position: relative;
    border: 4px solid white;
}
.modal-box .modal-dialog .modal-content:before{
    content: "";
    background: #7b14f4;
    width: 100%;
    height: 28%;
    border-radius: 25px 25px 0 0;
    position: absolute;
    top: -1px;
    left: 0;
}
.modal-box .modal-dialog .modal-content .close{
    color: #7b14f4;
    background-color: #fff;
    font-size: 20px;
    line-height: 28px;
    height: 28px;
    width: 28px;
    opacity: 1;
    border-radius: 50%;
    box-shadow: 0 0 5px #555;
    position: absolute;
    left: auto;
    right: -7px;
    top: -7px;
    z-index: 1;
    transition: all 0.3s;
}
.modal-box .modal-dialog .modal-content .close span{
    margin: 1px 0 0 0;
    display: block;
}
.modal-box .modal-dialog .modal-content .close:hover{
    color: #fff;
    background-color: #7b14f4;
    outline: none;
}
.modal-box .modal-dialog .modal-content .modal-body{ padding: 30px 30px !important; }
.modal-box .modal-dialog .modal-content .modal-body .icon{
    color: #F2F7FB;
    font-size: 80px;
    text-align: center;
    line-height: 100px;
    margin: 0 0 35px;
}
.modal-box .modal-dialog .modal-content .modal-body .title{
    color: #7b14f4;
    font-size: 45px;
    font-weight: 700;
    text-transform: uppercase;
    text-align: center;
    margin: 0 0 10px 0;
}
.modal-box .modal-dialog .modal-content .modal-body .description{
    color: #777;
    font-size: 13px;
    text-align: center;
    margin: 0 0 15px;
}
.modal-content .form-control{
    color: #7b14f4;
    font-size: 16px;
    text-align: center;
    letter-spacing: 1px;
    height: 45px;
    padding: 2px 15px 2px 15px;
    border-radius: 50px;
    display: inline-block;
    transition: all 0.3s;

}
.modal-content .form-control::placeholder{
    color: #909090;
    font-size: 14px;

}
.modal-content .form-control:hover,
.modal-content .form-control:focus{
    box-shadow: 0 0 0 transparent,0 0 0 transparent, 0 0 0 transparent;

}
.modal-box .modal-dialog .modal-content .modal-body .subscribe{
    color: #fff;
    background: #7b14f4;
    font-size: 18px;
    font-weight:700;
    text-transform: uppercase;
    padding: 10px 38px;
    margin: 0 auto;
    border: none;
    border-radius: 50px;
    overflow: hidden;
    display: block;
    position: relative;
    z-index: 1;
    transition: all 0.3s;
}
.modal-box .modal-dialog .modal-content .modal-body .subscribe:before{
    content: '';
    height: 100%;
    width: 100%;
    background: #7b14f4;
    border-radius: 50px;
    transform: scale(0.97,0.85);
    position: absolute;
    left: 0;
    top: 0;
    z-index: -1;
    transition: all 0.3s;
}
</style>

</head>
<body>
  




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


<div class="row">
<div class="col-75">
<div class="container">
<form action="pp.php" method="get">

<div class="row">
<div class="col-50">
<h3>Billing Address</h3>
<label for="fname"><i class="fa fa-user"></i> Full Name</label>
<input type="text" id="fname" name="firstname" placeholder="FirstName MiddleName SurName">
<label for="email"><i class="fa fa-envelope"></i> Email</label>
<input type="text" id="email" name="email" placeholder="FirstName@gmail.com">
<label for="adr"><i class="fa fa-address-card-o"></i>Select your country</label>
<select name="country" id="country" class="form-control input-lg">
<option value="">Select country</option>
</select>
<br>
<select name="state" id="state" class="form-control input-lg">
<option value="">Select state</option>
</select>
<br>
<select name="city" id="city" class="form-control input-lg">
<option value="">Select city</option>
</select>


</div>

<div class="col-50">
<h3>Payment</h3>
<label for="fname">Accepted Cards</label>
<div class="icon-container">
<i class="fa fa-cc-visa" style="color:navy;"></i>
<i class="fa fa-cc-amex" style="color:blue;"></i>
<i class="fa fa-cc-mastercard" style="color:red;"></i>
<i class="fa fa-cc-discover" style="color:orange;"></i>
</div>
<label for="cname">Name on Card</label>
<input type="text" id="cname" name="cdname" placeholder="John More Doe"  maxlength="40" minlength="2" >
<label for="ccnum">Credit card number</label>
<input type="text" id="ccnum" name="cno" class="input" placeholder="1111-2222-3333-4444" data-mask="0000 0000 0000 0000" minlength="16" maxlength="16">
<label for="expmonth">Exp Month</label>
<input type="text" id="expmonth" name="expdt" placeholder="September">
<div class="row">
<div class="col-50">
<label for="expyear">Exp Year</label>
<input type="text" id="expyear" name="expyear" maxlength="4" placeholder="2018">
</div>
<div class="col-50">
<label for="cvv">CVV</label><br>
<input type="password" id="cvv" name="cvv" maxlength="3" placeholder="352">
</div>
</div>
</div>

</div>
<label>
<input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
</label>
<a href="pp.php"><input type="submit" name="submit" href="pp.php" value="Continue To Checkout" class="btn" style="background-color: #2196f3" onclick="alert('Payment Recieved! Please Get Your Confirmation By Clicking The Button Below.')"></a>

</form>
<div class="modal-box">
<!-- Button trigger modal -->
<button type="button"   class="btn" style="background-color: #fe1739" data-toggle="modal" data-target="#myModal">
                  Get My Confirmation Message
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href= '/HTML PROJECT/team/team2.php';"><span aria-hidden="true">×</span></button>
<div class="modal-body">
<div class="icon"><i class="fa fa-check-square"></i></div>
<h3 class="title">Restaurant Booked</h3>
<p class="description">Your requested restaurant has been booked with booking ID: Res20Usr19 <br>Your information has been saved.</p>


</div>
</div>
</div>
</div>
</div>

</div>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudfare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){

 load_json_data('country');

 function load_json_data(id, parent_id)
 {
  var html_code = '';
  $.getJSON('country_state_city.json', function(data){

   html_code += '<option value="">Select '+id+'</option>';
   $.each(data, function(key, value){
    if(id == 'country')
    {
     if(value.parent_id == '0')
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
    else
    {
     if(value.parent_id == parent_id)
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
   });
   $('#'+id).html(html_code);
  });

 }

 $(document).on('change', '#country', function(){
  var country_id = $(this).val();
  if(country_id != '')
  {
   load_json_data('state', country_id);
  }
  else
  {
   $('#state').html('<option value="">Select state</option>');
   $('#city').html('<option value="">Select city</option>');
  }
 });
 $(document).on('change', '#state', function(){
  var state_id = $(this).val();
  if(state_id != '')
  {
   load_json_data('city', state_id);
  }
  else
  {
   $('#city').html('<option value="">Select city</option>');
  }
 });
});
</script>
</form>
</body>
</html>
