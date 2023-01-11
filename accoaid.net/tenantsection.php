<?php
    
	include "dbconnect.php";
	if(session_id()==="") session_start();
	$TID=$_SESSION['TID'];
	$TName=$_SESSION['TName'];
	
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>AccoAid</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="main_container">
  <div id="header">
    <div id="logo"> <a href="index.php"><img src="images/logo.gif" width="147" height="78" alt="" border="0" /></a> </div>
    <div class="banner_adds"></div>
    <div class="menu">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="adminlogin.php">Admin
          <!--[if IE 7]><!-->
          </a>
          <!--<![endif]-->
          <!--[if lte IE 6]><table><tr><td><![endif]-->
          <ul>
            <li><a href="#"></a></li>
            </ul>
          <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><a href="tenantlogin.php">Login
          <!--[if IE 7]><!-->
          </a>
          <!--<![endif]-->
          <!--[if lte IE 6]><table><tr><td><![endif]-->
          <ul>
            <li><a href="#"></a></li>
            </ul>
          <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><a href="#">About Us </a></li>
       
        <li><a href="index.php">Logout</a></li>
      </ul>
    </div>
  </div>
  
  
  <div id="main_content">
    <div class="column1">
      <div class="left_box">
        <div class="top_left_box"> </div>
        <div class="center_left_box">
          <div class="box_title"><span>Find</span> your place:</div>
          <div class="form">
            <form action="tenantsection.php" method=POST>
			<div class="form_row">
              <label class="left">Area: </label>
              <input type="text" name="Area" class="form_input"/>
            </div>
            <div class="form_row">
              <label class="left">Price: </label>
              <input type="Number" name="RentFrom" class="form_input" value="minimum"/>
            </div>
            <div class="form_row">
              <label class="left">To: </label>
              <input type="Number"  name="RentTo" class="form_input" value="maximum"/>
            </div>
            <div style="float:right; padding:10px 25px 0 0;">
              <input type="image" src="images/find.gif"/>
            </div>
			</form>
          </div>
        </div>
        <div class="bottom_left_box"> </div>
      </div>
      <div class="left_box">
        <div class="top_left_box"> </div>
        <div class="center_left_box">
          <div class="box_title"><span>Tenant</span> Information</div>
          <div class="form">
            <div class="form_row">
              <label ><?php echo "Welcome ".$TName; ?> </label>
			</div> 
             <div class="form_row">
             <label ><?php echo "Tenant ID:".$TID; ?> </label>
            </div>
            
          </div>
        </div>
        <div class="bottom_left_box"> </div>
      </div>
      <div class="left_box">
        <div class="top_left_box"> </div>
        <div class="center_left_box">
          <div class="box_title"><span>Contact</span> information:</div>
          <div class="form">
            <div class="form_row"> <img src="images/contact_envelope.gif" width="50" height="47" border="0" class="img_right" alt="" />
                <div class="contact_information"> Email: info@aoaid.net<br />
                Mobile: 8426094242<br />
                Mobile: 8473056082<br />
                Mobile: 9365762277<br />
                Mobile: 7002489036<br />
                
				<br />
                <span>www.accoaid.net</span> </div>
            
            </div>
          </div>
        </div>
        <div class="bottom_left_box"> </div>
      </div>
    </div>
    <!-- end of column one -->
    <div class="column4">
      <div class="title" style="float:left;">
        <div style="float:left;">Property Listing</div>
        <div style="float:right; font-size:10px;color:#d8325d;padding-top:2px;">display: <a href="#"><img src="images/list_style3.gif" border="0" /></a> <a href="#"><img src="images/list_style1_a.gif" border="0" /></a> <a href="#"><img src="images/list_style2.gif" border="0" /></a> </div>
      </div>
      
	  <?php
	  
	   if (isSet($_POST['Area']))
	   {
	    $Area=$_POST['Area'];
	   }
       else
	   {
		   $Area="";
	   }
       
	   if (isSet($_POST['RentFrom']))
	   {
	    $RentFrom=$_POST['RentFrom'];
	   }
       else
	   {
		   $RentFrom="";
	   }	   
       
	   if (isSet($_POST['RentTo']))
	   {
	    $RentTo=$_POST['RentTo'];
	   }
       else
	   {
		   $RentTo="";
	   }	   
       
	 
	   
	   
       if ($Area<>"" && $RentFrom=="" && $RentTo=="")
	   {		   
	      	$rs=mysqli_query($Con,"select * from Property where area like '%".$Area."%' order by rent");
	   
	   }
      else if ($Area<>"" && $RentFrom<>"" && $RentTo<>"")
	   {		   
	      	$rs=mysqli_query($Con,"select * from Property where area like '%".$Area."%' and Rent>=".$RentFrom." and Rent<=".$RentTo." order by rent");
	   
	   }	   
	   else if ($RentFrom<>"" && $RentTo<>"")
	   {		   
	      	$rs=mysqli_query($Con,"select * from Property where Rent>=".$RentFrom." and Rent<=".$RentTo." order by rent");
	   
	   }    
	   
	 	else
		{
			$rs=mysqli_query($Con,"select * from Property order by rent");
	    }	 
	   while($data=mysqli_fetch_row($rs))
	   {
	    echo "<div class='offer_box_wide_style1'> <a href='#'><img src='".$data[11]."' width='130' height='98' class='img_left' alt='' border='0'/></a>";
        echo "<div class='offer_info'> <span>For Rent @".$data[5]."</span>";
        echo "<div class='offer_info'> <span>Deposit Amount:".$data[6]."</span>";
        echo "<p class='offer'>".$data[7]."</p>";
		echo "<p class='offer'>Area:".$data[8]."</p>";
		echo "<p class='offer'> Status:".$data[10]."</p>";
		echo "<div class='more'><a href='bookProperty.php?PID=".$data[0]."'>Book This Property </a>   |   <a href='booktime.php?PID=".$data[0]."'>Book Your Visiting Time....</a></div>";
        echo "</div>";
        echo "</div>";
		echo "</div>";
	   }
	  ?>
	  
	  <div class="pagination"> <span class="disabled"><<</span><span class="current">1</span><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">6</a><a href="#">7</a>�<a href="#">10</a><a href="#">11</a><a href="#">>></a> </div>
    </div>
    <!-- end of column four -->
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
