<?php
    // Data types Lesson 6
    // echo gettype(true);
    // echo '<br>';

    // echo gettype(12.2);
    // echo '<br>';

    // echo gettype(12);
    // echo '<br>';

    // echo gettype("hello");
    // echo '<br>';

    // $array = [1,2,3];
    // echo gettype($array );
    // echo '<br>';



    // Type Juggling And Automatic Type Conversion Lesson 7
    // echo 1+"2"; // 3
    // echo '<br>';
    // echo gettype(true);
    // echo '<br>';
    // echo true + true; //2
    // echo '<br>';
    // echo 5+"10 lesson"; // 15 => Warning
    // echo '<br>';
    // echo gettype(5+"10 lesson"); // Integer => Warning
    // echo '<br>';



    // Type Casting Lesson 8

    // echo 10 + (int)"5 lesson";  // 15 
    // echo '<br>';
    // echo 10 + (integer)"5 lesson";  // 15 
    // echo '<br>';
    // echo 10 + 15.5; // 25.5
    // echo '<br>';
    // echo 10 + (int)15.5; // 25


    // Boolean And Converting To Boolean Lesson 9
    // بتدينا معلومات مفصلة عن البيانات المدخلة
    // اي حاجة ليها قيمة بتكون true
    
    // var_dump((bool)""); //false
    // echo '<br>';
    // var_dump((bool)array()); //false
    // echo '<br>';
    // var_dump((bool)[]); //false
    // echo '<br>';
    // var_dump((bool)0); //false
    // echo '<br>';
    // var_dump((bool)"0"); //false
    // echo '<br>';
    // var_dump((bool)"s"); //true
    // echo '<br>';



    // String And Escaping Lesson 10
    // echo "Hello PHP";
    // echo "<br>";
    // echo 'Hello PHP';
    // echo '<br>';
    // echo 'Hello "PHP"';
    // echo '<br>';
    // echo 'Hello \'PHP\'';
    // echo '<br>';

    // echo 'Hello PHP
    // welcome to
    // multiple line';
    // echo '<br>';

    // // عشان اطبع على اكثر من سطر
    // echo nl2br('Hello PHP
    // welcome to
    // multiple line');
    // echo '<br>';


    // Heredoc And Nowdoc Lesson 11

    /*$name = "Mohammed Khalifah";
    echo <<<"Here"
    Hello world
    Special character !@#$%^*()" ' ?>< /\/\/\
    \\\\
    welcome $name
    Here;
    echo '<br>';

    echo <<<'Here'
    Hello world
    Special character !@#$%^*()" ' ?>< /\/\/\
    welcome $name 
    Here;
    echo '<br>';

    echo "<ul>";
        echo "<li>".$name."</li>";
        echo "<li>".$name."</li>";
        echo "<li>".$name."</li>";
    echo "</ul>";

    echo '<br>';


    echo <<<"navlinks"
    <ul>
        <li>$name</li>
        <li>$name</li>
        <li>$name</li>
    </ul>
    navlinks;
    echo '<br>';
    */
    
    // Array With Complex Tests Lesson 12

    // echo "<pre>";
    // print_r([
    //     "A" => "Mohammed",
    //     "B" => "Khalifah",
    //     0 => "Zero",
    //     "1" => "one",
    //     "Mahmoud",
    //     "Names" => ["Mohammed","Ali","Fouad","Samah"]

    // ]);
    // echo "</pre>";



    // التكليفات

    // 1 
    echo 15.2 + 14.7 + (10.5 + 10.5); // 50
    echo"<br>";
    echo (int)(15.2 + 14.7 + (10.5 + 10.5)); // Integer
    echo"<br>";

    // 2
    echo 100;
    echo"<br>";
    print 100;
    echo"<br>";
    printf("%d", 100);
    echo"<br>";

    // 3

    echo "Hello \"Elzero'\" \\\\ \"\"\" We Love \"$\$PHP\"";
    echo"<br>";
// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"

    // 4
    
    echo nl2br("We
Love
Elzero
Web
School");
    echo"<br>";
// Needed Output
// We
// Love
// Elzero
// Web
// School

    // 5
        // Needed Output
     echo nl2br(<<<'here'
    Hello "'Elzero'"
    We Love $Programming$
    Languages Specially "PHP"
    here);

    echo "<br>";

    // 6
    $something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
// Hello \PHP\ We Love Programming
    echo "<br>";
    echo "<br>";

    // 7
    echo (bool)"Hello PHP";
    echo '<br>';
    echo gettype((int)"Hello PHP");

    // Needed Output
    // 1
    // integer


    // 8
    echo "<pre>";
        print_r([
            "FrontEnd"=>[
                "HTML",
                "CSS",
                "JS" => [
                    "Vuejs" => [
                        2 => "v2",
                        3 => "v3"
                    ],
                    "Reactjs",
                    "Svelte"
                    ]
                ],
            "BackEnd" => [
                "PHP",
                "MySQL",
                "Security"
            ],
            "Git",
            "Github",
            "Testing"=>[
                "Unit Testing",
                "End To End",
                "Integration"
            ]

        ]);
    echo "</pre>";
    

