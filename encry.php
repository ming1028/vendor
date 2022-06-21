<?php
/*$priStr = "";
$pubStr = "";
$pubKey = "-----BEGIN RSA PUBLIC KEY-----\n" .
    wordwrap(ALIPAY_RSAPRIVATEKEY, 64, "\n", true) .
    "\n-----END RSA PUBLIC KEY-----";

$priKey = "-----BEGIN RSA PRIVATE KEY-----\n" .
    wordwrap(ALIPAY_RSAPRIVATEKEY, 64, "\n", true) .
    "\n-----END RSA PRIVATE KEY-----";*/
/*$pubKey = openssl_get_publickey("./jinsvip.pub");
$priKey = openssl_get_privatekey("./jinsvip");*/
$aesKey = base64_encode(openssl_encrypt("123", "AES-256-CBC", '123'));
echo strlen($aesKey) . "-" . $aesKey . "\n\r";
$pub = file_get_contents("./pub.pem");
$pubKey = openssl_get_publickey($pub);
/*
$pubKey = "-----BEGIN RSA PUBLIC KEY-----\n" .
    wordwrap($pubKey, 64, "\n", true) .
    "\n-----END RSA PUBLIC KEY-----";
var_dump($pubKey);*/
$data = [
    "appid" => 123,
    'mchid' => 234
];
$dataJson = json_encode($data);
$secretData = "";
openssl_public_encrypt($aesKey, $secretData, $pubKey);
$base64EncryData = base64_encode($secretData);
echo $base64EncryData . "\n\r";
$base64DecryData = base64_decode($base64EncryData);
$srcData = "";
$pri = file_get_contents("./pri.pem");
$priKey = openssl_get_privatekey($pri);
openssl_private_decrypt($base64DecryData, $srcData, $priKey);
var_dump(json_decode($srcData));


