<?php
if(empty($_GET)){ //判斷$_GET是否為空,如果為空表示為POST的方式傳送
    $height=$_POST['height'];
    $weight=$_POST['weight'];
}else{
    $height=$_GET['height'];
    $weight=$_GET['weight'];
};
echo "<br>";

$bmi= round($weight /(($height/100)*($height/100)),1);
echo "身高為: ".$height;
echo "<br>";
echo "體重為: ".$weight;
echo "<br>";
echo "BMI值為: ".$bmi;

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


header("location:result.php?bmi=$bmi&result=$result");

?>