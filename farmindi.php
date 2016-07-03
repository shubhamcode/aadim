<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>aadim/farmerdetails</title>
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
<table bgcolor="#330099" style="margin-left:10px;">
<?php

$con=mysql_connect("localhost","root","");
        if(!$con)
        {echo"database not connected";}
        else
         {
			$gu=$_REQUEST['fid'];;  
            mysql_select_db("dantewada");
            $a=mysql_query("Select * from personal where uid='$gu'",$con);
            $ra=mysql_fetch_array($a);
		    			$b=mysql_query("Select * from fcontact where uid='$gu'",$con);
            $rb=mysql_fetch_array($b);
            $c=mysql_query("Select * from income where uid='$gu'",$con);
            $rc=mysql_fetch_array($c);
$d=mysql_query("Select * from financial where uid='$gu'",$con);
            $rd=mysql_fetch_array($d);
			$e=mysql_query("Select * from land where uid='$gu'",$con);
			$re=mysql_fetch_array($e);
			$f=mysql_query("Select * from croparea where uid='$gu'",$con);
			$rf=mysql_fetch_array($f);
			$g=mysql_query("Select * from cattle where uid='$gu'",$con);
			$rg=mysql_fetch_array($g);
			$h=mysql_query("Select * from irrigation where uid='$gu'",$con);
			$rh=mysql_fetch_array($h);
			$i=mysql_query("Select * from organicfarming where uid='$gu'",$con);
			$ri=mysql_fetch_array($i);
			$j=mysql_query("Select * from tools where uid='$gu'",$con);
			$rj=mysql_fetch_array($j);
			$k=mysql_query("Select * from mochabadi where uid='$gu'",$con);
			$rk=mysql_fetch_array($k);
			$l=mysql_query("Select * from farming where uid='$gu'",$con);
			$rl=mysql_fetch_array($l);
            $m=mysql_query("Select * from worth where uid='$gu'",$con);
			$rm=mysql_fetch_array($m);
			$n=mysql_query("Select * from grp where uid='$gu'",$con);
			$rn=mysql_fetch_array($n);
			
			$o=mysql_query("Select * from vanopaj where uid='$gu'",$con);
			$ro=mysql_fetch_array($o);
			$p=mysql_query("Select * from hatmarket where uid='$gu'",$con);
			$rp=mysql_fetch_array($p);
		 }
?>

<h3>Below are the details of the farmers:</h3>
<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">व्यक्तिगत जानकारी</h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">1.	किसान का नाम </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ra[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">2.	पिता का नाम </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ra[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">3.	जाति </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ra[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">4.	किसान की शिक्षा</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ra[4]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">5.	उम्र</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ra[5]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">6.	परिवार में कुल सदस्य</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ra[6]; ?></td></tr>

<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">संपर्क हेतु जानकारी</h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">7.	पारा</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rb[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">8.	गाँव का नाम </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rb[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">9.	ग्राम पंचायत</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rb[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">10.	मोबाईल नं.</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rb[4]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">11.	जॉब कार्ड नं</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rb[5]; ?></td></tr>

<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">व्यवसाय की जानकारी </h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">12.	खेती और वनोपज के अलावा अन्य आय का साधन: ( जैसे की नौकरी, दुकान, ठेकेदारी, मजदूरी या अन्य कोई व्यवसाय)</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rc[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">13.	किसान क्या काम के लिए किसी अन्य जगह (आंध्र प्रदेश, उड़ीसा) जाता है ? जगह का नाम भी लिखें : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rc[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">14.	किसान के परिवार में नौकरी में कौन है? (नौकरी का नाम लिखें)</td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rc[3]; ?></td></tr>

<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">किसान की आर्थिक स्थिति </h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">15.	किसान का घर (मिटटी / ईटा) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[1]; ?></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">16.	छत (खपरा / शीट / स्लैब) </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">19ZM2pjq6U4jVb283GZkCPNukjeyb2YZ2u</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">18.	किसान के पास वाहन  (सायकल / बाइक / पिक अप / बोलेरो / टाटा मैजिक / अन्य)</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[4]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">19.	टीवी है ? (हाँ / नहीं ) : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[5]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">20.	म्यूजिक सिस्टम है ? (हाँ / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[6]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">21.	फ्रिज है ? (हाँ / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[7]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">22.	मोबाईल फ़ोन है ? (हाँ / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[8]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">23.	घर में बैठने के लिए क्या है ? (जैसे की : कुर्सी / सोफा / पलंग) </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rd[9]; ?></td></tr>

<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">जमीन की जानकारी </h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">24.	कुल जमीन (एकड़ में): </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $re[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">जमीन का प्रकार </h3></td><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">रकबा (एकड़ में )</h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">महान</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $re[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">टिकरा</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $re[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">बेडा</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $re[4]; ?></td></tr>

<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">25.	पट्टा नं.</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $re[5]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">26.	वनाधिकार का पट्टा (है / नहीं )</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $re[6]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">27.	किसान कितने क्षेत्र में कौनसी फसल लगाता है ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">फसल का प्रकार</h3></td><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">रकबा (एकड़ में) </h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">धान (रोपा से )</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[2]; ?></td></tr><tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">धान (बुनाई से)</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[3]; ?></td></tr><tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">सब्जी</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[4]; ?></td></tr><tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">कोदो/कोसरा/रागी</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[5]; ?></td></tr><tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">दलहन फसल</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[6]; ?></td></tr><tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">तिलहनी फसल</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[6]; ?></td></tr><tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px; float:right;">जोंधरा</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[7]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">28.	भूमि समतलीकरण की स्थिति </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[8]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">29.	खेत में मिटटी का कटाव</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rf[9]; ?></td></tr>

<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">मवेशियों की स्थिति</h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">30.	गाय की संख्या : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rg[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">31.	बैलों की संख्या : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rg[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">32.	भैसों की संख्या : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rg[3]; ?></td></tr>

<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">सिंचाई साधन की स्थिति</h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">33.	सिंचाई हेतु पानी का स्त्रोत : नलकूप / कुआँ / नहर / नाला – नदी से पंप / तालाब से पंप </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rh[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">34.	क्या किसान के खेत में डबरी है ? (है / नहीं ) </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rh[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">35.	पंप की उपलब्धता (विद्युत् / डीजल , कितना hp) : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rh[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">36.	बिजली कनेक्शन की स्थिति (है / नहीं ) : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rh[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">37.	ड्रिप (है / नहीं) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rh[4]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">38.	स्प्रिंकलर सेट (है / नहीं ) : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rh[5]; ?></td></tr>

<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">जैविक खेती</h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">39.	क्या किसान रासायनिक खाद का उपयोग करता है ? (हाँ / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ri[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">40.	क्या किसान रासायनिक दवा का उपयोग करता है ? किस फसल पर ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ri[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">41.	रासायनिक खाद और दवा का उपयोग कबसे बंद किया है ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ri[4]; ?></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">42.	नाडेप टांका (है / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ri[5]; ?></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">43.	पक्का फ्लोर एवं गौमूत्र टैंक (है / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ri[5]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">44.	केचुआ खाद टांका (है / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ri[6]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">45.	जीवामृत ड्रम (है / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ri[7]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">46.	बायोगैस (है / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ri[8]; ?></td></tr>


<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">अवजार की स्थिति </h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">47.	निजी ट्रेक्टर (है / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rj[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">48.	कल्टीवेटर (है / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rj[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">49.	रोटावेटर (है / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rj[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">50.	ट्राली (है / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rj[4]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">51.	पॉवर टिलर (है / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rj[5]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">52.	स्प्रयेर (है / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rj[6]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">53.	अम्बिका वीडर (है / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rj[7]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">54.	साईकल व्हील हो (है / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rj[8]; ?></td></tr>

<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">मोचो बाड़ी की स्थिति </h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">55.	क्या मोचो बाड़ी है ? (है / नहीं ) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rk[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">56.	सामूहिक / वैयक्तिक </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rk[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">57.	कितने क्षेत्र में ? (एकड़ में )</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rk[3]; ?></td></tr>

<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">खेती की स्थिति</h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">58.	क्या किसान रोपा लगाता है ? (हाँ / नहीं) : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">59.	क्या किसान श्री विधि से खेती करता है ? (हाँ / नहीं) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[2]; ?>></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">60.	कितने साल से ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">61.	कितने क्षेत्र में ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[4]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">62.	धान की कौनसी किस्में लगाता है ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[5]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">63.	क्या किसान धान को सोसायटी में बेचता है ? कितने रुपये का धान बेचता है ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[6]; ?>></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">64.	क्या किसान मोचो बाड़ी में सब्जी उत्पादन करता है ? (हाँ / नहीं) : </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[7]; ?>></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">65.	सब्जियों के नाम लिखे </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[8]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">66.	क्या किसान सब्जी बाजार में बेचता है ? (हाँ / नहीं) :</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[9]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">67.	कहाँ बेचता है ? हर बाजार में कितने रुपये की सब्जी बेचता है ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[10]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">68.	किसान रागी , कोदो , कोसरा में से कौनसी फसल लगाता है  ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[11]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">69.	किसान दलहन में से कौनसी फसल लगाता है – उड़द, मूंग, कुलथी, अरहर</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[12]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">70.	किसान तिलहन में से कौनसी फसल लगाता है – तील, रामतिल, सरसों, सूरजमुखी</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[13]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">71.	किसान मसाला में से कौनसी फसल लगाता है – हलदी, अदरक</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[14]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">72.	किसान के पास फलदार वृक्ष कौनसे और कितने है ?  
</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rl[15]; ?></td></tr>

<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">किसान के क्षमता विकास का जायजा:</h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">73.	किसान भ्रमण के लिए कहाँ कहाँ जा चूका है ?</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rm[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">74.	किसान को कौनसे कौनसे जैविक खाद बनाना आता है ?
</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rm[2]; ?></td></tr>

<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">समूह में सहभाग: </h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">75.	क्या किसान समूह का सदस्य है   
</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rn[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">76.	समूह का नाम 
</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rn[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">77.	क्या किसान की पत्नी समूह की सदस्या है 
</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rn[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">78.	महिला समूह का नाम </h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rn[4]; ?></td></tr>


<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">वनोपज की जानकारी </h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">79.	महुआ के पेड़ों की संख्या :  
</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ro[1]; ?></td></tr><tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">80.	इमली के पेड़ों की संख्या : 
</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ro[2]; ?></td></tr><tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">81.	आम के पेड़ों की संख्या  : 
</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ro[3]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">82.	अन्य वनोपज के साधन  : 
</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $ro[4]; ?></td></tr>

<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">अन्य आजिविक का के साधन</h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">83.	किसान क्या मछली पालन करता है ? (हाँ / नहीं) :
</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rg[4]; ?></td></tr>

<tr><td  colspan='2' height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">हाट बाजार </h3></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">84.	किसान हाट बाजार के लिए कहाँ जाता है ?
</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rp[1]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">85.	बाजार में क्या क्या खरीदता है ? 
</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rp[2]; ?></td></tr>
<tr><td height="30px" width="200px" bgcolor="#C00"><h3 style="margin:0px;">86.	कितने रुपये की सब्जी हर बाजार में खरीदता है ? 
</h3></td><td height="30px" width="300px" bgcolor="#C00"><?php echo $rp[3]; ?></td></tr>
</table>

</div>
</body>
</form>
</html>
<style>
#d1
{
	width:1356px;
	height:50px;
	background:#063;
	border-bottom:#CCC;
	border-bottom-style:solid;
	position:fixed;
	margin-top:-20px;
	
	}
	#d2{
		width:1356px;
	height:4430px;
	background:#063;
	
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
	position:relative;
	top:14px;
	left:1215px;
	
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