<?php include_once "com/base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>全部中獎記錄</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include "./include/header.php" ;?>   
    
<?php
// 取award.php 傳值 ，c名稱和資料是從資料表取
$rows=all('reward_record',['year'=>$_GET['year'],'period'=>$_GET['period'],'type'=>$_GET['type1']]);

// $rows=all('reward_record',['year'=>$_GET['year'],'period'=>$period]);
?>
<table class="tab-pane col-12 col-lg-6 mx-auto text-center bg-light"> 
    <tr>
            <td>中獎號碼</td>
            <td>期別</td>
            <td>對獎獎號</td>
            <td>花費</td>
            <td>年<td>
        </tr>
    <?php
    foreach($rows as $row){
    ?>
    <!-- 取資料庫資料 -->
        <tr> 
            <td><?=$row['number'];?></td>
            <td><?=$row['period'];?></td>
            <td><?=$row['number'];?></td>
            <td><?=$row['expend'];?></td>
            <td><?=$row['year'];?></td>
            <td><?=$row['type'];?></td>
        </tr>
    <?php
    }
    ?>
</table>


</body>
</html>