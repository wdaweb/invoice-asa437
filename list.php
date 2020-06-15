<?php include_once "./com/base.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>發票列表</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<div class="text-center">
    <?php include "./include/header.php";?>
    目前期數:
<?php
    $period=ceil(date("n")/2);
    echo $period;
    if(isset($_GET['period'])){
        $period=$_GET['period'];
    }
?>
</div>

<h1 class="text-center ">發票列表</h1>
<ul class="nav container justify-content-center  text-center py-5">
    <li class="bg-info" style="width:130px" ><a href="list.php?period=1" class=" font-weight-bold <?=($period==1)?'text-danger':'text-white';?> "> 1(1,2)</a></li>
    <li class="bg-info" style="width:130px" ><a href="list.php?period=2" class=" font-weight-bold <?=($period==2)?'text-danger':'text-white';?> "> 2(3,4)</a></li>
    <li class="bg-info" style="width:130px" ><a href="list.php?period=3" class=" font-weight-bold <?=($period==3)?'text-danger':'text-white';?> "> 3(5,6)</a></li>
    <li class="bg-info" style="width:130px" ><a href="list.php?period=4" class=" font-weight-bold <?=($period==4)?'text-danger':'text-white';?> "> 4(7,8)</a></li>
    <li class="bg-info" style="width:130px" ><a href="list.php?period=5" class=" font-weight-bold <?=($period==5)?'text-danger':'text-white';?> "> 5(9,10)</a></li>
    <li class="bg-info" style="width:130px" ><a href="list.php?period=6" class=" font-weight-bold <?=($period==6)?'text-danger':'text-white';?> "> 6(11,12)</a></li>   
</ul>

<?php
// $sql="select * from invoice  where period='$period'";
// $rows=$pdo->query($sql)->fetchAll();
$rows=all('invoice',['period'=>$period]);
?>

    <table class="tab-pane col-12 col-lg-6 mx-auto text-center bg-light"> 
    <tr>
            <td>編號</td>
            <td>標記</td>
            <td>號碼</td>
            <td>花費</td>
            <td>設定</td>
        </tr>
    <?php
    foreach($rows as $row){
    ?>

        <tr>
            <td><?=$row['id'];?></td>
            <td><?=$row['code'];?></td>
            <td><?=$row['number'];?></td>
            <td><?=$row['expend'];?></td>
            <td><a href="update_list1.php?id=<?=$row['id']?>">編輯</a></td>
        </tr>
    <?php
    }
    ?>

    </table>

</body>
</html>

