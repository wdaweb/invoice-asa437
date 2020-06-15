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
        <td class="px-5">年月份</td>
        <td class="px-5"><?=$year;?>年 <?=$monthStr[$period];?></td>
        <td class="px-5">對獎</td>
        <td class="px-5">設定</td>
    </tr>
    <tr>
        <td>特別獎</td>
        <td><?php
        if(!empty($num1['number'])){
            echo $num1['number'];
        };
        
        ?></td>
        <td><a href="award.php?aw=1&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td>特獎</td>
        <td><?php
        if(!empty($num2['number'])){
            echo $num2['number'];
        };
        
        ?></td>
        <td><a href="award.php?aw=2&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td>頭獎</td>
        <td>
            <?php
                foreach($num3 as $num){
                    echo $num['number'] . "<br>";
                }            
            ?>
        </td>
        <td><a href="award.php?aw=3&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td>二獎</td>
        <td></td>
        <td><a href="award.php?aw=4&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td>三獎</td>
        <td></td>
        <td><a href="award.php?aw=5&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td>四獎</td>
        <td></td>
        <td><a href="award.php?aw=6&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td>五獎</td>
        <td></td>
        <td><a href="award.php?aw=7&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td>六獎</td>
        <td></td>
        <td><a href="award.php?aw=8&year=<?=$year;?>&period=<?=$period;?>">對獎</a></td>
        <td><a href="update_invoice.php">編輯</a></td>
    </tr>
    <tr>
        <td>增開六獎</td>
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