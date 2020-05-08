<?php

include "./com/base.php";

$sql="insert into invoice(`period`,`year`,`code`,`number`,`expend`) 
values('".$_POST['period']."',
'".$_POST['year']."',
'".$_POST['code']."',
'".$_POST['number']."',
'".$_POST['expend']."')";

echo "period=" . $_POST['period']."<br>";
echo "year=" . $_POST['year']."<br>";
echo "code=" . $_POST['code']."<br>";
echo "number=" . $_POST['number']."<br>";
echo "spend=" . $_POST['expend']."<br>";

echo $sql;
$res=$pdo->exec($sql);

if($res==1){
    echo "新增成功<br>";
    echo "<a href='index.php'>繼續輸入</a><br>";
    echo "<a href='list.php'>發票列表</a>";
}else{
    echo "新增失敗";
}


?>