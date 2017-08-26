<?php

////////////////ip获取函数//////////////
function iptype1 () { 
	 if(getenv("HTTP_CLIENT_IP")){ 
		return getenv("HTTP_CLIENT_IP"); 
	 }else 
       return "none"; 
} 

function iptype2 () { 
	if (getenv("HTTP_X_FORWARDED_FOR")) { 
	  return getenv("HTTP_X_FORWARDED_FOR"); 
	}else
	  return "none"; 
}

function iptype3 () { 
	if (getenv("REMOTE_ADDR")) { 
	  return getenv("REMOTE_ADDR"); 
	}else 
	  return "none"; 
} 
function ip() { 
	$ip1 = iptype1(); 
	$ip2 = iptype2(); 
	$ip3 = iptype3(); 
	if (isset($ip1) && $ip1 != "none" && $ip1 != "unknown")
	 $ip = $ip1; 
	elseif (isset($ip2) && $ip2 != "none" && $ip2 != "unknown")
	  $ip = $ip2; 
	elseif (isset($ip3) && $ip3 != "none" && $ip3 != "unknown")
	 $ip = $ip3; 
	else $ip =  $_SERVER['REMOTE_ADDR']; 
     if( strstr($ip, ",")){
		 $woqu = explode(',',$ip);
	    $ip=$woqu['0'];
	 }
     if($ip=='')return '127.0.0.1';
 return $ip;
    
} 