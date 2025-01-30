
<?php

    // Lesson 13

    // $username = "Khalifah";
    // echo $username;
    // echo "<br>";

    // $username = "Messi";
    // echo $username;
    // echo "<br>";

    // echo 'Hello $username';
    // echo "<br>";

    // echo "Hello $username";
    // echo "<br>";
    

    // Testing Variables In Real World lesson 14 
    $username = "MohammedKhalifah";


    // Variable Variable lesson 15
    $a = "fristName";
    $$a = "Mohammed";
    $$$a = "Mohammed Khalifah";
    echo $fristName;
    echo "<br>";
    echo $$a;
    echo "<br>";
    echo "Hello ${$a}";
    echo "<br>";
    echo "Hello ${$$a}";
    echo "<br>";
    echo "<br>";


    // Assign By Value And By Reference lesson 16
    $a = "Mohammed";
    $b = &$a;
    $b= "Khalifah";

    echo "b = $b";
    echo "<br>";
    echo "a = $a"; $a="dsdsds";
    echo "<br>";
    echo "<br>";
    
    // Predefined Variables And Test lesson 17
    // echo "<pre>";
    //     print_r($_SERVER);
    // echo "</pre>";
    echo "<br>";
    echo "<br>";

    echo $_POST["username"];



    // Introduction To Constants lesson 18

    define("DB_NAME","database_project_1");
    define("MAIN_NUM",10);
    echo DB_NAME;
    echo "<br>";
    echo MAIN_NUM;
    echo "<br>";
    echo "<br>";

    // Predefined And Magic Constants And Reserved lesson 19
    echo php_uname(); // بتدينا معلومات عن السيرفير
    echo "<br>";
    echo PHP_OS_FAMILY;
    echo "<br>";
    echo __LINE__;
    echo "<br>";
    echo __FILE__;
    echo "<br>";
    echo __DIR__;
    echo "<br>";
    echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP page <?php echo $username ?></title>
</head>
<body>
    <div>Welcome <?php echo $username ?></div>
    <div><?php echo $username ?> You Scored 1000 Points</div>
    <div>
        <?php include("score.php") ?>
    </div>
    <form action="" method="post">
        <input type="text" name="username">
        <input type="submit" value="Send">
    </form>
</body>
</html>
