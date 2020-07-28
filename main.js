var logincontainer = document.querySelector('#logincontainer');
var registercontainer = document.querySelector('#registercontainer');
var registertab = document.querySelector('#register-tab');
var logintab = document.querySelector('#login-tab');
var loginlink = document.querySelector('.loginlink');
var registerlink = document.querySelector('.registerlink');

registertab.addEventListener('click', function () {
   registeractive();
});

logintab.addEventListener('click', function () {
   loginactive();
});

loginlink.addEventListener('click', function () {
   loginactive();
});

registerlink.addEventListener('click', function () {
   registeractive();
});

function loginactive(){
	logincontainer.style.display = "block";
    registercontainer.style.display = "none";
    logintab.classList.add('active');
    registertab.classList.remove('active');
}


function registeractive(){
	logincontainer.style.display = "none";
    registercontainer.style.display = "block";
    registertab.classList.add('active');
    logintab.classList.remove('active');
}


function validation(){
	var first = document.getElementById('login-fname').value;
	var last = document.getElementById('login-lname').value;
	var email = document.getElementById('login-email').value;
	var mobile = document.getElementById('login-mobileno').value;
	var pass = document.getElementById('register-password').value;
	var confirm = document.getElementById('register-cnfmpassword').value;
	


	if(first == ""){
        document.getElementById('firstname').innerHTML=" **Please fill the firstname";
		return false;
	}

	if((first.length<=2) || (first.length>20)){
		document.getElementById('firstname').innerHTML=" ** firstname length should be in between 2 to 20";
		return false;
    }
    if(!isNaN(first)){
    	document.getElementById('firstname').innerHTML=" ** only alphabets are allowed";
		return false;
    }

	if(last == ""){
        document.getElementById('lastname').innerHTML=" **Please fill the lastname";
		return false;
	}
	if((last.length<=2) || (last.length>20)){
		document.getElementById('lastname').innerHTML=" ** lastname length should be in between 2 to 20";
		return false;
    }
    if(!isNaN(last)){
    	document.getElementById('lastname').innerHTML=" ** only alphabets are allowed";
		return false;
    }



	if(email == ""){
        document.getElementById('emailaddress').innerHTML=" **Please fill the email address";
		return false;
	}
	if(email.indexOf('@') <= 0){
		document.getElementById('emailaddress').innerHTML=" ** @ Invalid position ";
		return false;
	}
	if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
		document.getElementById('emailaddress').innerHTML=" **  Invalid position ";
		return false;
	}


	if(mobile == ""){
        document.getElementById('mobilenos').innerHTML=" **Please fill the mobile number";
		return false;
	}
	if(isNaN(mobile)){
        document.getElementById('mobilenos').innerHTML=" **no characters are allowed";
		return false;
	}
	if(mobile.length!=10){
        document.getElementById('mobilenos').innerHTML=" **Please fill the 10 digit mobile number ";
		return false;
	}

    
	if(pass == ""){
        document.getElementById('passwords').innerHTML=" **Please fill the password";
		return false;
	}
	if((pass.length <=8) || (pass.length > 10)){
		document.getElementById('passwords').innerHTML=" ** password length should be in between 8 to 10";
		return false;
    }
    if(pass!=confirm){
    	document.getElementById('passwords').innerHTML=" ** password are not matching";
		return false;
    }


	if(confirm == ""){
        document.getElementById('confirmpasswords').innerHTML=" **Please fill the confirm password";
		return false;
	} 
	if((confirm.length <=8) || (confirm.length > 10)){
		document.getElementById('confirmpasswords').innerHTML=" ** confirm password length should be in between 8 to 10";
		return false;
    }
    if(confirm!=pass){
    	document.getElementById('confirmpasswords').innerHTML=" ** confirm password is not matching";
		return false;

    }
}
function validation1(){
	if(username == first){
		 document.getElementById('username').innerHTML=" **Please fill the username";
		return false;

	}
}





