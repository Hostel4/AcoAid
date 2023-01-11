<?php
   include "dbconnect.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>AccoAid - Admin Section</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="admin.css" />
</head>
<body>
<div id="main_container">
  <div id="header">
    <div id="logo"> <a href="#"><img src="images/logo.gif" width="147" height="78" alt="" border="0" /></a> </div>
    <div class="banner_adds"></div>
    <div class="menu">
      <ul>
        <li><a href="#">Manage Property
          <!--[if IE 7]><!-->
          </a>
          <!--<![endif]-->
          <!--[if lte IE 6]><table><tr><td><![endif]-->
          <ul>
            <li><a href="#">Add Property</a></li>
            <li><a href="#">Display Property</a></li>
            <li><a href="#">Edit Property</a></li>
            
          </ul>
          <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
		
		<li><a href="#">Manage Lessor
          <!--[if IE 7]><!-->
          </a>
          <!--<![endif]-->
          <!--[if lte IE 6]><table><tr><td><![endif]-->
          <ul>
            <li><a href="#">Block Lessor</a></li>
            <li><a href="lessorlist.php">Lessor List</a></li>
            <li><a href="#">Edit Lessor</a></li>
            
          </ul>
          <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
		
        <li><a href="#">Manage Tenant
          <!--[if IE 7]><!-->
          </a>
          <!--<![endif]-->
          <!--[if lte IE 6]><table><tr><td><![endif]-->
          <ul>
            <li><a href="#">Block Tenant</a></li>
            <li><a href="#">Tenant List</a></li>
            <li><a href="#">Edit Tenant</a></li>
            
          </ul>
          <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><a href="index.php">Logout</a></li>
      </ul>
    </div>
  </div>
  <div id="main_content">
    <div id="admin_header">
      <div class="admin_index_title">Tenant List</div>
      <div class="right_buttons">
      </div>
    </div>
    <div id="admin_header_border"></div>
    <div id="admin_search_tab">
      
      <label class="search">
      
      </label>
    </div>
    <div>
	  <?php
	  
	      include "dbconnect.php";
		  $rs=mysqli_query($Con, "select TID, Name, PhoneNo, email, password from tenant");
		  
		  echo "<table>";
		  echo "<tr><td>Tenant ID</td><td>Tenant Name </td><td>Phone No </td><td> Email</td><td> Password</td></tr>";
		  
		  while($data=mysqli_fetch_row($rs))
		  {
			  echo "<tr>";
              for($i=0;$i<5;$i++)
			  {
				  echo "<td>".$data[$i]."</td>";
			  }				
             echo "</tr>"; 			  
		  }
		  
		  echo "</table>";
	  
	  ?>
	  
	</div>
	
    <div class="admin_footer_help"> Admin help section here Admin help section here Admin help section here Admin help section here Admin help section here </div>
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
