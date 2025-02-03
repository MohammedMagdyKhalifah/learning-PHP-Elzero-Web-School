<?php 

// #063 - Array Functions Part 1 - 4 Functions
echo "#063 - Array Functions Part 1 - 4 Functions<br>";

$friends=["Mohammed","Osama","Omar","Ali","Gamal"];

echo"<pre>";
print_r($friends);
echo"</pre>";

echo"<pre>";
print_r(array_chunk($friends,2));
echo"</pre>";

$countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];
echo"<pre>";
print_r($countries);
echo"</pre>";

echo"<pre>";
print_r(array_chunk($countries,2));
echo"</pre>";

echo"<pre>";
print_r(array_chunk($countries,2,true));
echo"</pre>";

echo"<pre>";
print_r(array_change_key_case($countries,CASE_LOWER));
echo"</pre>";

$keys = ["A", "O", "K"];
$values = ["Ahmed", "Osama", "Kamal"];

echo"<pre>";
print_r($keys);
echo"</pre>";
echo"<pre>";
print_r($values);
echo"</pre>";

echo"<pre>";
print_r(array_combine($keys,$values));
echo"</pre>";

$counting = ["B", "A", "A", "B", "B", "B", "C"];

echo"<pre>";
print_r(array_count_values($counting));
echo"</pre>";

// #064 - Array Functions Part 2 - 5 Functions
echo "#064 - Array Functions Part 2 - 5 Functions<br>";
$family = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", ["Eman", "Noha"]];

echo"<pre>";
print_r($family);
echo"</pre>";

echo"<pre>";
print_r(array_reverse($family));
echo"</pre>";


echo"<pre>";
print_r(array_reverse($family,true));
echo"</pre>";

echo"<pre>";
print_r(array_flip($family)); //عكس المفتاح والقيمة
echo"</pre>";

$counting = [
    "A",
    "B",
    "C",
    [1, 2, 3]
];

  echo"<pre>";
  print_r($counting);
  echo"</pre>";
  echo "count(counting) ".count($counting)."<br>";
  echo "count(counting,1) ".count($counting,1)."<br>";

  $search = ["1", 2, 3, 4];
  echo"<pre>";
  print_r($search);
  echo"</pre>";

  if(in_array(1,$search)){
    echo "The Element Is Found<br>";
  }
  if(!in_array(1,$search,true)){
    echo "The Element Is NOT Found<br>";
  }

  $courses = [
    "Javascript" => 95,
    "PHP" => 100,
    "HTML" => 60,
    "CSS" => 65
  ];
  echo"<pre>";
  print_r($courses);
  echo"</pre>";

  if (array_key_exists("PHP", $courses)) {
    echo "The Course Is Found And The Price Is: " . $courses["PHP"]."<br>";
  }

//   #065 - Array Functions Part 3 - 5 Functions
    echo "#065 - Array Functions Part 3 - 5 Functions<br>";
    $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Osama", "Eman", 1, "1"];
    echo"<pre>friends";
    print_r($friends);
    echo"</pre>";
    echo"<pre>array_keys(friends,Sameh)";
    print_r(array_keys($friends,"Sameh"));
    echo"</pre>";
    echo"<pre>array_keys(friends,1)";
    print_r(array_keys($friends,"1"));
    echo"</pre>";
    echo"<pre>array_keys(friends,1,true)";
    print_r(array_keys($friends,"1",true));
    echo"</pre>";

    $pad = ["A", "B", "C", "D"];
    echo"<pre>pad";
    print_r($pad);
    echo"</pre>";
    
    echo"<pre>array_pad(pad,10,@)";
    print_r(array_pad($pad,10,"@"));
    echo"</pre>";
    echo"<pre>array_pad(pad,-10,@)";
    print_r(array_pad($pad,-10,"@"));
    echo"</pre>";

    $product = [10, 5, 2, 10];
    echo"<pre>product";
    print_r($product);
    echo"</pre>";

    echo"array_product(product)".array_product($product)."<br>";
    echo "array_sum(product) ".array_sum($product)."<br>";

    // #066 - Current, Next, Prev, Reset, End
    echo "#066 - Current, Next, Prev, Reset, End<br>";

    $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Eman"];
    echo"<pre>friends";
    print_r($friends);
    echo"</pre>";

    echo "current(friends) ".current($friends) ."<br>";
    echo "next(friends) ".next($friends) ."<br>";
    echo "current(friends) ".current($friends) ."<br>";
    echo "next(friends) ".next($friends) ."<br>";
    echo "next(friends) ".next($friends) ."<br>";
    echo "next(friends) ".next($friends) ."<br>";
    echo "prev(friends) ".prev($friends) ."<br>";
    echo "current(friends) ".current($friends) ."<br>";
    echo "reset(friends) ".reset($friends) ."<br>";
    echo "end(friends) ".end($friends) ."<br>";
    

