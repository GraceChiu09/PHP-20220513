<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算結果</title>
</head>
<body>
    <h1 style="font: size 3rem;text-align:center">
    <?php

    $bmi= $_POST['bmi'];
    echo "你的BMI值為".$bmi;
    
    
    
    
    
    
    ?>

    <!-- 請根據BMI值，在畫面上呈現建議過瘦或過胖 -->

    <?php
    $bmi="18";
   
    // if($bmi<18.5){
    //     echo "體重過輕";
       
    // }elseif($bmi>=24 || $bmi>=27){
    //     echo "過重";
    // }elseif($bmi>=27 || $bmi>=30){
    //     echo "輕度肥胖";
    // }elseif($bmi>=30 || $bmi>=35){
    //     echo "中度肥胖";
    // }else{
    //     echo "正常範圍";
    // }

    if ($bmi < 18.5) {
        echo "體重過輕";
    } else if($bmi >= 18.5 && $bmi < 24){
        echo "正常範圍";
    }else if($bmi >= 24 && $bmi < 27){
        echo "過重";
    }else if($bmi >= 27 && $bmi < 30){
        echo "輕度肥胖";
    }else if($bmi >= 30 && $bmi < 35){
        echo "中度肥胖";
    }else if($bmi > 35){
        echo "重度肥胖";
    };
    

?>
    
    

    <div style="background-color:aquamarine">
    <a href="./bmi.html"><button>回到BMI計算</button></a>


    </div>
</h1>
</body>
</html>