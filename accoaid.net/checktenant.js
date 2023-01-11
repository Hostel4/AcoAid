function verify()
{
var Name = document.form1.Name.value;
if (Name === "")
{
alert("Please Enter name");
return false;
}

var PhoneNo = document.form1.PhoneNo.value;
if (PhoneNo === "")
{
alert("Please Enter Phone No");
return false;
}

var Password = document.form1.Password.value;
var CPassword = document.form1.CPassword.value;

if (Password != CPassword)
{
alert("Password and Confirm Password is Not Matching");
return false;
}



return true; 

}