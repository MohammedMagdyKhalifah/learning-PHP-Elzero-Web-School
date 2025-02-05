<?php
#073 - abs, mt_rand, intdiv, fmod
echo "#073 - abs, mt_rand, intdiv, fmod<br>";
/*
    Math Functions

    - abs(Number[Required])
    --- Absolute Value => Non Negative Value

    - mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])
    --- mt_getrandmax() => Show Largest Possible Random Value
    --- Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

    - intdiv(dividend[Required], divisor[Required])
    --- Integer Division
    --- intdiv vs /

    - fmod(dividend[Required], divisor[Required])
    --- Floating Point Remainder (Modulo)
    --- fmod vs %
  */
  echo "abs(10) => ". abs(10) . "<br>";
  echo "abs(-0) => ". abs(-0) . "<br>";
  echo "abs(-10) => ". abs(-10) . "<br>";

  echo "rand() => ". rand() . "<br>";
  echo "rand(0,100) => ". rand(0,100) . "<br>";

  echo "intdiv(10,3) => ". intdiv(10,3) ."<br>";

  echo "fmod(11.5,5) => ".fmod(11.5,5) ."<br>";

//   #074 - ceil, floor
echo "#074 - ceil, floor<br>";
echo "ceil(10.2) => ". ceil(10.2)."<br>";
echo "ceil(10.9) => ". ceil(10.9)."<br>";
echo "ceil(-10.9) => ". ceil(-10.9)."<br>";

echo "floor(10.9) => ". floor(10.9)."<br>";
echo "floor(10.2) => ". floor(10.2)."<br>";
echo "floor(-10.2) => ". floor(-10.2)."<br>";

// #075 - round
echo "<br>#075 - round<br>";
echo 'round(5.99) => '.round(5.99) ."<br>";
echo 'round(5.50) => '.round(5.50) ."<br>";
echo 'round(5.49) => '.round(5.49) ."<br>";
echo 'round(5.1) => '.round(5.1) ."<br>";

echo 'round(5.99,1) => '.round(5.99,1) ."<br>";
echo 'round(5.89,1) => '.round(5.89,1) ."<br>";

echo 'round(5.5,0,PHP_ROUND_HALF_DOWN) => '.round(5.5,0,PHP_ROUND_HALF_DOWN) ."<br>";

// #076 - sqrt, min, max
echo '<br>#076 - sqrt, min, max<br>';
echo 'sqrt(16) => '.sqrt(16)."<br>";
echo 'sqrt(256) => '.sqrt(256)."<br>";
echo 'sqrt(36) => '.sqrt(36)."<br>";

echo 'min(78,98) => '.min(78,98)."<br>";
echo 'max(78,98) => '.max(78,98)."<br>";

// #077 - filter_list, filter_id, filter_var
echo "<br>#077 - filter_list, filter_id, filter_var<br>";

echo "<pre>filter_list()";
print_r(filter_list());
echo "</pre>";

echo 'filter_id("boolean") => ' . filter_id( "boolean"). "<br>";

$value=true;
if(filter_var($value,FILTER_VALIDATE_BOOL)){
    echo '$value is a bool value';
}

// #078 - filter_var Validate Filters Part 1
echo '<br>#078 - filter_var Validate Filters Part 1<br>';
$bool = "YEs";
echo '$bool = "YEs => ';
var_dump(filter_var($bool,FILTER_VALIDATE_BOOL));

$bool = "False";
echo '<br>$bool = "False" => ';
var_dump(filter_var($bool,FILTER_VALIDATE_BOOL,FILTER_NULL_ON_FAILURE));

$bool = "fdd";
echo '<br>$bool = "fdd" => ';
var_dump(filter_var($bool,FILTER_VALIDATE_BOOL,FILTER_NULL_ON_FAILURE));

$url = "https://chatgpt.com";
echo '<br>$url = "https://chatgpt.com" => ';
var_dump(filter_var($url,FILTER_VALIDATE_URL));

$ip = "192.168.2.1";
echo '<br>$ip = "192.168.2.1" => ';

var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV4]));

// #079 - filter_var Validate Filters Part 2
echo "<br>#079 - filter_var Validate Filters Part 2<br>";
/*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_EMAIL
    ---------- Flag => FILTER_NULL_ON_FAILURE

    ------ FILTER_VALIDATE_INT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Int On Success

    ------ FILTER_VALIDATE_FLOAT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Float On Success
  */
  $email = "mmmak2017@gmail.com";
  echo '<br>$email = "mmmak2017@gmail.com" => ';
  var_dump(filter_var($email,FILTER_VALIDATE_EMAIL,FILTER_NULL_ON_FAILURE));

  $int = "100";
  echo '<br>$int = "100" => ';
  var_dump(filter_var($int,FILTER_VALIDATE_INT,FILTER_NULL_ON_FAILURE));

  $int = "1020";
  echo '<br>$int = "1020" => ';
  var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE | FILTER_NULL_ON_FAILURE,
    "options"=> ["min_range"=>50, "max_range"=>100]]
  ));

  $int = "100";
  echo '<br>$int = "100" => ';
  var_dump(filter_var(
    $int,
    FILTER_VALIDATE_INT,
    ["flags" => FILTER_NULL_ON_FAILURE | FILTER_NULL_ON_FAILURE,
    "options"=> ["min_range"=>50, "max_range"=>100]]
  ));
  $float = "100.0";
  echo '<br>$int = "100.0" => ';
  var_dump(filter_var(
    $float,
    FILTER_VALIDATE_FLOAT,
    ["flags" => FILTER_NULL_ON_FAILURE | FILTER_NULL_ON_FAILURE,
    "options"=> ["min_range"=>50, "max_range"=>100]]
  ));

  // #080 - filter_var Sanitize Filters
  echo "<br>#080 - filter_var Sanitize Filters<br>";

  /*
    Filter Functions

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Sanitize Filters

    ------ FILTER_SANITIZE_EMAIL
    ------ Remove All But Letters + Digits + !#$%&#038;'*+-=?^_`{|}~@.[]
    ------ Test ¥

    ------ FILTER_SANITIZE_NUMBER_INT
    --------- Remove All But Digits, +, -

    ------ FILTER_SANITIZE_NUMBER_FLOAT
    --------- Remove ALL But Digits, +, - And Optionally [.,eE]
    --------- Flags => FILTER_FLAG_ALLOW_THOUSAND
    --------- Flags => FILTER_FLAG_ALLOW_FRACTION

    ------ FILTER_SANITIZE_URL
    ------ Remove All But Letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
    ------ Test ¥ + Space
  */
  $email="o@ . sa";
  echo '<br>$email="o@ . sa" => ';
  var_dump(filter_var($email,FILTER_SANITIZE_EMAIL));

  $int=100;
  echo '<br>$int=100 => ';
  var_dump(filter_var($int,FILTER_SANITIZE_NUMBER_INT));

  $int="dskmdskm 10+ djfnjdnfjd 20";
  echo '<br>$int="dskmdskm 10+ djfnjdnfjd 20" => ';
  var_dump(filter_var($int,FILTER_SANITIZE_NUMBER_INT));

  $float = "1,950,150.6541";
  echo '<br>$float = "1,950,150.6541" => ';
 var_dump(filter_var(
  $float,
  FILTER_SANITIZE_NUMBER_FLOAT,
  ["flags"=> FILTER_FLAG_ALLOW_THOUSAND|FILTER_FLAG_ALLOW_FRACTION]
 )) ;



//  4
$array= filter_list();
$numbers=[];
foreach($array as $key => $value){
  $numbers[$key]=(int)filter_id($value);
}
echo "<pre>";
print_r($numbers);
echo "</pre>";
echo '<pre>array_combine($numbers,$array)';
print_r(array_combine($numbers,$array));
echo "</pre>";


//  #081 - filter_input
echo "<br>#081 - filter_input<br>";
echo filter_input(INPUT_GET,"num",FILTER_VALIDATE_INT)
?>
<form action="" method="GET">
  <input type="text" name="num">
  <input type="submit" name="Send">
</form>


