<?php

function pingAddress($ip) {
    $ping = exec("ping -n 2 $ip", $output, $status);
    if (strpos($output[2], 'unreachable') !== FALSE) {
        return '<span style="color:#f00;">OFFLINE</span>';
    } else {
        return '<span style="color:green;">ONLINE</span>';
    }
}
$ip = "192.168.1.10";
echo pingAddress($ip);

?>