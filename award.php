<?php include_once "com/base.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>輸入獎號</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<?php include "./include/header.php" ;?>   

<div class="text-center">

    <?php
    // 清除資料表
    $sql="TRUNCATE TABLE reward_record";
    $pdo->exec($sql);

    // if(empty($_GET)){
    //     echo "請選擇要對獎的項目:<a href='invoice.php'>各期獎號</a>";
    //     echo "<br>";
    //     // echo "全部中獎記錄請點選:<a href='awardList.php?year=".$_GET['year']."&period=".$_GET['period']."'>中獎獎號</a>";
    //     exit();
    // }
    $award_type=[
        //第二值是資料庫的獎項，三值是取幾碼
        1=>["特別獎",1,8],
        2=>["特獎",2,8],
        3=>["頭獎",3,8],
        4=>["二獎",3,7],
        5=>["三獎",3,6],
        6=>["四獎",3,5],
        7=>["五獎",3,4],
        8=>["六獎",3,3],
        9=>["增開六獎",4,3],
    ];
    $aw=$_GET['aw'];
    echo "獎別:".$award_type[$aw][0]."<br>";
    echo "aw:".$aw."<br>";
    echo "年份:".$_GET['year']."<br>";
    echo "期別:".$_GET['period']."<br>";

    // 算符合條件資料有幾筆
    $award_nums=nums("award_number",[
        "year"=>$_GET['year'],
        "period"=>$_GET['period'],
        "type"=>$award_type[$aw][1]
    ]);

    echo "獎號數量:".$award_nums;
    $award_numbers=all("award_number",[
        "year"=>$_GET['year'],
        "period"=>$_GET['period'],
        "type"=>$award_type[$aw][1]
    ]) ;

    echo "<h4>對獎獎號</h4>";
    $t_num=[];
    foreach($award_numbers as $num){
        echo $num['number']."<br>";
        $t_num[]=$num['number'];
    }


    echo "<h4>該期發票號碼</h4>";
    $invoices=all("invoice",[
        "year"=>$_GET['year'],
        "period"=>$_GET['period'],
        // "expend"=>$_GET['expend'], //expend取不出來 why?
        ]);

    foreach ($invoices as $ins) {

        foreach($t_num as $tn){

            //取位數
            $len=$award_type[$aw][2];

            //從後面算取
            $start=8-$len;
            
            //針對增開六獎號特別處理
            if($aw!=9){
                $target_num=mb_substr($tn,$start,$len);
            }else{
                $target_num=$tn;
            }
           
            if(mb_substr($ins['number'],$start,$len) == $target_num ){
                echo "<span style='color:red;font-size:20px'>".$ins['number']."中獎了</span>";
                echo "<br>";
            
            //去invoice資料表撈expend資料
                $row=find('invoice',['year'=>$_GET['year'],'period'=>$_GET['period'],'number'=>$ins['number']]);
                // print_r($row); //測試用
            //中獎號先存到 陣列
                $onedata=[
                    'number'=>$ins['number'],
                    'period'=>$_GET['period'],
                    'reward'=>$num['number'],
                    'expend'=>$row['expend'],
                    'year'=>$_GET['year'],
                    "type"=>$award_type[$aw][0],
                ];
            //中獎存到資料庫, 並判斷是否存入資料庫
            $res=save("reward_record",$onedata);
                if($res==1){
                echo "<span style='color:red;font-size:20px'>恭喜中獎</span>";
                }else{
                    echo "沒存入表格";
                    
                }
            }
           
        }
    }
    to("awardList.php?year=".$_GET['year']."&period=".$_GET['period']."&type1=".$award_type[$aw][0]);
    ?>

</div>

</body>
</html>