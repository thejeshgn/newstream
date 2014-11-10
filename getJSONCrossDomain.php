<?php

header('Content-type: application/json');
echo file_get_contents("https://feeds.pinboard.in/json/u:thej/t:chillfactor2014");

?>