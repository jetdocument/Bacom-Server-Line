<?php


function pingAddress($ip) {
$ping = exec("ping -n 2 $ip", $output, $status);
if (strpos($output[2], 'unreachable') !== FALSE) {
        return '<span style="color:red;">OFFLINE</span>';
    } else {
        return '<span style="color:green;">ONLINE</span>';                            }
}


function linkStatus($link) {

$string = $link;

error_reporting(0);

if (preg_match('/([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})\:([0-9]{1,5})/', $string, $ip_match)) {
# code...
// echo "IP : ".$ip_match[1]." : Port : ".$ip_match[2];
    $host = $ip_match[1]; 
    $port = $ip_match[2]; 
    $waitTimeoutInSeconds = 1; 
    if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){ 
    // It worked 
    $return = "ONLINE"; 
    } else {
    // It didn't work
    $return = "OFFLINE"; 
    } 
fclose($fp);
} elseif (preg_match('/[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}/', $string, $ip_match)) {
# code...
// echo "IP : ".$ip_match[0];
    $host = $ip_match[0]; 
    $port = 80; 
    $waitTimeoutInSeconds = 1; 
    if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){ 
    // It worked 
    $return = "ONLINE"; 
    } else {
    // It didn't work
    $return = "OFFLINE"; 
    }
fclose($fp);
} elseif (preg_match('/([^\/]+)\:([0-9]{1,5})/i', $string, $domain)) {
# code...
// echo "Domain : ".$domain[1]." : Port : ".$domain[2];
    $host = $domain[1]; 
    $port = $domain[2]; 
    $waitTimeoutInSeconds = 1; 
    if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){ 
    // It worked 
    $return = "ONLINE"; 
    } else {
    // It didn't work
    $return = "OFFLINE"; 
    }
fclose($fp);

} elseif (preg_match('/([^\/]+)/i', $string, $domain)) {
# code...
// echo "Domain only : ".$domain[0];
    $host = $domain[1]; 
    $port = 80; 
    $waitTimeoutInSeconds = 1; 
    if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){ 
    // It worked 
    $return = "ONLINE"; 
    } else {
    // It didn't work
    $return = "OFFLINE"; 
    }
fclose($fp);
    } else {
    # code...
    $return = "Your link invalid";

}
error_reporting(2);

return $return;

}

// $array = [
// [1, "124.120.225.111"],
// [2, "bacom.dyndns.org"],
// [3, "bacom.dyndns.org:82"],
// [4, "124.120.225.111:200"],
// ];

// foreach ($array as list($a, $b)) {
// echo "Link: $a $b Status: ".linkStatus($b)."<br>";

// }

// $link = "www.google.com";

// echo linkStatus($link);