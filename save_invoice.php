    <!-- Bootstrap link -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
<?php
include "./com/base.php";
/* $sql="insert into invoice (
    `period`,
    `year`,
    `code`,
    `number`,
    `expend`) values(
    '".$_POST['period']."',
    '".$_POST['year']."',
    '".$_POST['code']."',
    '".$_POST['number']."',
    '".$_POST['expend']."')";

    echo $sql;
    $res=$pdo->exec($sql); */
    $data=[
        'period'=>$_POST['period'],
        'year'=>$_POST['year'],
        'code'=>$_POST['code'],
        'number'=>$_POST['number'],
        'expend'=>$_POST['expend'],
    ];
    ?>
    
    <?php
    $res=save("invoice",$data);
    if($res==1){
        // echo "新增成功<br>";
        // echo "<a href='index.php' class='text-center'>繼續輸入</a><br>";
        // echo "<a href='list.php' class='text-center'>發票列表</a>";
    ?>
        <div class="text-center">
            <h1 class="text-danger font-italic font-weight-bold">新增成功</h1>
            <br>
            <a href='index.php' class="btn btn-warning my-1" >繼續輸入</a><br>
            <a href='list.php' class="btn btn-Info my-1" >發票列表</a>
        </div>
    <?php
    }else{
        // echo "新增失敗";
    ?>
        <div class="text-center">
            <h1 class="text-danger font-italic font-weight-bold">新增失敗</h1>
            <br>
            <a href='index.php' class="btn btn-warning my-1" >繼續輸入</a><br>
            <a href='list.php' class="btn btn-Info my-1" >發票列表</a>
        </div>
    <?php   
    }
    ?>


