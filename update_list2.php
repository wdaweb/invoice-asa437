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
    $data=[
        'id'=>$_POST['id'],
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
        // echo "更新成功<br>";
 ?>
    <h1 class="text-center text-danger font-italic font-weight-bold">更新成功</h1>
    <br>
 <?php     
    }else{
        // echo "新增失敗";
?>
    <h1 class="text-danger font-italic font-weight-bold">新增失敗</h1>
    <br>
<?php
    }  
?>
<div class="text-center"><a href="list.php" class=" btn btn-Info my-1">回發票列表</a></div>
