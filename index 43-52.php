<?php
    // Function Introduction And DRY Concept lesson 43
    echo "Function Introduction And DRY Concept lesson 43<br>";
    echo "<br>";
    sat_hello("osama");
    sat_hello("Ali");
    sat_hello("Fouad");

    function sat_hello($someone){
        echo "Hello Mr. $someone <br>";
    }

    // Advanced Examples With Parameters And Arguments lesson 44
    echo "Advanced Examples With Parameters And Arguments lesson 44";
    echo "<br>";
    echo "<br>";
    

    function say_hello_to($one){
        echo "Hello Mr. $one <br>";
    }

    say_hello_to("Mohammed");

    function deep_freezer($item){
        if($item=="water")
            echo "Make Ice <br>";
        elseif ($item=="Coca Cola")
            echo "Make It Cold <br>";
        elseif ($item=="Fruit")
            echo "Make It Fresh <br>";
        else
            echo "Unknown Item <br>";

    }  
    deep_freezer("water");
    deep_freezer("Coca Cola");
    deep_freezer("Fruit");
    deep_freezer("Mohammed");


    // Function Return And Echo lesson 45
    echo "Function Return And Echo lesson 45<br>";
    $prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];
    function get_number($num1,$num2){
        return $num1+$num2;

    }

    $price_number = get_number(1,2);
    echo $prizes[$price_number]."<br>";
    echo "<br>";

    // Function Default Parameter Value lesson 46
    echo "Function Default Parameter Value 46<br>";
    function get_data($country="Private country",$name="Private name",$age="Private age",$address = "Private Address"){
        $line1 = "Your country is $country And Your name is $name <br>";
        $line2 = "Your Age is $age And You Live in $address <br>";
        return $line1.$line2;
    }
    echo get_data("egypt","Mohammed",23,"Madinah");
    echo "<br>";
    echo get_data("egypt","Mohammed",23);
    echo "<br>";
    echo get_data(name:"Mohammed Magdy Khalifah");
    echo "<br>";

    // Function Variable Arguments List lesson 47
    echo "Function Variable Arguments List lesson 47<br>";
    echo "<br>";

    function calculate(...$nums){

        // func_num_args();
        // func_get_args($index);
        // func_get_args();


        // $result=0;
        // foreach(func_get_args() as $num)
        //     $result+=$num;
        // return $result;

        $result=0;
        foreach($nums as $num){
            $result+=$num;
        }
        return $result;
    }
    echo calculate(10,20,10);
    echo "<br>";

    // Function Training And Unpacking Arguments lesson 48
    echo "Function Training And Unpacking Arguments lesson 48<br>";
    echo "<br>";

    function get_data2($name,$country="Private",...$skills){
        echo "Hello $name , Your country is $country <br>";
        foreach($skills as $skill){
            echo "--- $skill<br>";
        }
    }
    $my_skills = ["HTML","CSS","JAVA","PHP","Python"];

    get_data2("Mohammed","Saudi",...$my_skills);

    // Function Variable And Function Exists lesson 49

    echo "Function Variable And Function Exists lesson 49<br>";

    function one(){
        return "one from function one";
    }
    $func1="one";
    echo $func1()."<br>";

    if (function_exists(function: "onefd")){
        echo one();
    }else {
        echo "مش موجودة<br>";
    }

    // Passing Arguments By Reference And Return Type lesson 50
    echo "Passing Arguments By Reference And Return Type lesson 50<br>";

    function add5($num){
        return $num+=5;
    }
    // echo add5(15)."<br>";
    // $n = 15;
    // echo add5($n)."<br>";
    // echo $n."<br>";

    function add10(&$num){
        return $num+=10;
    }
    $n = 15;
    echo add10($n)."<br>"; //25
    echo "n = ".$n."<br>"; // 25

    function calc($num1,$num2):int{
        return $num1+$num2;
    }
    echo gettype(calc(10.5,.5)); // int
    echo "<br>";
    echo "<br>";

    // Anonymous Function lesson 51
    echo "Anonymous Function lesson 51<br>";

    $age = 24;
    $say_hi = function($someone) use ($age){
        return "Hi $someone your age is $age";
    };
    echo $say_hi("Mohammed")."<br>";

    // Pass Anonymous Function To Function => array_map
    $num = [10,20,30,40,50];
    function add20($item){
        return $item+=20;
    }
    $num_after_adding= array_map("add20",$num);
    echo"<pre>";
    print_r($num_after_adding);
    echo "</pre>";

    $num_after_adding_ten= array_map(function($item){return $item+10;},$num);
    echo"<pre>";
    print_r($num_after_adding_ten);
    echo "</pre>";




    echo "<br>";
    echo "<br>";
    // Arrow Function lesson 52
    echo "Arrow Function lesson 52<br>";
    $f1 = fn()=> "Hello" ;

    echo $f1."<br>";


?>
