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
include_once "com/base.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
/**
 * 年份-> year
 *  期數->period
 * 特別獎->num1
 * 特獎->num2
 * 頭獎->num3 可能有多筆
 * 增開六獎-> num4 可能有多筆，而且只有三碼
 * 
 */
$table="award_number";
$year=$_POST['year'];
$period=$_POST['period'];
?>

<div style="display:none">
    <?php //刪除獎
    $data=[
        "year"=>$year,
        "period"=>$period,
    ];
    del($table,$data);
    ?>
</div>

<div class="text-center py-2"><a href="add_invoice.php"><button class="p-2">回新增獎號</button></a></div>