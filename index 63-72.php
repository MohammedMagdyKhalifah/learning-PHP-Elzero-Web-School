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

