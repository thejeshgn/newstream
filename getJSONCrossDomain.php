<?php

header('Content-type: application/json');
$url = "https://feeds.pinboard.in/json/u:thej/t:chillfactor2014";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
$output = curl_exec($ch);
curl_close($ch); 
            
echo $output;

?>