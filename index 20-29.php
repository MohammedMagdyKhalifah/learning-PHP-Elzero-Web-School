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
    $f = true and false;
    echo "f => $f"; // true
    echo "<br>";

    $h = true & false ;
    echo "h => $h"; // false
    echo "<br>";
    var_dump(true && false);
    echo "<br>";
    echo "<br>";
    echo "<br>";



    // 1
    // Replace ? With Arithmetic Operators
    echo 10 - 20 * 15 / 3 + 190 + 10 - 400; // Output: 0
    echo "<br>";
  
    // 2
    $a = "10";
    echo +$a;
    echo "<br>";
    echo gettype(+$a);
    echo "<br>";

    $a = "10";
    echo $a+0;
    echo "<br>";
    echo gettype(+$a+0);
    echo "<br>";

    $a = "10";
    echo (int)$a;
    echo "<br>";
    echo gettype((int)$a);
    echo "<br>";
    echo "<br>";

    // 3
    $a = 10;
    $b = 20;
    echo $a<=>$b;
    echo "<br>";
    echo "<br>";

    // 4
    $a = 10;
    $b = 20;
    $c = 15;

    var_dump($a && $b); // True
    var_dump($c > $a); // True
    var_dump($a and $b); // True
    var_dump($a or $b); // True
    var_dump($a < $c); // True
    var_dump($a <= $c); // True
    var_dump(gettype($a) || gettype($b)); // True
    // var_dump(gettype($a) ? gettype($b)); // True
    var_dump(gettype((float) $a) or gettype($b)); // True
    echo "<br>";
    echo "<br>";

    // 5
    $points = 10;

    // Write Your Code Here
    $points+=(int)($points/3);

    echo $points; // 13
    echo "<br>";

    // Write Your Code Here
    $points -= ceil($points/3);

    echo $points; // 8;
    echo "<br>";
    echo "<br>";

    // 6
    $a = "Elzero";
    $b = "Web";
    $c = "School";

    // Method One
    $d = $a." ".$b." ".$c;
    echo $d;
    echo "<br>";

    // Method Two
    $d = "$a $b $c";
    echo $d;
    echo "<br>";

    // Method Three
    $d = sprintf("%s %s %s", $a, $b, $c);
    echo $d;
    echo "<br>";
    // Method Four
    $d = join(" ", [$a, $b, $c]);
    echo $d;
    echo "<br>";
    echo "<br>";

    // 7
    $a = 46;
    $b = 54;

    echo $a + $b * $a + $b + $a * $a * $a; // 10000

    // 8
    // Code 1
    $a = $b;

    // Code 2
    $f = file("Not_A_File")or die("Custom Error");

    // Code 3
    @include("Not_A_File")or die("Custom Error");



