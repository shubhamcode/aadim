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
$(function(){
		$('#per').click(function(){
		var txu=$('#unm').val();
		if(txu==""){alert("Please enter the UID of the farmer");}
		
		else{		$.post("fper.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
		$('#con').click(function(){
		var txu=$('#unm').val();
        if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("fcon.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
				$('#inc').click(function(){
		var txu=$('#unm').val();
        if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("finc.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
				$('#fin').click(function(){
		var txu=$('#unm').val();
        if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("ffin.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
				$('#lnd').click(function(){
		var txu=$('#unm').val();
        if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("flnd.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
				$('#crp').click(function(){
		var txu=$('#unm').val();
         if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("fcrp.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
				$('#cat').click(function(){
		var txu=$('#unm').val();
        if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("fcat.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
				$('#ofm').click(function(){
		var txu=$('#unm').val();
        if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("fofm.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
				$('#tol').click(function(){
		var txu=$('#unm').val();
         if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("ftol.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
				$('#mb').click(function(){
		var txu=$('#unm').val();
         if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("fmb.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
				$('#far').click(function(){
		var txu=$('#unm').val();
        if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("ffar.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
				$('#wrt').click(function(){
		var txu=$('#unm').val();
        if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("fwrt.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
				
				$('#vano').click(function(){
		var txu=$('#unm').val();
        if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("fvano.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
				$('#hat').click(function(){
		var txu=$('#unm').val();
         if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("fhat.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
				$('#irr').click(function(){
		var txu=$('#unm').val();
         if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("firr.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});
				$('#gp').click(function(){
		var txu=$('#unm').val();
         if(txu==""){alert("Please enter the UID of the farmer");}
		else{$.post("fgp.php",{ud:txu},function(data)
        {
                
				$("#d2").html(data);})}
		});


	});
</script>
</head>
<form method="post">
<body bgcolor="#063">
<div id="d1"><h3 style="float:left;">WELCOME:<?php
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
?><input type="submit" value="LOGOUT" name="logout" id="btdlg" /></div>
<div id="d3">
<h3>To view the each details of individual farmer enter the UID of farmer and click one of the button accordingly:</h3> 
<h3>UID  <input type="text" id="unm" name="uname" /><br /><br /><input type="button" value="जैविक खेती" id="ofm" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />
<input type="button" value="मोचो बाड़ी " id="mb" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />
<input type="button" value="क्षमता विकास" id="wrt" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />
<input type="button" value=" वनोपज" id="vano" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />
<input type="button" value="हाट बाजार " id="hat" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />
<br /><br /><input type="button" value="व्यक्तिगत" id="per" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />
<input type="button" value="व्यवसाय" id="inc" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />
<input type="button" value="आर्थिक " id="fin" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />
<input type="button" value="अवजार" id="tol" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />

<input type="button" value="मवेशियों" id="cat" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />

<br /><br /><input type="button" value="समूह" id="gp" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />
<input type="button" value="खेती" id="far" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />
<input type="button" value="संपर्क" id="con" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />
<input type="button" value="जमीन" id="lnd" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />
<input type="button" value="फसल" id="crp" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />
<input type="button" value="सिंचाई" id="irr" style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;" />
<br /><br /> <input type="submit" value="Full Record" name="fulrec"  style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;"/> <input type="submit" value="SRI RECORD" name="srirec"  style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;"/>
<input type="submit" value="Farmer List" name="farmlist"  style="background-color:#C00; color:#cc0; border-radius:20px; font-size:24px; border-bottom-style:none; border-top-style:none; cursor:pointer;"/>

</div>
<div id="d2">
</div>

</body>
</form>
</html>
<style>
#d1
{
	background-color:#063;
	width:1348px;
	height:60px;
	border-bottom-color:#CCC;
	border-bottom-style:solid;
	}

#d2
{
	background-color:#063;
	width:674px;
	height:550px;
	position:fixed;
	top:100px;
	}
#d3
{
	background-color:#063;
	width:674px;
	height:550px;
	position:fixed;
	top:100px;
	left:682px;
	}
	h3
{
	color:#CC0;
	margin-left:5px;
    font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size:16px;
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
	position:relative;
	left:1080px;
	top:00;
	
	
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
	float:right;
	margin-top:15px;
	margin-right:15px;
	
	background-color:#C00;
	
}



</style>
<?php
if(isset($_POST['fulrec']))
{   $id=$_POST[uname];
    header("Location:farmindi.php?fid=$id");
}
else if(isset($_POST['srirec']))
{   echo'<script type="text/javascript">window.location=\'srif.php\';</script>';
}
else if(isset($_POST['farmlist']))
{   echo'<script type="text/javascript">window.location=\'farmerlist.php\';</script>';
}

else if(isset($_POST['logout']))
{
unset($_SESSION['id']);
session_destroy();
echo'<script type="text/javascript">alert("SUCCESSFULLY LOGGED OUT. Thank You.");window.location=\'index.php\';</script>';


}

?>