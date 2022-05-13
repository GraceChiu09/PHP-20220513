<?php
//身高
//體重
//把bmi資料整包丟進來計算

// print_r($_GET);

echo "POST陣列的內容";
echo "<br>";
print_r($_GET);

if(empty($_GET)){
    $height=$_POST['height'];
    $weight=$_POST['weight'];


}else{
    $height=$_GET['height'];
    $weight=$_GET['weight'];
};


// $height=$_POST['height'];
// $weight=$_POST['weight'];

// echo "身高為".$height;
// echo "<br>";
// echo "體重為".$weight;

//輸入bmi計算公式

$bmi=round($weight/(($height/100)*($height/100)),1);
$result='';
// echo "<br>";
// echo "BMI值為".$bmi;

header("location:result.php?bmi=$bmi");




?>