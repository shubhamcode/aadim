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
            $a=mysql_query("Select * from farming where uid='$u'",$con);
            $rl=mysql_fetch_array($a);
		 }
?>

<h3>Below are the details of the farmers:</h3>
<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">खेती की स्थिति</h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">1.	क्या किसान रोपा लगाता है ? (हाँ / नहीं) : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">2.	क्या किसान श्री विधि से खेती करता है ? (हाँ / नहीं) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[2]; ?>></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">3.	कितने साल से ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">4.	कितने क्षेत्र में ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[4]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">5.	धान की कौनसी किस्में लगाता है ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[5]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">6.	क्या किसान धान को सोसायटी में बेचता है ? कितने रुपये का धान बेचता है ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[6]; ?>></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">7.	क्या किसान मोचो बाड़ी में सब्जी उत्पादन करता है ? (हाँ / नहीं) : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[7]; ?>></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">8.	सब्जियों के नाम लिखे </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[8]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">9.	क्या किसान सब्जी बाजार में बेचता है ? (हाँ / नहीं) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[9]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">10.	कहाँ बेचता है ? हर बाजार में कितने रुपये की सब्जी बेचता है ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[10]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">11.	किसान रागी , कोदो , कोसरा में से कौनसी फसल लगाता है  ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[11]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">12.	किसान दलहन में से कौनसी फसल लगाता है – उड़द, मूंग, कुलथी, अरहर</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[12]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">13.	किसान तिलहन में से कौनसी फसल लगाता है – तील, रामतिल, सरसों, सूरजमुखी</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[13]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">14.	किसान मसाला में से कौनसी फसल लगाता है – हलदी, अदरक</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[14]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">15.	किसान के पास फलदार वृक्ष कौनसे और कितने है ?  
</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[15]; ?></td></tr>
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