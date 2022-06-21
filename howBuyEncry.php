<?php

class HowBuyEncryService
{
    /**
     *获取随机AES密钥（length=24）
     * @return string
     */
    public function getAesKey()
    {
        return base64_encode(openssl_encrypt("howBuyLogin", "AES-256-CBC", "aGRrZjg4MWRoZ21hMzA2ZA==",
            OPENSSL_RAW_DATA));
    }

    /**
     *公钥加密
     * @param $data 数据
     * @param $filepath 公钥路径
     * @return string
     */
    public function encryByPub($data, $filepath)
    {
        if (!file_exists($filepath) || !is_file($filepath)) {
            exit("file not exist");
        }
        $pubKey = openssl_get_publickey(file_get_contents($filepath));
        if (!$pubKey) {
            exit("publickye error");
        }
        $encryData = "";
        openssl_public_encrypt($data, $encryData, $pubKey);
        return $encryData;
    }

    /**
     * Aes加密
     * @param $data string 待加密数据
     * @param $key string 密钥
     * @return string
     */
    public function encryByAes($data, $key)
    {
        if (empty($data) || empty($key)) {
            exit("data empty");
        }

        return base64_encode(openssl_encrypt($data, 'AES-256-CBC', $key, OPENSSL_RAW_DATA));
    }

    /**
     *私钥加密
     * @param string $content
     * @param string $filename
     */
    public function encryByPri($content, $filename)
    {
        if (!file_exists($filename) || !is_file($filename)) {
            exit("file not exist");
        }
        $priKey = openssl_get_privatekey(file_get_contents($filename));
        if (!$priKey) {
            exit("publickye error");
        }
        $encryData = "";
        openssl_public_encrypt($content, $encryData, $priKey);
        return $encryData;
    }

    /**
     * hash
     * @param string $content
     */
    public function signByHash($content)
    {
        $content = strval($content);
        if (empty($content)) {
            exit("content empty");
        }
        return hash("sha512", $content);
    }

    /**
     * 公钥解密
     * @param $content
     * @param $filename
     */
    public function decryByPub($content, $filename)
    {
        if (!file_exists($filename) || !is_file($filename)) {
            exit("file not exist");
        }
        $pubKey = openssl_get_publickey(file_get_contents($filename));
        if (!$pubKey) {
            exit("publickye error");
        }
        $content = base64_decode($content);
        $srcData = "";
        openssl_public_decrypt($content, $srcData, $pubKey);
        return $srcData;
    }

    /**
     * 私钥解密
     * @param $content
     * @param $filename
     */
    public function decryByPri($content, $filename)
    {
        if (!file_exists($filename) || !is_file($filename)) {
            exit("file not exist");
        }
        $priKey = openssl_get_privatekey(file_get_contents($filename));
        if (!$priKey) {
            exit("priKey error");
        }
        $content = base64_decode($content);
        $srcData = "";
        openssl_public_decrypt($content, $srcData, $priKey);
        return $srcData;
    }
}