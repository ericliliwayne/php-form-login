
<?php
$default_user='wayne';
$default_pw='12345';

$acc=$_POST['acc'];
$pw=$_POST['pw'];
$error='';
if($acc!=$default_user || $pw!=$default_pw){
    $error="帳號密碼輸入錯誤!!請重新輸入!!";
    header("location:login.php?error=$error");
}else{
    // $error="帳號密碼輸入正確!!將帶您到會員首頁區!!";
    setcookie('login',$acc,time()+600);//設cookie
    header("location:membercenter.php");
}


?>