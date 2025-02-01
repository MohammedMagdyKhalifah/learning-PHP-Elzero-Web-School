<?php 

    // While Loop And Concept Of Loop lesson 37
    echo "While Loop And Concept Of Loop lesson 37";
    echo "<br>";

    $i = 1;
    while($i<=3){
        echo "$i<br>";
        $i++;
    }
    echo "<br>";
    $i = 1;
    while($i<=3):
        echo "$i<br>";
        $i++;
    endwhile;
    echo "<br>";

    $i = 1;
    do {
        echo "$i<br>";
        $i++;
    }while($i<=3);
    echo "<br>";

    // Loop For lesson 39
    echo "Loop For lesson 39";
    echo "<br>";
    
    for($i=1;$i<=10;$i++){
        echo "$i<br>";
    }
    echo "<br>";
    for($i=1;$i<=10;$i++):
        echo "$i<br>";
    endfor;
    echo "<br>";
    echo "<br>";
    
    // Loop Foreach lesson 40
    echo "Loop Foreach lesson 40";
    echo "<br>";

    $countries = ["EG","SA","QA","SY"];
    echo "<pre>";
        print_r($countries);
    echo "</pre>";

    foreach($countries as $country){
        echo "$country<br>";
    }


    $countries_with_discount = ["EG"=>50,"SA"=>30,"QA"=>50,"SY"=>70];
    echo "<pre>";
        print_r($countries_with_discount);
    echo "</pre>";

    foreach($countries_with_discount as $country => $discount){
        
        echo "$country The discount Is => $discount <br>";
    }
    echo "<br>";
    echo "<br>";

    // Break, Continue lesson 41
    echo "Break, Continue lesson 41";
    echo "<br>";
    $countries = ["EG","SA","QA","SY","USA","GER"];
    echo "<pre>";
        print_r($countries);
    echo "</pre>";

    foreach($countries as $country){
        echo "$country<br>";
        if($country=="USA"){
            break;
        }
    }
    echo "<br>continue <br>";
    foreach($countries as $country){
        
        if($country=="USA"){
            continue;
        }
        echo "$country<br>";
    }

    echo "<br>";
    echo "<br>";

    // Include And Require lesson 42
    // echo "Include And Require lesson 42";
    // echo "<br>";
    // include("test.php"); // $a = 10;
    // echo $a ."<br>";
    // echo "continue";

    // include("tests.php"); // wrong name
    // echo $a ."<br>";
    // echo "continue";

    require("test.php"); // $a = 10; If it's not exists, it will make an error and stop the code
    echo $a ."<br>";
    echo "continue";



    // 3
    $num = 2;
    $result = 1; // أول رقم في السلسلة

    while ($num < 520) {
        echo $result . "<br>"; // طباعة الرقم الحالي
        $result = ($result * 2) + 2; // تطبيق القاعدة الحسابية
        $num *= 2; // تحديث قيمة $num ليتوافق مع الشرط الموجود
    }

    // Needed Output
    // 1
    // 4
    // 10
    // 22
    // 46
    // 94
    // 190
    // 382



