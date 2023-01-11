<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>AccoAid - Add Property</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="admin.css" />
<script>
function verify()
{

var Floor = document.form1.Floor.value;
if (Floor === "")
{
alert("Please Enter Floor");
document.getElementById("Floor").focus();
return false;
}

var Rent = document.form1.Rent.value;
if (Rent === "")
{
alert("Please Enter Rent");
document.getElementById("Rent").focus();
return false;
}

var Deposit = document.form1.Deposit.value;
if (Deposit === "")
{
alert("Please Enter Deposit");
document.getElementById("Deposit").focus();
return false;
}

var Description = document.form1.Description.value;
if (Description === "")
{
alert("Please Enter Description");
document.getElementById("Description").focus();
return false;
}



var Area = document.form1.Area.value;
if (Area === "")
{
alert("Please Enter Area");
document.getElementById("Area").focus();
return false;
}

var Address = document.form1.Address.value;
if (Address === "")
{
alert("Please Enter Address");
document.getElementById("Address").focus();
return false;
}

var UploadFile = document.form1.UploadFile.value;

if (UploadFile === "")
{
alert("Please Upload Image");
document.getElementById("UploadFile").focus();
return false;
}

return true; 

}
</script>

</head>
<body>
<div id="main_container">
  <div id="header">
    <div id="logo"> <a href="#"><img src="images/logo.gif" width="147" height="78" alt="" border="0" /></a> </div>
    <div class="banner_adds"></div>
    <div class="menu">
      <ul>
        <li><a href="#">Admin Home</a></li>
        <li><a href="list.html">Manage Offers
          <!--[if IE 7]><!-->
          </a>
          <!--<![endif]-->
          <!--[if lte IE 6]><table><tr><td><![endif]-->
          <ul>
            <li><a href="#"></a></li>
            
          </ul>
          <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><a href="#">Manage Customers</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
    </div>
  </div>
  <div id="main_content">
    <div id="admin_header">
      <div class="admin_addoffer_title">Add new Property</div>
      <div class="right_buttons">
        <div class="right_button"><a href="#">Save offer</a></div>
        <div class="right_button"><a href="#">Back to main</a></div>
      </div>
    </div>
    <div id="admin_header_border"></div>
    <div class="add_tab">
     <form action=addnewproperty.php method=POST enctype="multipart/form-data" name=form1 onsubmit="return verify()">     
	 <div class="form_contact">
      
       <div class="adminform_row_contact">
          <label class="adminleft">Property: </label>
          <select class="form_select" name=PropertyType>
             <option value=1BHK>1BHK</option>
		   <option value=2BHK>2BHK</option>
		   <option value=3BHK>3BHK</option>
          </select>
        </div>
      

	   <div class="adminform_row_contact">
          <label class="adminleft">Furnished: </label>
          <select class="form_select" name=FirnishedStatus>
           <option value='Unfirnished'>Unfirnished</option>
		   <option value='Fully Furnished'>Fully Firnished</option>
		   <option value='Unfirnished'>Unfirnished</option>
		  </select>
        </div>
      
       
        

	    <div class="adminform_row_contact">
          <label class="adminleft">Floor: </label>
          <input type="text" name="Floor" id="Floor"class="form_input_contact"/>
        </div>
       
         <div class="adminform_row_contact">
          <label class="adminleft">Rent: </label>
          <input type="Number" name="Rent" id="Rent" class="form_input_contact"/>
        </div>
       
	    <div class="adminform_row_contact">
          <label class="adminleft">Deposit: </label>
          <input type="Number" name="Deposit" id="Deposit" class="form_input_contact"/>
        </div>
      
	   <div class="adminform_row_contact">
          <label class="adminleft">Description: </label>
          <textarea name="Description" id="Description" rows="" cols="" ></textarea>
        </div>
      
        <div class="adminform_row_contact">
          <label class="adminleft">Area: </label>
          <input type="text" name="Area" id="Area" class="form_input_contact"/>
        </div>
      	  
	    <div class="adminform_row_contact">
          <label class="adminleft">Address: </label>
          <textarea name="Address" id="Address" rows="" cols="" ></textarea>
        </div>
       
	   <div class="adminform_row_contact">
          <label class="adminleft">Status: </label>
          <select class="form_select" name=Status>
           <option value='Available'>Available</option>
		   <option value='Occupied'>Occupied</option>
		  </select>
        </div>
      
	   
	    <div class="adminform_row_contact">
          <label class="adminleft">Picture: </label>
          <input type="file" name="UploadFile" id="UploadFile" class="form_input_contact"/>
		 	   
        </div>
        <div style="float:right; padding:10px 25px 0 0;">
          <input type=submit value=Submit></input>
        </div>
      </div>
	  </form>
    </div>
    <div class="admin_footer_help"> Admin help section here Admin help section here Admin help section here Admin help section here Admin help section here </div>
  </div>
  <!-- end of main_content -->
<div id="footer">
    <div id="copyright">
      <div style="float:left; padding:3px;"><a href="#"><img src="images/footer_logo.gif" width="42" height="35" alt="" border="0" /></a></div>
      <div style="float:left; padding:14px 10px 10px 10px;"> AccoAid.&copy; All Rights Reserved 2022 - By AEC-CSE-2022</div>
    </div>
   </div>
</div>
<!-- end of main_container -->
</body>
</html>
