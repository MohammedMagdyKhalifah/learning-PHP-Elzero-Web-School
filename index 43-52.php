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


    // 


?>
