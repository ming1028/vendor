<?php
#echo date("YmdHis")."-".floor((microtime(true) - time())*1000);
print_r(explode(" ", microtime())) . "\r\n";
echo microtime(true) . "\r\n";
echo time() . "\r\n";
echo sprintf("%.8f", microtime(true)) . "\r\n";
$timeList = explode(" ", microtime());
print_r($timeList);
$timestamp = date("YmdHis") . $timeList[0] * 100000000;
echo $timestamp."\r\n";
