<?php


 $con=mysql_connect("localhost","root","");
        if(!$con)
        {echo"database not connected";}
        else
         {
			$gu=1;  
            mysql_select_db("dantewada");
            $a=mysql_query("Select * from personal where uid='$gu'",$con);
            $ra=mysql_fetch_array($a);
			$b=mysql_query("Select * from fcontact where uid='1'",$con);
            $rb=mysql_fetch_array($b);
            $c=mysql_query("Select * from income where uid='1'",$con);
            $rc=mysql_fetch_array($c);
			$d=mysql_query("Select * from financial where uid='1'",$con);
            $rd=mysql_fetch_array($d);
			$e=mysql_query("Select * from land where uid='1'",$con);
			$re=mysql_fetch_array($e);
			$f=mysql_query("Select * from croparea where uid='1'",$con);
			$rf=mysql_fetch_array($f);
			$g=mysql_query("Select * from cattle where uid='1'",$con);
			$rg=mysql_fetch_array($g);
			$h=mysql_query("Select * from irrigation where uid='1'",$con);
			$rh=mysql_fetch_array($h);
			$i=mysql_query("Select * from organicfarming where uid='1'",$con);
			$ri=mysql_fetch_array($i);
			$j=mysql_query("Select * from tools where uid='1'",$con);
			$rj=mysql_fetch_array($j);
			$k=mysql_query("Select * from mochabadi where uid='1'",$con);
			$rk=mysql_fetch_array($k);
			$l=mysql_query("Select * from farming where uid='1'",$con);
			$rl=mysql_fetch_array($l);
			$m=mysql_query("Select * from worth where uid='1'",$con);
			$rm=mysql_fetch_array($m);
			$n=mysql_query("Select * from grp where uid='1'",$con);
			$rn=mysql_fetch_array($n);
			
			$o=mysql_query("Select * from vanopaj where uid='1'",$con);
			$ro=mysql_fetch_array($o);
			$p=mysql_query("Select * from hatmarket where uid='1'",$con);
			$rp=mysql_fetch_array($p);
			echo $ra[1];
			
            			
                
}
?>
