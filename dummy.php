<?php
include_once "com/base.php";
//快速產生發票號碼
$num=1000;
$char=["A","C","D","F","G","X","Z","Y","R","S","U","J"];

for($i=0;$i<$num;$i++){
    $code=$char[rand(0,11)] . $char[rand(0,11)];
    $data=[
        'period'=>rand(1,6),
        'year'=>2020,
        'code'=>$code,
        'number'=>rand(12312311,99999999),
        'expend'=>rand(100,10000),
    ];
    echo "己新增".$data["code"] . $data['number']."<br>";
    //新增完成後存到invoice裡面
    save("invoice",$data);
}
?>