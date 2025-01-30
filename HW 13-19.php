<?php 
// 1
$name="Elzero Courses"; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php echo $name; ?>>
    <title>Welcome To <?php echo $name; ?></title>
  </head>
  <body>
    <h1><?php echo $name; ?></h1>
    <p>Here In <?php echo $name; ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $name; ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $name; ?></footer>
  </body>
</html>

<?php 
    // 2
    $name = "elzero";
    $$name = "Web";
    echo $$name;
    echo $elzero;
    echo "Web";
    echo $GLOBALS["elzero"]; // Output: Web
    echo "<br>";
    echo "<br>";


    // 3
    $a = 200;
    $b = &$a;
    $a = 100;

    echo $b; // 100
    echo "<br>";
    echo "<br>";

    // 4
    echo $_SERVER['DOCUMENT_ROOT'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<pre>";
    echo print_r(openssl_get_cert_locations());;
    echo "</pre>";
    echo "<br>";
    echo "<br>";

    // 6
    echo __LINE__;
    echo "<br>";
    echo __FILE__;
    echo "<br>";
    echo __DIR__;
?>