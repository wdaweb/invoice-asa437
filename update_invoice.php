<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>更新開獎獎號</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include "./include/header.php";?>
<form action="del_number.php" method="post">
<table class="invoice-table mx-auto">
    <tr>
        <td>年月份</td>
        <td>
            <input type="number" name="year" id="">
            <select name="period">
                <option value="1">1,2月</option>
                <option value="2">3,4月</option>
                <option value="3">5,6月</option>
                <option value="4">7,8月</option>
                <option value="5">9,10月</option>
                <option value="6">11,12月</option>
            </select>
            
        </td>
    <!-- <tr>
        <td>獎號</td>
        <td><input type="number" name="num"></td>
    </tr> -->
</table>

<div class="p-2 text-center">
    <input type="submit" value="更新/刪除" class="btn btn-danger py-3" style="width:120px;">
    <input type="reset" value="重置" class="btn btn-primary py-3" style="width:120px;">
    <a class="btn btn-primary py-3" style="width:120px;" href="invoice.php" role="button">回各期獎號</a>
</div>


</form>
</body>
</html>