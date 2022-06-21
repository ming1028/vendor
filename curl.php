<?php
try {
    $ch = curl_init("");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);   //只需要设置一个秒的数量就可以

    $data = curl_exec($ch);
} catch (\Error $e) {
    echo $e->getMessage();
} catch (\Exception $ex) {
    echo $ex->getMessage();
}