<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>重新輸入頁</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

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


    <?php include "./include/header.php" ;
    //這邊 get list id
    $id=$_GET['id'];
    ?>

    
    <div class="mx-auto container bg-info" style="width:800px;">
        <form class="py-3 " action="update_list2.php" method="post">
            <div class="form-group mx-5">
                <legend class="py-3 mx text-center">重新輸入</legend>
                期別:
                <select name="period" id="">
                    <option value="1">1,2月</option>
                    <option value="2">3,4月</option>
                    <option value="3">5,6月</option>
                    <option value="4">7,8月</option>
                    <option value="5">9,10月</option>
                    <option value="6">11,12月</option>
                </select>
                年份:
                <select name="year" id="">
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
            <div class="form-group px-5">
                獎號(英文碼):
                <input class="form-control " type="text" name="code" id="">
            </div>
            <div class="form-group px-5">
                獎號(數字碼):
                <input class="form-control" type="number" name="number" id="">
            </div>
            <div class="form-group px-5">
                花費:
                <input class="form-control" type="number" name="expend" id="">
                <input class="form-control" type="hidden" name="id" value="<?=$id;?>">
            </div>
            <div class="mx-5 p-2"> 
                <input class="btn btn-primary" type="submit" value="更新">
            </div>
        </form>
    </div>
</body>
</html>