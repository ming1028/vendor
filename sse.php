<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = date('r');
echo "data: The server time is: {$time}\n\n";
$i = 0;
while (1) {
    sleep(2);

    if ($i == 5) {
        exit();
    }
    $i++;
}

?>