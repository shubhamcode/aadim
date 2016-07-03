<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin/farmerdetails</title>
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.js"></script>
<script type="text/javascript">
</script>
</head>
<form method="post">
<body>
<div id="cnt">
<table bgcolor="#330099" style="margin-left:10px;">
<?php
 $con=mysql_connect("localhost","root","");
        if(!$con)
        {echo"database not connected";}
        else
         { 
		    $u=$_POST['ud'];
            mysql_select_db("dantewada");
            $a=mysql_query("Select * from land where uid='$u'",$con);
            $re=mysql_fetch_array($a);
		 }
?>

<h3>Below are the details of the farmers:</h3>
<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">जमीन की जानकारी </h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">1.	कुल जमीन (एकड़ में): </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $re[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">जमीन का प्रकार </h3></td><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">रकबा (एकड़ में )</h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">महान</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $re[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">टिकरा</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $re[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">बेडा</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $re[4]; ?></td></tr>

<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">2.	पट्टा नं.</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $re[5]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">3.	वनाधिकार का पट्टा (है / नहीं )</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $re[6]; ?></td></tr>

</table>
</div>

</body>
</form>
</html>
<style>
#cnt
{
	background-color:#063;
	width:674px;
	height:546px;
	margin-top:-16px;
	}

</style>