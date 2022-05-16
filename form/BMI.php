<?php
if(!empty($_GET) || !empty($_POST)){
if(empty($_GET)){ //判斷$_GET是否為空,如果為空表示為POST的方式傳送
    $height=$_POST['height'];
    $weight=$_POST['weight'];
}else{
    $height=$_GET['height'];
    $weight=$_GET['weight'];
};
echo "<br>";
$bmi= round($weight /(($height/100)*($height/100)),1);
if($bmi>=35){
    $result="重度肥胖";
}else if($bmi>=30 && $bmi<35){
    $result="中度肥胖";
}else if($bmi>=27 && $bmi<30){
    $result="輕度肥胖";
}else if($bmi>=24 && $bmi<27){
    $result="過重";
}else if($bmi>=18.5 && $bmi<24){
    $result="正常範圍";
}else if($bmi<18.5){
    $result="體重過輕";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算</title>
</head>
<body>
<?php
if(empty($_GET)  && empty($_POST)){
?>
    <h1>BMI計算</h1>
    <form action="bmi.php" method="POST">
        <div>
            <label for="">身高(cm)：</label><input type="number" name="height" id="">
        </div>
        <div>
            <label for="">體重(kg)：</label><input type="number" name="weight" id="">
        </div>
        <div>
            <input type="submit" value="計算BMI">
        </div>
    </form>
<?php
}else{
?> 
 <h1 style="font-size:3rem;text-align:center">
    你的BMI為: <?=$bmi;?>
    </h1>
    <h2 style="text-align:center">判定結果為:<?=$result;?></h2>
    <div style="text-align:center">
    <a href="bmi.html"><button>回到BMI計算</button></a>
    </div> 
<?php
}
?>  
</body>
</html>