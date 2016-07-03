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
            $a=mysql_query("Select * from croparea where uid='$u'",$con);
            $rf=mysql_fetch_array($a);
		 }
?>

<h3>Below are the details of the farmers:</h3>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">1.	किसान कितने क्षेत्र में कौनसी फसल लगाता है ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">फसल का प्रकार</h3></td><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">रकबा (एकड़ में) </h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">धान (रोपा से )</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[2]; ?></td></tr><tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">धान (बुनाई से)</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[3]; ?></td></tr><tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">सब्जी</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[4]; ?></td></tr><tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">कोदो/कोसरा/रागी</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[5]; ?></td></tr><tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">दलहन फसल</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[6]; ?></td></tr><tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">तिलहनी फसल</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[6]; ?></td></tr><tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">जोंधरा</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[7]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">2.	भूमि समतलीकरण की स्थिति </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[8]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">3.	खेत में मिटटी का कटाव</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[9]; ?></td></tr>
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