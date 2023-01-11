<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>AccoAid- Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="admin.css" />
</head>
<body>
<div id="main_container">
  <div id="header">
    <div id="logo"> <a href="index.php"><img src="images/logo1.gif" width="147" height="78" alt="" border="0" /></a> </div>
    <div class="banner_adds"></div>
    
  </div>
  <div id="main_content">
    <div class="admin_login">
      <div class="left_box">
        <div class="top_left_box"> </div>
        <div class="center_left_box">
          <div class="box_title"><span>Tenant</span> login</div>
          <div class="form">
            
			<div class="form_row">
			  <label>Returning Tenant </label>
            </div>
            <form action=tenantvarification.php method=POST>
			<div class="form_row">
			  <label class="left">Email: </label>
              <input type="email" name="Email" class="form_input"/>
            </div>
            <div class="form_row">
              <label class="left">Password: </label>
              <input type="password" name="Password" class="form_input"/>
            </div>
            <div style="float:right; padding:10px 25px 0 0;">
              <input type="image" src="images/login.gif"/>
            </div>
           </form>           
		   <div class="form_row">
              
              
            </div>
            <div style="float:right; padding:10px 25px 0 0;">
              <label style="font-size:2em">New Tenant?</label> <a href=newtenant.php><img src="images/join.gif"></img></a>
            </div>
          
		  </div>
        </div>
        <div class="bottom_left_box"> </div>
      </div>
    </div>
  </div>
  <!-- end of main_content -->
  <div id="footer">
    <div id="copyright">
      <div style="float:left; padding:3px;"><a href="#"><img src="images/footer_logo.gif" width="42" height="35" alt="" border="0" /></a></div>
      <div style="float:left; padding:14px 10px 10px 10px;"> AccoAid.&copy; All Rights Reserved 2022 - By AEC - CSE - 2022</div>
    </div>
  </div>
</div>
<!-- end of main_container -->
</body>
</html>
