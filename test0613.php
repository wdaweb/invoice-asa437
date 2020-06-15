<?php
//存進資料庫
$data=[
        'number'=>$ins['number'],
        'period'=>$_GET['period'],
        'reward'=>$t_num,
        'expend'=>0,
        'year'=>$_GET['year'],
    ];
    save("reward_record",$data);

?>


<!-- 取出資料庫 -->

<?php
$rows=all('reward_record',['number'=>$number]);
?>
<table class="tab-pane col-12 col-lg-6 mx-auto text-center bg-light"> 
    <tr>
            <td>號碼</td>
            <td>期</td>
            <td>中獎號</td>
            <td>花費</td>
            <td>year<td>
        </tr>
    <?php
    foreach($rows as $row){
    ?>

        <tr>
            <td><?=$row['number'];?></td>
            <td><?=$row['period'];?></td>
            <td><?=$row[''];?></td>
            <td><?=$row[''];?></td>
            <td><?=$row['year'];?></td>
        </tr>
    <?php
    }
    ?>
</table>

