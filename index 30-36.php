<?php

    // If, Elseif, Else - Basics lesson 30
    echo "If, Elseif, Else - Basics lesson 30";
    echo "<br>";

    if(10 > 10){
        echo "Frist condition";
    }elseif(10>7){
        echo "Second condition";
    }else{
        echo "else condition";
    }
    echo "<br>";
    echo "<br>";

    
    // If, Elseif, Else - Real Life Examples lesson 31
    echo "If, Elseif, Else - Real Life Examples";
    echo "<br>";
    $page = "Home";
    if ($page =="About"){
        echo "This is the page";
    }
    echo "<br>";
    
    $title = "Home";
    if ($title == "") {
        $title = "unknown title";
    }
    echo $title;
    echo "<br>";

    $lang = "Arabic";
    if ($lang== "Arabic"){
        echo "مرحبا";
    } elseif ($lang=="English"){
        echo "welcome";
    }else{
        echo "unknown language";
    }
    echo "<br>";
    echo "<br>";

    // If, Elseif, Else - Basics lesson 32
    echo "If, Elseif, Else - Advanced Practice lesson 32";
    echo "<br>";
    echo "<br>";


    if($_SERVER['REQUEST_METHOD']==="POST"){
        echo "username => ".$_POST["username"];
        echo "<br>";
        echo "lang => ".$_POST["lang"];
        echo "<br>";
        if($_POST["lang"]=="ar"){
            header("Location: ar.php");
            exit();
        }elseif($_POST["lang"]=="en"){
            header("Location: en.php");
            exit();
        }
    }

    // If, Elseif, Else - Alternate Syntax lesson 33
    echo "If, Elseif, Else - Alternate Syntax lesson 33";
    echo "<br>";

    if(10>5) echo "10 > 5";
    echo "<br>";
    echo "<br>";

    if(10>5) : 
        echo "10 > 5";
        echo "<br>";

    endif;


    // Nested If And Advanced Practice lesson 34
    echo "Nested If And Advanced Practice lesson 34";
    echo "<br>";
    $name = "Osama";
    $is_student = true;
    $is_orphan = true;
    $country = "Egypt";
    $country_discount=50;
    $price=100;
    $student_discount=10;
    $orphan_discount=15;

    if($country=="Egypt"){
        if($is_student == true){
            if($is_orphan==true){
                echo "Hello $name";
                echo "<br>";
                echo "country discount $country_discount";
                echo "<br>";
                echo "student discount $student_discount";
                echo "<br>";
                echo "orphan discount $orphan_discount";
                echo "<br>";
                echo "the final price is ".$price-$country_discount-$student_discount-$orphan_discount;
            }else{
                echo "Hello $name";
                echo "<br>";
                echo "country discount $country_discount";
                echo "<br>";
                echo "student discount $student_discount";
                echo "<br>";
                echo "the final price is ".$price-$country_discount-$student_discount;
            }
        } else {
            echo "Hello $name";
            echo "<br>";
            echo "country discount $country_discount";
            echo "<br>";
            echo "the final price is ".$price-$country_discount;
        }
    }else{
        echo "Hello $name";
        echo "<br>";
        echo "No discount";
        echo "<br>";
        echo "the final price is $price";
    }
    echo "<br>";
    echo "<br>";

    // Ternary Conditional Operator lesson 35
    echo "Ternary Conditional Operator lesson 35";
    echo "<br>";
    
    echo (10>5)? "Good":"Bad";
    echo "<br>";

    echo "I Love PHP Because It's A ".((10>5)?"Good":"Bad")." Language";
    echo "<br>";
    $result = 10>5?"Good":"Bad";
    echo "I Love PHP Because It's A $result Language";
    echo "<br>";

    // Switch lesson 36
    echo "Switch lesson 36";
    echo "<br>";

    $day = "Sat";
    switch($day){
        case "Sat":
            echo "Hello Today is $day, we are open from 10:16";
            break;
        case "Sun":
            echo "Hello Today is $day, we are open from 10:18";
            break;
        case "Mon": 
        case "Thu":
            echo "Hello Today is $day, we are open from 08:12";
            break;
        default : 
            echo "Unknown Day";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    // 1  2 
    $a = 200;
    $b = 200;
    $c = 100;

    /*
    Check That:
    Variable "b" Larger Than Variable "a"
    Variable "a" Identical To Variable "c"
    Variable "a" Plus Variable "c" Identical To Variable "b"
    */

    if($b>$a){
        if($a==$c){
            if($a+$c==$b)
                echo "Yes";
        }elseif($c>$a){
            echo "A Is Not Larger Than B Or C";

        }
    }else{
        echo "A larger than or equal B";
        echo "<br>";
    }
    if($a>$c){
        echo "A larger than C";
    }
    echo "<br>";
    echo "<br>";

    // 2




    


    

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="username">
            <select name="lang">
                <option value="ar">Arabic</option>
                <option value="en">English</option>
                <option value="es">Spanish</option>
            </select>
            <input type="submit" value="Go">
        </form>
    </body>
    </html>



