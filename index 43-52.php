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



    


?>
