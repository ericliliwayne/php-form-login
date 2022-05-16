<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算結果</title>
</head>
<body>
    <h1 style="font-size:3rem;text-align:center">
    你的BMI為: <?=$_GET['bmi'];?>
    </h1>
    <h2 style="text-align:center">判定結果為:<?=$_GET['result'];?></h2>

    <!-- <?php
    $bmi=$_POST['bmi'];
    $suggest=$_POST['suggest'];
    $a=0;
    echo "你的BMI為: ".$bmi.",判定結果為:".$suggest;
    ?> -->
    <div style="text-align:center">
    <a href="bmi.html"><button>回到BMI計算</button></a>
    </div>
    
</body>
</html>