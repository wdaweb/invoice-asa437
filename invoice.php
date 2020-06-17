<?php include_once "./com/base.php";
$period=ceil(date("n")/2);

$monthStr=[
    '1'=>"1,2月",
    '2'=>"3,4月",
    '3'=>"5,6月",
    '4'=>"7,8月",
    '5'=>"9,10月",
    '6'=>"11,12月",
];

if(isset($_GET['period'])){
    $period=$_GET['period'];
}
$year=date("Y");
?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>輸入獎號</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<style>
body{
    background-image: url("http://220.128.133.15/s1090208/Resume/other/phtoto_reference/Invoice/piggy-bank.jpg")!important; 
    background-position:center;
    background-repeat: no-repeat !important;
    background-size: cover;
}
</style>
<body>

<section id="asainvoice" class="container text-center">

<?php include "./include/header.php";?>   

<h1 class="text-center ">期別</h1>
<ul class="nav container justify-content-center text-center py-5">
    <li class="bg-info" style="width:130px" ><a href="invoice.php?period=1" class=" font-weight-bold <?=($period==1)?'text-danger':'text-white';?> "> 1(1,2)</a></li>
    <li class="bg-info" style="width:130px" ><a href="invoice.php?period=2" class=" font-weight-bold <?=($period==2)?'text-danger':'text-white';?> "> 2(3,4)</a></li>
    <li class="bg-info" style="width:130px" ><a href="invoice.php?period=3" class=" font-weight-bold <?=($period==3)?'text-danger':'text-white';?> "> 3(5,6)</a></li>
    <li class="bg-info" style="width:130px" ><a href="invoice.php?period=4" class=" font-weight-bold <?=($period==4)?'text-danger':'text-white';?> "> 4(7,8)</a></li>
    <li class="bg-info" style="width:130px" ><a href="invoice.php?period=5" class=" font-weight-bold <?=($period==5)?'text-danger':'text-white';?> "> 5(9,10)</a></li>
    <li class="bg-info" style="width:130px" ><a href="invoice.php?period=6" class=" font-weight-bold <?=($period==6)?'text-danger':'text-white';?> "> 6(11,12)</a></li>   
</ul>


<div class="text-center py-2"><a href="add_invoice.php"><button class="p-2">新增獎號</button></a></div>


<?php
$num1=find('award_number',['period'=>$period,'year'=>$year,'type'=>1]); //單筆
$num2=find('award_number',['period'=>$period,'year'=>$year,'type'=>2]);//單筆
$num3=all('award_number',['period'=>$period,'year'=>$year,'type'=>3]);//多筆
$num4=all('award_number',['period'=>$period,'year'=>$year,'type'=>4]);//多筆
?>

<table class="text-center invoice-table mx-auto bg-light">
    <tr>
        <td class="px-5 bg-primary text-white">年月份</td>
        <td class="px-5 bg-primary text-white"><?=$year;?>年 <?=$monthStr[$period];?></td>
        <td class="px-5 bg-primary text-white">對獎</td>
        <td class="px-5 bg-primary text-white">設定</td>
    </tr>
    <tr>
        <td class="table-warning">特別獎</td>
        <td><?php
        if(!empty($num1['number'])){
            echo $num1['number'] ."<br>";
            echo "";
        };
        echo "<p class='font-weight-light'>同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元</p>";   
        
        ?></td>
        <td><a href="award.php?aw=1&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td class="table-warning">特獎</td>
        <td><?php
        if(!empty($num2['number'])){
            echo $num2['number']."<br>";
            echo "";
        };
        echo "<p class='font-weight-light'>同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元</p>";   
        
        ?></td>
        <td><a href="award.php?aw=2&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td class="table-warning">頭獎</td>
        <td>
            <?php
                foreach($num3 as $num){
                    echo $num['number'] . "<br>";
                }   
                echo "<p class='font-weight-light'>同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元</p>";         
            ?>
        </td>
        <td><a href="award.php?aw=3&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td class="table-warning">二獎</td>
        <td>同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元</td>
        <td><a href="award.php?aw=4&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td class="table-warning">三獎</td>
        <td>同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元</td>
        <td><a href="award.php?aw=5&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td class="table-warning">四獎</td>
        <td>同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元</td>
        <td><a href="award.php?aw=6&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td class="table-warning">五獎</td>
        <td>同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元</td>
        <td><a href="award.php?aw=7&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td class="table-warning">六獎</td>
        <td>同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元</td>
        <td><a href="award.php?aw=8&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td class="table-warning">增開六獎</td>
        <td>
        <?php
                foreach($num4 as $num){
                    echo $num['number'] . "<br>";
                }
            
            ?>
        </td>
        <td><a href="award.php?aw=9&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php?year=<?=$year;?>&period=<?=$period;?>" >編輯</a></td>
    </tr>
</table>


</section>


</body>
</html>