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

    say_hello_to();

?>
