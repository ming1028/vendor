<?php
$host = "楼上的可是大家来看这是https://img3.gelonghui.com/fc003-28fdde25-9251-4bda-9857-8e37da30bd11.pngsd是快乐的飞机上看了对方就是快乐的减肥";
$parttern = "/http[s]?:[\/]{2}[a-z0-9A-Z]+[.]{1}[a-z\d\-]+[.]{1}[a-z\d]*/";
preg_match($parttern, $host, $match);
var_dump($match);