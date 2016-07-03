<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>srireport</title>
</head>
<form method="post">
<body>
<div id="d1">
<h3 style="position:fixed; left:10px;">WELCOME:<?php
session_start();
if((!$_SESSION['id'])||($_SESSION['id']==""))
{
  echo'<script type="text/javascript">alert("Session Expired.Please Log In Again");window.location=\'index.php\';</script>';
  exit;

}
else
     {
        $con=mysql_connect("localhost","root","");
        if(!$con)
        {echo"database not connected";}
        else
         { 
            mysql_select_db("dantewada");
            $a=mysql_query("Select * from alogin where mobile='$_SESSION[id]'",$con);
            $row=mysql_fetch_array($a);
               echo $row['name'];
         }
	 }
?></h3>
<input type=submit value=Logout name=logout id='btdlg'>

</div>


<div id="d2">
<br />
<table bgcolor="#330099" style=" margin:10px;">
<caption style="position:fixed;left:600px; top:18px;"><h2>SRI REPORT</h2></caption>
<tr style="height:100px;"><td width="5px;" bgcolor="#C00";><h3>SNo.</h3></td><td style="width:180px; background-color:#C00;"><h3>NameofFarmer</h3></td><td style="width:100px; background-color:#C00;"><h3>Hamlet</h3></td><td style="width:100px; background-color:#C00;"><h3>Gram Panchayat</h3></td><td style="width:100px; background-color:#C00;"><h3>Block</h3></td><td style="width:200px; background-color:#C00;"><h3>Name of RAEO</h3></td><td style="width:10px; background-color:#C00;"><h3>Area of Org. SRI(Ha.)</h3></td><td style="width:100px; background-color:#C00;"><h3>Name of Rice variety</h3></td><td style="width:80px; background-color:#C00;"><h3>Date of Nursery</h3></td><td style="width:80px; background-color:#C00;"><h3>Date of trans-<br />planation</h3></td><td style="width:80px; background-color:#C00;"><h3>Date of First Weeding</h3></td><td style="width:80px; background-color:#C00;"><h3>Date of<br /> first spray<br />of Jeevamrut<br />/Panchagavya/<br />Cow urine</h3></td><td style="width:100px; background-color:#C00;"><h3>What was Sprayed</h3></td><td colspan="4" style="width:100px; background-color:#C00;"><h3>Plant Observation-1</h3></td><td style="width:80px; background-color:#C00;"><h3>Date of Second weeding</h3></td><td style="width:80px; background-color:#C00;"><h3>Date of<br /> Second spray<br />of Jeevamrut<br />/Panchagavya/<br />Cow urine</h3></td><td style="width:100px; background-color:#C00;"><h3>What was Sprayed</h3></td><td colspan="4" style="width:100px; background-color:#C00;"><h3>Plant Observation-2</h3></td><td style="width:80px; background-color:#C00;"><h3>Date of Third weeding</h3></td><td style="width:80px; background-color:#C00;"><h3>Date of<br /> third spray<br />of Jeevamrut<br />/Panchagavya/<br />Cow urine</h3></td><td style="width:100px; background-color:#C00;"><h3>What was Sprayed</h3></td><td colspan="4" style="width:100px; background-color:#C00;"><h3>Plant Observation-3</h3></td><td style="width:80px; background-color:#C00;"><h3>Production</h3></td><td style="width:80px; background-color:#C00;"><h3> 
Last Years Production</h3></td><td style="width:100px; background-color:#C00;"><h3>
Special Remarks</h3></td><td style="width:50px; background-color:#C00;"><h3>No of days before transpl-<br />antation</h3></td><td style="width:50px; background-color:#C00;"><h3>First Weed- ing Day</h3></td><td style="width:50px; background-color:#C00;"><h3>First Man ure</h3></td><td style="width:50px; background-color:#C00;"><h3>First Obser- vation</h3></td><td style="width:50px; background-color:#C00;"><h3>Second Weed- ing Days</h3></td><td style="width:50px; background-color:#C00;"><h3>Second Man- ure</h3></td><td style="width:50px; background-color:#C00;"><h3>Second Obser- vation</h3></td><td style="width:50px; background-color:#C00;"><h3>Third Weed- ing Days</h3></td><td style="width:50px; background-color:#C00;"><h3>Third Man- uare</h3></td><td style="width:50px; background-color:#C00;"><h3>Third Obser-vation</h3></td></tr>

<tr style="height:50px; "><td width="5px;" bgcolor="#C00";></td><td style="width:180px; background-color:#C00;"></td><td style="width:100px; background-color:#C00;"></td><td style="width:100px; background-color:#C00;"></td><td style="width:100px; background-color:#C00;"></td><td style="width:200px; background-color:#C00;"></td><td style="width:10px; background-color:#C00;"></td><td style="width:100px; background-color:#C00;"></td><td style="width:80px; background-color:#C00;"></td><td style="width:80px; background-color:#C00;"></td><td style="width:80px; background-color:#C00;"></td><td style="width:80px; background-color:#C00;"></td><td style="width:100px; background-color:#C00;"></td>

<td style="width:50px; background-color:#C00;"><h3>Avg Height (cm)</h3></td><td style="width:50px; background-color:#C00;"><h3>Avg No.of Tiller</h3></td><td style="width:80px; background-color:#C00;"><h3>Disease n Pest</h3></td><td style="width:80px; background-color:#C00;"><h3>Date of observ ation</h3></td><td style="width:80px; background-color:#C00;"></td><td style="width:100px; background-color:#C00;"></td><td style="width:80px; background-color:#C00;"></td><td style="width:50px; background-color:#C00;"><h3>Avg Height (cm)</h3></td><td style="width:50px; background-color:#C00;"><h3>Avg No.of Tiller</h3></td><td style="width:80px; background-color:#C00;"><h3>Disease n Pest</h3></td><td style="width:80px; background-color:#C00;"><h3>Date of observ ation</h3></td><td style="width:100px; background-color:#C00;"></td><td style="width:80px; background-color:#C00;"></td><td style="width:100px; background-color:#C00;"></td><td style="width:50px; background-color:#C00;"><h3>Avg Height (cm)</h3></td><td style="width:50px; background-color:#C00;"><h3>Avg No.of Tiller</h3></td><td style="width:80px; background-color:#C00;"><h3>Disease n Pest</h3></td><td style="width:80px; background-color:#C00;"><h3>Date of observ ation</h3></td>

<td style="width:80px; background-color:#C00;"></td><td style="width:80px; background-color:#C00;"></td><td style="width:100px; background-color:#C00;"></td><td style="width:50px; background-color:#C00;"></td><td style="width:50px; background-color:#C00;"></td><td style="width:50px; background-color:#C00;"></td><td style="width:50px; background-color:#C00;"></td><td style="width:50px; background-color:#C00;"></td><td style="width:50px; background-color:#C00;"></td><td style="width:50px; background-color:#C00;"></td><td style="width:50px; background-color:#C00;"></td><td style="width:50px; background-color:#C00;"></td><td style="width:50px; background-color:#C00;"></td>
</tr>

<?php $con=mysql_connect("localhost","root","");
        if(!$con)
        {echo"database not connected";}
        else
         { 
            mysql_select_db("dantewada");
            $a=mysql_query("Select * from sri1",$con);
            $tot=mysql_num_rows($a);
			$b=mysql_query("Select * from sriobs1",$con);
            
            $c=mysql_query("Select * from sriobs2",$con);
            
			$d=mysql_query("Select * from sriobs3",$con);
            for($rw=0;$rw<$tot;$rw++)
			{
				echo "<tr>";
				for($cl=0;$cl<10;$cl++)
				{
					$tmp1=mysql_result($a,$rw,$cl);
				echo"<td bgcolor=#FFF><p1>$tmp1</p1></td>";}
				for($cb=1;$cb<8;$cb++){
				$tmpb=mysql_result($b,$rw,$cb);
				echo"<td bgcolor=#FFF><p1>$tmpb</p1></td>";}
				for($cc=1;$cc<8;$cc++){
				$tmpc=mysql_result($c,$rw,$cc);
				echo"<td bgcolor=#FFF><p1>$tmpc</p1></td>";}
				for($cd=1;$cd<8;$cd++){
				$tmpd=mysql_result($d,$rw,$cd);
				echo"<td bgcolor=#FFF><p1>$tmpd</p1></td>";}
				for($ca1=10;$ca1<14;$ca1++){
				$tmpca1=mysql_result($a,$rw,$ca1);
				echo"<td bgcolor=#FFF><p1>$tmpca1</p1></td>";}
				for($cb1=8;$cb1<11;$cb1++){
				$tmpcb1=mysql_result($b,$rw,$cb1);
				echo"<td bgcolor=#FFF><p1>$tmpcb1</p1></td>";}
				for($cc1=8;$cc1<11;$cc1++){
				$tmpcc1=mysql_result($c,$rw,$cc1);
				echo"<td bgcolor=#FFF><p1>$tmpcc1</p1></td>";}
				for($cd1=8;$cd1<11;$cd1++){
				$tmpcd1=mysql_result($d,$rw,$cd1);
				echo"<td bgcolor=#FFF><p1>$tmpcd1</p1></td>";}
				
				
				
				
								
				
				
				echo "</tr>";
			}
		 }

?>

</table>
</div>
</body>
</form>
</html>
<style>
#d1
{
	width:3256px;
	height:50px;
	background:#063;
	
	}
	#d2{
		width:3256px;
		background:#063;
	border-bottom-color:#CCC;
	border-bottom-style:double;
	
	
	}
h3
{
	color:#CC0;
	margin-left:5px;
    font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:16px;
}
h2
{
	color:#CC0;
	margin-left:5px;
    font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	
}


#btdlg
{
	
	width:100px;
	height:30px;
	       	border-radius:20px;
		   color:#cc0;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:20px;
	border-top-style:hidden;
	border-bottom-style:hidden;
	position:fixed;
	top:20px;
	
	left:1250px;
	
	
	background-color:#C00;
	
	}
#btdlg:hover
{
	
	width:100;
	height:35;
	       margin-right:15px;
		border-radius:20px;
		   color:#cc0;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:20px;
	border-top-style:hidden;
	border-bottom-style:hidden;
	
	background-color:#C00;
	position:fixed;
	top:20px;
	left:1250px;
}



</style>
<?php
if(isset($_POST['logout']))
{
unset($_SESSION['id']);
session_destroy();
echo'<script type="text/javascript">alert("SUCCESSFULLY LOGGED OUT. Thank You.");window.location=\'index.php\';</script>';


}
?>