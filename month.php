<?php
echo date("Y-m", strtotime("-6 month")) . "\n";
echo strtotime(date("Y-m") . "-01 00:00:00") . "\n";
echo $d = date('t', strtotime(date("Y-m")));
/*$a1 = [1,2,3];
$arr = array_map(function($item){
	return [
		11,
		22,
		33
	];
},$a1);
var_dump($arr);*/
$filter = [
    "type" => 1,
    /*"level" => [
        1, // Level 1
        2, // Level 2
    ],
    "grade" => [
        "c1", // 成长
        "c2", // 平衡
        "c3", // 稳健
        "c4", // 价值
        "c5", // 进取
    ],
    "openTime" => [
        "2022-01",
        "2021-12",
        "2021-11",
    ],
    "deficitCnt" => 2,*/
    "roomId" => 196, //房间id,
//    "roomStockId" => 512, //(股票模式下)
];
echo json_encode($filter);
echo strtotime(date("Y-m-d 00:00:00"));
$imageExtras = [
    "height" => 555,
    "width" => 200,
    "url" => "ww.baidu.com",
];
echo json_encode($imageExtras, JSON_UNESCAPED_UNICODE);
$str = "{\"height\":0,\"width\":0,\"url\":\"http:\\/\\/huasheng-dev.oss-cn-shanghai.aliyuncs.com\\/data\\/yanbao\\/95e8a382aecb74ed5549105e978a8886.png\"}";
var_dump(json_decode($str, true));