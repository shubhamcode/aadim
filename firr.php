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
            $a=mysql_query("Select * from irrigation where uid='$u'",$con);
            $rh=mysql_fetch_array($a);
		 }
?>

<h3>Below are the details of the farmers:</h3>
<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">सिंचाई साधन की स्थिति</h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">1.	सिंचाई हेतु पानी का स्त्रोत : नलकूप / कुआँ / नहर / नाला – नदी से पंप / तालाब से पंप </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rh[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">2.	क्या किसान के खेत में डबरी है ? (है / नहीं ) </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rh[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">3.	पंप की उपलब्धता (विद्युत् / डीजल , कितना hp) : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rh[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">4.	बिजली कनेक्शन की स्थिति (है / नहीं ) : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rh[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">5.	ड्रिप (है / नहीं) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rh[4]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">6.	स्प्रिंकलर सेट (है / नहीं ) : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rh[5]; ?></td></tr>
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