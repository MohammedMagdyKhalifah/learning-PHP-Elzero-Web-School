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

    // if($_SERVER['REQUEST_METHOD']==="POST"){
        echo "username => ".$_POST["username"];
        echo "<br>";
        echo "lang => ".$_POST["lang"];
        echo "<br>";

    // }
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



