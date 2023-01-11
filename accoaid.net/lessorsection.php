<?php
   include "dbconnect.php";
   if(session_id()==="") session_start();
   $LID=$_SESSION['LID'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>AccoAid - Lessor Section</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="admin.css" />
</head>
<body>
<div id="main_container">
  <div id="header">
    <div id="logo"> <a href="index.php"><img src="images/logo.gif" width="147" height="78" alt="" border="0" /></a> </div>
    <div class="banner_adds"></div>
    <div class="menu">
      <ul>
        <li><a href="list.html">Manage Property
          <!--[if IE 7]><!-->
          </a>
          <!--<![endif]-->
          <!--[if lte IE 6]><table><tr><td><![endif]-->
          <ul>
            <li><a href="addproperty.php">Add Property</a></li>
            <li><a href="#">Display Property</a></li>
            <li><a href="#">Edit Property</a></li>
            
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
      <div class="admin_index_title">Manage Property</div>
      <div class="right_buttons">
        <div class="right_button"><a href="addproperty.php">Add new Prperty</a></div>
        <div class="right_button"><a href="#">Delete Selected</a></div>
      </div>
    </div>
    <div id="admin_header_border"></div>
    <div id="admin_search_tab">
      <label class="search" style="padding-top:3px;">Search an offer: </label>
      <label class="search">
      <input type="text" name="search" class="search_input" />
      </label>
      <label class="search"><a href="#"><img src="images/adminicons/search.png" alt="" border="0" /></a> </label>
    </div>
    <div class="table_grid">
      <table cellspacing="0" cellpadding="0">
        <tr>
          <th style="width:10px;">Select</th>
          <th style="width:20px;"><a href="#" class="pink">ID</a></th>
          <th style="width:50px;"><a href="#" class="pink">Picture</a></th>
          <th style="width:auto;"><a href="#" class="pink">Description</a></th>
          <th style="width:auto;"><a href="#" class="pink">Address</a></th>
          <th style="width:auto;"><a href="#" class="pink">Rent</a></th>
		  <th style="width:auto;"><a href="#" class="pink">Deposit</a></th>
		  <th style="width:auto;"><a href="#" class="pink">Status</a></th>
          
          
          <th style="width:50px;"><a href="#" class="pink">Visiting Info</a></th>
          <th style="width:50px;"><a href="#" class="pink">Booking Info</a></th>
		  <th style="width:50px;"><a href="#" class="pink">Edit</a></th>
          <th style="width:50px;"><a href="#" class="pink">Delete</a></th>
        </tr>
        
		<?php
		   $rs=mysqli_query($Con,"select PID,Image,Description,Address,Rent,DepositAmount,Status from Property where LID='".$LID."'");
		   $Type="odd";
		   
		   while($data=mysqli_fetch_row($rs))
		   {
		     if($Type=="odd") 
			 {
				 echo "<tr class='even'>";
				 $Type="even";
			 }	 
			 else
			 {
				 echo "<tr class='odd'>";
				 $Type="odd";
			 }
            $PID=$data[0];
			echo "<td><input type='checkbox' name='checkbox' /></td>";
            echo "<td>".$PID."</td>";
            echo "<td><img alt='' src='".$data[1]."' width='53' height='39' border='0' /></td>";
            echo "<td>".$data[2]."</td>";
			echo "<td>".$data[3]."</td>";
			echo "<td>".$data[4]."</td>";
			echo "<td>".$data[5]."</td>";
			echo "<td>".$data[6]."</td>";
			
            echo "<td><a href='BookingInfo.php?PID=".$PID."'><img alt='' src='images/adminicons/edit.png' width='22' height='22' border='0' /></a></td>";
            echo "<td><a href='Bookinginfo1.php?PID=".$PID."'><img alt='' src='images/adminicons/edit.png' width='22' height='22' border='0' /></a></td>";
            echo "<td><a href='editoffer.html'><img alt='' src='images/adminicons/edit.png' width='22' height='22' border='0' /></a></td>";
            echo "<td><a href='deleteproperty.php?PID=".$PID."'><img alt='' src='images/adminicons/delete.png' width='24' height='24' border='0' /></a></td>";
            echo "</tr>";
		   }
        ?>
		
      </table>
    </div>
    <div class="pagination"> <span class="disabled">prev</span> <span class="current">1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <a href="#">7</a>...<a href="#">199</a> <a href="#">200</a> <a href="#">next</a> </div>
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
