function validate(){
var phone = document.forms["RegForm"]["phn"];  
var email=document.forms["RegForm"]["email"];




var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
document.RegForm.email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.RegForm.email.focus();
return false;
}


    if (phone.value == "")                           
{ 
window.alert("Please enter your telephone number."); 
phone.focus();
return false; 
}

else if(!isNaN(phone.value) /*phone.value == isNaN(phone.value)*/)
{
alert("number confirmed");
}
else{
window.alert("please enter numbers only");
}   

}