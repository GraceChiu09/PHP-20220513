<?php
//身高
//體重
//把bmi資料整包丟進來計算

// print_r($_GET);
$height=$_GET['height'];
$weight=$_GET['weight'];

// echo "身高為".$height;
// echo "<br>";
// echo "體重為".$weight;

//輸入bmi計算公式

$bmi=round($weight/(($height/100)*($height/100)));
// echo "<br>";
// echo "BMI值為".$bmi;

header("location:result.php?bmi=$bmi");




?>