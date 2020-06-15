<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增開獎獎號</title>
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
<?php include "./include/header.php";?>
<form action="save_number.php" method="post">
<table class="invoice-table bg-light mx-auto">
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
    </tr>
    <tr>
        <td>特別獎</td>
        <td><input type="number" name="num1"></td>
    </tr>
    <tr>
        <td>特獎</td>
        <td><input type="number" name="num2"></td>
    </tr>
    <tr>
        <td>頭獎</td>
        <td>
            <input type="number" name="num3[]"><br>
            <input type="number" name="num3[]"><br>
            <input type="number" name="num3[]"><br>
            <input type="number" name="num3[]"><br>
        </td>
    </tr>
    <tr>
        <td>二獎</td>
        <td></td>
    </tr>
    <tr>
        <td>三獎</td>
        <td></td>
    </tr>
    <tr>
        <td>四獎</td>
        <td></td>
    </tr>
    <tr>
        <td>五獎</td>
        <td></td>
    </tr>
    <tr>
        <td>六獎</td>
        <td></td>
    </tr>
    <tr>
        <td>增開六獎</td>
        <td>
            <input type="number" name="num4[]"><br>
            <input type="number" name="num4[]">
        </td>
    </tr>
</table>

<div class="p-2 text-center">
    <input type="submit" value="送出" class="btn btn-primary p-2">
    <input type="reset" value="重置" class="btn btn-primary p-2">
    <a class="btn btn-primary p-2" href="invoice.php" role="button">查看</a>
</div>


</form>
</body>
</html>