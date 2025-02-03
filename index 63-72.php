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


    // #067 - Array Merge, Array Replace, Array Rand, Shuffle
    echo "#067 - Array Merge, Array Replace, Array Rand, Shuffle<br>";

    /*
    Array Functions

    - array_merge(Array[Required], Other_Array/s[Optional])
    --- Merge One Or More Arrays
    ------ Later Array Key With The Same Name Override The Value Of The Previous One
    ------ Numeric Key Will Be Renumbered

    - array_replace(Array[Required], Replacement/s[Optional])
    --- Replaces Elements From Passed Arrays Into The First Array
    ------ Same Key => Value In Second Array Replace Same Key => Value In First Array
    ------ If Key In Second Array Not Found In Fisrt Array It Will Be Created

    - array_rand(Array[Required], Num[Optional])
    --- Pick One Or More Random Keys Out Of An Array

    - shuffle(Array[Required])
    --- Shuffle An Array
  */

  $merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  $merge_two = ["One" => "HTML", "Four" => "Python"];
  echo"<pre>merge_one";
  print_r($merge_one);
  echo"</pre>";
  echo"<pre>merge_two";
  print_r($merge_two);
  echo"</pre>";

  echo"<pre>array_merge(merge_one,merge_two)";
  print_r(array_merge($merge_one,$merge_two));
  echo"</pre>";


  
  $merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
  $merge_four = [40 => "Python", "10" => "Go"];
  echo"<pre>merge_three";
  print_r($merge_three);
  echo"</pre>";
  echo"<pre>merge_four";
  print_r($merge_four);
  echo"</pre>";

  echo"<pre>array_merge(merge_three,merge_four)";
  print_r(array_merge($merge_three,$merge_four));
  echo"</pre>";

  $main = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  $replace = ["One" => "HTML", "Four" => "Python"];
  echo"<pre>main";
  print_r($main);
  echo"</pre>";
  echo"<pre>replace";
  print_r($replace);
  echo"</pre>";
  
  echo"<pre>array_replace(main,replace)";
  print_r(array_replace($main,$replace));
  echo"</pre>";

  $nums = ["A", "B", "C", "D"];
  echo"<pre>nums";
  print_r($nums);
  echo"</pre>";

  echo"<pre>array_rand(nums)";
  print_r(array_rand($nums));
  echo"</pre>";
  echo"<pre>nums[array_rand(nums)]";
  print_r($nums[array_rand($nums)]);
  echo"</pre>";

  echo"<pre>numsarray_rand(nums,3)";
  print_r(array_rand($nums,2));
  echo"</pre>";

  $nums = ["A", "B", "C", "D"];
  echo"<pre>nums";
  print_r($nums);
  echo"</pre>";

  echo"<pre>shuffle(nums)";
  shuffle($nums);
  print_r($nums);
  echo"</pre>";

//   #068 - Array Shift, Array Pop, Array Push, Array Unshift
echo "#068 - Array Shift, Array Pop, Array Push, Array Unshift<br>";

/*
    Array Functions

    - array_shift(Array[Required])
    --- Shift An Element Off The Beginning Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_pop(Array[Required])
    --- Pop The Element Off Ehe End Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_push(Array[Required], Values[Optional])
    --- Push One Or More Elements Onto The End Of Array
    --- You Can Use $arr[]

    - array_unshift(Array[Required], Values[Optional])
    --- Add One Element In The Beginning Of An Array
    --- This Function Will Reset => "reset()" The Input Array Pointer
  */
  $chars = ["A", "B", "C", "D"];
  echo '<pre>$chars';
  print_r($chars);
  echo '</pre>';

  $frist = array_shift($chars);
  echo '<pre>array_shift($chars);';
  print_r($frist);
  echo '</pre>';

  echo '<pre>$chars';
  print_r($chars);
  echo '</pre>';

  $last = array_pop($chars);
  echo '<pre>$last = array_pop($chars)';
  print_r($last);
  echo '</pre>';

  echo '<pre>$chars';
  print_r($chars);
  echo '</pre>';

  array_push($chars,"G");

  echo '<pre>$chars after => array_push($chars,"G")';
  print_r($chars);
  echo '</pre>';

  $chars[]="PP"; // faster
  echo '<pre>$chars after => $chars[]="PP"';
  print_r($chars);
  echo '</pre>';

  array_unshift($chars,"One","Two","Three");
  echo '<pre>$chars after => array_unshift($chars,"One","Two","Three")';
  print_r($chars);
  echo '</pre>';

//   #069 - Array Slice, Array Splice
echo "#069 - Array Slice, Array Splice<br>";
/*
    Array Functions

    - array_slice(Array[Required], Start[Required], Length[Optional], Preserve_Keys[Optional])
    --- Extract A Slice Of The Array
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Slicing Until This Index
    ------ Not Set => All Elements From Start Position
    --- Preserve Keys
    ------ False => Default => Reset Keys
    ------ True => Preserve Keys
    --- If Array Have String Keys, It Will Always Preserve The Keys

    - array_splice(Array[Required], Start[Required], Length[Optional], Array[Optional])
    --- Remove A Portion Of The Array And Replace It With Something Else
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Removing Until This Index
    ------ Not Set => Remove All Elements From Start Position

  */
  


  



