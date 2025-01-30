<?php
    // Arithmetic Operators lesson 20
    echo 10+20;
    echo '<br>';
    echo gettype(10+20);
    echo '<br>';
    echo '<br>';

    echo 9.5+10.5;
    echo '<br>';
    echo gettype(9.5+10.5);
    echo '<br>';
    echo '<br>';

    echo 20%6;
    echo '<br>';
    echo gettype(20%6);
    echo '<br>';
    echo '<br>';


    echo 2**4;
    echo '<br>';
    echo gettype(2**4);
    echo '<br>';
    echo '<br>';


    echo "100";
    echo '<br>';
    echo gettype("100");
    echo '<br>';
    echo '<br>';
    
    echo "100";
    echo '<br>';
    echo gettype("100"); // int
    echo '<br>';
    echo '<br>';

    // Assignment Operators lesson 21

    echo 'Assignment Operators lesson 21';
    echo '<br>';

    $a = 1;
    $a+=1;
    echo "a+=1 => $a";
    echo '<br>';
    
    // Comparison Operators - Part 1 lesson 22
    echo "Comparison Operators - Part 1";
    echo '<br>';

    echo "100==100  =>   ";
    var_dump(100==100);
    echo '<br>';

    echo "'100'==100  =>   ";
    var_dump('100'==100);
    echo '<br>';

    echo "'100'===100  =>   ";
    var_dump('100'===100);
    echo '<br>';
    echo '<br>';

    // Comparison Operators - Part 2 lesson 23
    echo "Comparison Operators - Part 2 lesson 23";
    echo '<br>';

    echo "100 <=> 200 => ";
    var_dump(100 <=> 200); // -1
    echo '<br>';
    echo "200 <=> 200 => ";
    var_dump(200 <=> 200); // 0
    echo '<br>';
    echo "300 <=> 200 => ";
    var_dump(300 <=> 200); // 1
    echo '<br>';
    echo '<br>';

    // Increment And Decrement Operators lesson 24
    echo "Increment And Decrement Operators lesson 24";
    echo '<br>';

    $a=0;
    echo "a++ => ".$a++;
    echo '<br>';
    echo "a => ".$a;
    echo '<br>';

    $a=0;
    echo "++a => ".++$a;
    echo '<br>';
    echo "a => ".$a;
    echo '<br>';
    echo '<br>';

    // Logical Operators lesson 25
    echo "Logical Operators lesson 25";
    echo '<br>';

    var_dump(100>50 and 100>60 and 100>90);
    echo '<br>';
    echo '<br>';


    // String Operators lesson 26
    echo "String Operators lesson 26";
    echo '<br>';

    $a = "Mohammed";
    $b = "Magdy";
    $c = "Khalifah";

    echo "a b c => $a $b $c";
    echo '<br>';

    echo "a b c => ". $a. $b. $c;
    echo '<br>';
    echo '<br>';


    // Array Operators lesson 27
    echo "Array Operators lesson 27";
    echo '<br>';

    $arr1 = [
        1 => "A",
        2 => "B"
    ];
    $arr2 = [
        3 => "A",
        4 => "B"
    ];
    $arr3 = [
        2 => "B",
        1 => "A"
    ];
    echo "<pre>";
    print_r($arr1+$arr2);
    echo "</pre>";
    echo "<br>";

    echo "arr1==arr3 => ";
    var_dump($arr1==$arr3);
    echo "<br>";

    echo "arr1===arr3 => "; // Order matter
    var_dump($arr1===$arr3);
    echo "<br>";
    echo "<br>";

    // Error Control Operator lesson 28
    echo "Error Control Operator lesson 28";
    echo "<br>";
    
    $s=10;
    $d=@$s or die("variable not found");
    echo " b => $d";
    echo "<br>";
    echo "<br>";


    // Operator Precedence lesson 29
    echo "Operator Precedence lesson 29";
    echo "<br>";



