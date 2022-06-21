<?php
$price = 20.80;
$upp = floor(($price + ($price * 0.01)) * 100);
var_dump(sprintf("%01.2f", $upp / 100));