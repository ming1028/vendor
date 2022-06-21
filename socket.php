<?php
$ip = "127.0.0.1";
$port = "5555";
$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if (($sock) < 0) {
    echo "socket_create() 失败的原因是:" . socket_strerror($sock) . "\n";
}
if (($ret = socket_bind($sock, $ip, $port)) < 0) {
    echo "socket_bind() 失败的原因是:" . socket_strerror($ret) . "\n";
}

if (($ret = socket_listen($sock, 4)) < 0) {
    echo "socket_listen() 失败的原因是:" . socket_strerror($ret) . "\n";
}
do {
    if (($msgsock = socket_accept($sock)) < 0) {
        echo "socket_accept() failed: reason: " . socket_strerror($msgsock) . "\n";
        break;
    } else {

        //发到客户端
        $msg = "测试成功！\n";
        socket_write($msgsock, $msg, strlen($msg));

        echo "测试成功了啊\n";
        $buf = socket_read($msgsock, 8192);


        $talkback = "收到的信息:$buf\n";
        echo $talkback;

        if (++$count >= 5) {
            break;
        };


    }
    //echo $buf;
    socket_close($msgsock);

} while (true);

socket_close($sock);