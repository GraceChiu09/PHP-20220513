<?php

if(!empty($_GET['error'])){
    echo "帳號錯誤";
        
}

$default_user='grace';
$default_pw='1234';

// $acc=$_POST['acc'];
// $pw=$_POST['pw'];

$acc=$_POST['acc'];
$pw=$_POST['pw'];

$error='';


if($acc==$default_user && $pw==$default_pw){
    echo "帳號正確";
    echo "Welcome";
}else{
    echo "帳號不正確";
    echo "<a href='login.php'>回首頁</a>";
}

header("location:login.php?error=$error");

?>