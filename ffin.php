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
            $a=mysql_query("Select * from financial where uid='$u'",$con);
            $rd=mysql_fetch_array($a);
		 }
?>

<h3>Below are the details of the farmers:</h3>
<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">किसान की आर्थिक स्थिति </h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">1.	किसान का घर (मिटटी / ईटा) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[1]; ?></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">2.	छत (खपरा / शीट / स्लैब) </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">19ZM2pjq6U4jVb283GZkCPNukjeyb2YZ2u</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">3.	किसान के पास वाहन  (सायकल / बाइक / पिक अप / बोलेरो / टाटा मैजिक / अन्य)</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[4]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">4.	टीवी है ? (हाँ / नहीं ) : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[5]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">5.	म्यूजिक सिस्टम है ? (हाँ / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[6]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">6.	फ्रिज है ? (हाँ / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[7]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">7.	मोबाईल फ़ोन है ? (हाँ / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[8]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">8.	घर में बैठने के लिए क्या है ? (जैसे की : कुर्सी / सोफा / पलंग) </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[9]; ?></td></tr>
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