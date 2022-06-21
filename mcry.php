<?php
$use3des = true;
/*$cipher = $use3des ? MCRYPT_TRIPLEDES : MCRYPT_DES;
$modes = MCRYPT_MODE_ECB;*/
# Add PKCS7 padding.
$data = "123";
/*$block = mcrypt_get_block_size($cipher, $modes);
$pad = $block - (strlen($data) % $block);
$data .= str_repeat(chr($pad), $pad);

$iv = mcrypt_create_iv(mcrypt_get_iv_size($cipher, $modes), MCRYPT_RAND);

var_dump(mcrypt_get_iv_size($cipher, $modes));
$encrypted = @mcrypt_encrypt($cipher, "lKWlHlsrdXIIxz5wJwxlybQX", $data, $modes, $iv);*/
echo "<pre>";
var_dump(openssl_get_cipher_methods());
// echo hash("sha512", "123", true);