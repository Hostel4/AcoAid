<?php
   include "dbconnect.php";
   mysqli_query($Con,"delete from Property where PID='".$_GET['PID']."'");
   include "lessorsection.php";
 ?>
 