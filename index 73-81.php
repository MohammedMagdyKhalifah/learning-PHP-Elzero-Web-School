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

echo 'filter_id("boolean") => ' . filter_id("boolean"). "<br>";

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

