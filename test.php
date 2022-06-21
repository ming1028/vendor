<?php
$userSets = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$max = ceil(count($userSets) / 10);
$col = [
    "room_id",
    "room_stock_id",
    "third_id",
    "created_at",
    "updated_at",
];
var_dump($max);
$now = time();
for ($i = 0; $i < $max; $i++) {
    $offset = $i * 500;
    $data = array_slice($userSets, $offset, 500);
    $insertData = array_map(function ($third_id) use ($now) {
        return [
            2,
            3,
            $third_id,
            $now,
            $now,
        ];
    }, $data);
    print_r(count($insertData));
    if (count($insertData) < 1) {
        continue;
    }



    printf("=============\n");
    echo floor((1.99 + (1.99* 0.01)) * 100);

}