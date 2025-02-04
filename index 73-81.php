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

