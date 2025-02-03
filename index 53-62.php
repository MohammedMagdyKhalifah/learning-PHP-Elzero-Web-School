<?php 
    // String Access And Update Elements lesson 53
    echo "String Access And Update Elements lesson 53<br>";

    $str = "Mohammed";
    echo "letter 3 is ".$str[2]."<br>";
    echo "Number of letter is ".strlen($str)."<br>";
    echo "Last letter is ".$str[-1]."<br>";

    echo "$str<br>";
    $str[7]="A";
    echo "$str<br>";

    // String Functions - Part 1 - 6 Functions lesson 54
    echo "String Functions - Part 1 - 6 Functions lesson 54<br>";

    // lcfirst(string[Required]) Lowercase first letter
    // ucfirst(string[Required]) Uppercase first letter
    // strtolower(string[Required]) Lowercase string
    // strtoupper(string[Required])
    // ucwords(string[Required],Delimiters[optional]) First letter of each word in the string
    // str_repeat(string[Required],Count[Required])
    echo lcfirst("MOHAMMED KHALIFAH")."<br>";
    echo ucfirst("mohammed khalifah")."<br>";
    echo strtolower("MOHAMMED KHALIFAH")."<br>";
    echo ucwords("mohammed khalifah")."<br>";
    echo ucwords("mohammed magdy|khalifah","|")."<br>";
    echo str_repeat("mohammed magdy khalifah<br>",10)."<br>";


    // String Functions - Part 2 - 7 Functions lesson 55
    echo "String Functions - Part 2 - 7 Functions lesson 55<br>";
    $names=["Mohammed","Ali","Kareim","Omar"];
    echo "<pre>";
    print_r($names);
    echo "</pre>";

    echo "<br>";

    echo implode($names)."<br>";
    echo implode(" ",$names)."<br>";
    echo implode("%",$names)."<br>";
    echo implode("--",$names)."<br>";

    $str="Mohammed Magdy Khalifah";
    echo "<pre>";
    print_r(explode(" ",$str));
    echo "</pre>";
    
    echo "<pre>";
    print_r(explode(" ",$str,2));
    echo "</pre>";

    echo "<pre>";
    print_r(explode(" ",$str,-1)); // احذف اخر عنصر
    echo "</pre>";

    echo "Mohammed Magdy Khalifah<br>";
    echo str_shuffle("Mohammed Magdy Khalifah")."<br>";
    echo strrev("Mohammed Magdy Khalifah")."<br>";

    echo trim("    Mohammed Magdy Khalifah  ")."<br>";
    echo ltrim("    Mohammed Magdy Khalifah  ")."<br>";
    echo rtrim("    Mohammed Magdy Khalifah  ")."<br>";

    // String Functions - Part 3 - 5 Functions lesson 56
    echo "String Functions - Part 3 - 5 Functions lesson 56<br>";
    echo chunk_split("Mohammed Magdy Khalifah",3,"#")."<br>";

    echo "<pre>";
    print_r(str_split("Mohammed Magdy Khalifah"));
    echo "</pre>";

    echo "<pre>";
    print_r(str_split("Mohammed Magdy Khalifah",5));
    echo "</pre>";

    echo "<h1>Hello <b>Khalifah</b></h1>";
    echo "<br>";

    echo strip_tags("<h1>Hello <b>Khalifah</b></h1>");
    echo "<br>";
    echo strip_tags("<h1>Hello <b>Khalifah</b></h1>","<h1>");
    echo "<br>";


    echo nl2br("Mohammed\nMagdy\nKhalifah\n");
    echo nl2br("Mohammed\nMagdy\nKhalifah\n",false);

    // String Functions - Part 4 - 5 Functions lesson 57
    echo "String Functions - Part 4 - 5 Functions lesson 57<br>";

    var_dump(strpos("hello Mohammed","Mohammed"));
    echo "<br>";
    var_dump(strpos("hello Mohammed","o",5));
    echo "<br>";
    var_dump(strpos("hello Mohammed","o",-4));
    echo "<br>";
    var_dump(strrpos("hello Mohammed","e"));
    echo "<br>";
    var_dump(stripos("hello Mohammed","H"));
    echo "<br>";
    var_dump(substr_count("Hello Hello","He"));
    echo "<br>";
    var_dump(substr_count("Hello Hello","He",1,8));
    echo "<br>";

    // String Functions - Part 5 - 4 Functions lesson 58
    echo "String Functions - Part 5 - 4 Functions lesson 58<br>";
    parse_str("name=Mohammed&email=mmmak2017@gmal.com&os=mac",$quary);

    echo "<pre>";
    print_r($quary);
    echo "</pre>";

    echo $quary["name"]."<br>";
    echo $quary["email"]."<br>";
    echo $quary["os"]."<br>";

    echo "Hello [] * + .<br>";
    echo quotemeta("Hello [] * + .<br>");
    echo "<br>";

    echo str_pad("12345",5,0)."<br>";
    echo str_pad("12",5,0)."<br>";
    echo str_pad("1",5,0)."<br>";
    echo str_pad("55",5,0)."<br>";
    echo "<br>";

    echo str_pad("12345",5,0,STR_PAD_LEFT)."<br>";
    echo str_pad("12",5,0,STR_PAD_LEFT)."<br>";
    echo str_pad("1",5,0,STR_PAD_LEFT)."<br>";
    echo str_pad("55",5,0,STR_PAD_LEFT)."<br>";

    $trans= ["@"=>"ha","#"=>"ah"];
    echo strtr("Mo@mmed K@lifah","@","ha")."<br>";
    echo strtr("Mo@mmed K@lif#",$trans)."<br>";
    echo "<br>";

    // String Functions - str_replace str_ireplace lesson 59
    echo "String Functions - str_replace str_ireplace lesson 59<br>";
    echo str_replace("@","o","M@hammed M@hammed",$reblace_count)."<br>";
    echo $reblace_count."<br>";

    echo str_replace("@","o","M@hammed M@hammed",$reblace_count)."<br>";
    echo $reblace_count."<br>";

    echo "<pre>";
    print_r(str_replace(["one","two"],[1,2],["one","two","one","twoone"]));
    echo "</pre>";

    echo "<pre>";
    print_r(str_ireplace(["one","two"],[1,2],["ONE","TWO","one","twoone"]));
    echo "</pre>";

    // String Functions - substr_replace lesson 60
    echo "String Functions - substr_replace lesson 60<br>";
    echo substr_replace("OneTwo",1,3)."<br>";
    echo substr_replace("OneTwo",1,-1)."<br>";
    echo substr_replace("OneTwo",2,2,2)."<br>";
    echo substr_replace("OneTwo",2,2,-1)."<br>";

    echo substr_replace("OneTwo","@",1,0)."<br>";
 
    // String Functions - Part 8 - 4 Functions lesson 61
    echo "String Functions - Part 8 - 4 Functions lesson 61<br>";
    $str="welcome to AI examintegrity+";
    echo wordwrap($str,4,"<br>")."<br>";
    echo "<br>";

    echo wordwrap($str,4,"<br>",true)."<br>";
    echo "<br>";

    echo "a ".ord("a")."<br>";

    echo "97 ".chr(97)."<br>";
    echo "<br>";

    echo similar_text("61l2z3e4r5o5E","Elzero",$similar_percent)." $similar_percent <br>";

    // String Functions - Part 9 - 3 Functions lesson 62
    echo "String Functions - Part 9 - 3 Functions lesson 62<br>";
    echo strstr("Mohammed Magdy Khalifah","K")."<br>";
    echo strstr("Mohammed Magdy Khalifah","K",true)."<br>";
    
    echo strstr("Mohammed Magdy Khalifah","k")."<br>";

    echo 10_000_000 ."<br>";







    









    



?>
