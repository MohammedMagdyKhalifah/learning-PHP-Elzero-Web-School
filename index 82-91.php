<?php
// #082 - File System Function Part One 4 Functions
echo '<br>#082 - File System Function Part One 4 Functions<br>';

echo 'disk_total_space("/") => '. disk_total_space("/"). '<br>';
echo 'disk_total_space("/")/1024/1024/1024  => '. disk_total_space("/")/1024/1024/1024 . '<br>';

echo 'disk_free_space("/") => '. disk_free_space("/")/1024/1024/1024 . '<br>';

echo 'file_exists("index 73-81.php") => ';
var_dump(file_exists("index 73-81.php"));

echo '<br>filesize("index 73-81.php") => ';
var_dump(filesize("index 73-81.php"));

// #083 - Is_Dir, MkDir, RmDir
echo '<br>#083 - Is_Dir, MkDir, RmDir<br>';

/*
    File System Functions
    - is_dir(Name)
    --- Tells If The Filename Is A Directory
    - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
    --- Permissions Is Ignored On Windows
    --- Permissions Is Octal Number Start With 0
    ------ Second Number Is => Owner Permission
    ------ Third Number Is => User Group Permission
    ------ Fourth Number Is => Others Permissions
    - rmdir(Name[Required], Context[Optional])
  */
echo'<br>var_dump(is_dir("lesson")) => ';
var_dump(is_dir("lesson"));

echo'<br>var_dump(is_dir("fd")) => ';
var_dump(is_dir("fd"));

mkdir('ass');
rmdir("ass");

// mkdir('f1/f2/f3/f4/f5',0777,true);

// #084 - Chmod, Fileperms, Clearstatcache
echo '<br>#084 - Chmod, Fileperms, Clearstatcache<br>';

// mkdir("Y", 0700) ;
echo '<br>mkdir("Y", 0700) => '. fileperms("Y");

chmod("Y",0644);
clearstatcache();
echo '<br>chmod("Y",0644) => '. fileperms("Y");

// #085 - Basename, Dirname, Realpath, Pathinfo
echo '<br>#085 - Basename, Dirname, Realpath, Pathinfo<br>';

/*
    File System Functions
    - basename(Path[Required], Suffix[Optional])
    --- Returns Trailing Name Component Of Path
    - dirname(Path[Required], Levels[Optional] = 1)
    --- Returns A Parent Directory's Path
    --- Levels => Number of Parent Directories To Go Up
    - realpath(Path[Required])
    --- Returns Absolute Path
    - pathinfo(Path[Required], Flags[Optional]) => Return Array
    --- PATHINFO_DIRNAME
    --- PATHINFO_BASENAME
    --- PATHINFO_EXTENSION
    --- PATHINFO_FILENAME
  */
  echo 'basename(__FILE__) => '.basename(__FILE__). "<br>";
  echo 'basename(__FILE__,".php") => '.basename(__FILE__,".php"). "<br>";

  echo 'dirname(__FILE__) => '. dirname(__FILE__) .'<br>';
  echo 'dirname(__FILE__,2) => '. dirname(__FILE__,2) .'<br>';

  echo 'realpath(__FILE__) => '. realpath(__FILE__) .'<br>';
  
  echo "<pre>pathinfo(__FILE__) => ";
  print_r(pathinfo(__FILE__));
  echo "</pre>";

  #086 - fopen Part 1 - fgets, fread, fclose
  echo '<br>#086 - fopen Part 1 - fgets, fread, fclose<br>';
  $handle = fopen("elzero.text","r+");

  echo 'fgets($handle)=> '. fgets($handle) .'<br>' ;
  fclose($handle);
  $handle = fopen("elzero.text","r+");

  echo '<br>fgets($handle,4)=> '. fgets($handle,4) .'<br>' ;
  fclose($handle);
  $handle = fopen("elzero.text","r+");

  echo '<br>fread($handle,1024)=> '. fread($handle,1024) .'<br>';
  fclose($handle);

  // #087 - fopen Part 2 - fwrite
  echo '<br>#087 - fopen Part 2 - fwrite<br>';
  $handle = fopen("elzero.text","a");

  fwrite($handle,"\r\nI Love Elzero Web School");
  fclose($handle);

  // #088 - fopen Part 3 - file, feof And Loop Practice
  echo '<br>#088 - fopen Part 3 - file, feof And Loop Practice<br>';
  /*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- [c]
  ------ For Write
  ------ Create If Not Exists
  ------ No Problem If Its Exists
  ------ No Truncation
  ------ Pointer At The Beginning
  --- [c+] For Read &#038; Write

  - file(File[Required], Flag[Optional], Context[Optional])
  --- Read Entire File Into Array
  - feof(File[Required])
  --- Tests For EOF On A File Pointer
*/

echo '<pre> file("elzero.text") => ';
print_r(file("elzero.text"));
echo '</pre>';

$handle = fopen("elzero.text","r");
$line=1;
while (!feof($handle)){
  echo "$line => ".fgets($handle) . "<br>";
  $line++;
}
  fclose($handle);

  // #089 - ftell, fseek, rewind
  echo '<br>#089 - ftell, fseek, rewind<br>';
  /*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  - rewind(File[Required])
  --- Return The Pointer To The Beginning Of The File

  - ftell(File[Required])
  --- Return Current Position Of The Pointer

  - fseek(File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
  --- Go To A Position
  --- Offset In Bytes
  --- SEEK_SET => Equal To Offset
  --- SEEK_CUR => Current + Offset
  --- SEEK_END => EOF + Offset [Accept Negative]
*/

$handle = fopen("elzero.text","r");
echo 'ftell($handle) => ' . ftell($handle) .'<br>';
echo 'fgets($handle) => ' . fgets($handle) .'<br>';
echo 'ftell($handle) => ' . ftell($handle) .'<br>';
echo 'fgets($handle) => ' . fgets($handle) .'<br>';
echo 'ftell($handle) => ' . ftell($handle) .'<br>';

echo 'rewind($handle) => '.rewind($handle) .'<br>';
echo 'ftell($handle) => ' . ftell($handle) .'<br>';

echo 'fseek($handle,28) => '. fseek($handle,28) .'<br>';
echo 'fgets($handle) => ' . fgets($handle) .'<br>';

echo 'mb_strlen("Elzero"\r\n,"8bit") => ' . mb_strlen('Elzero\r\n',"8bit") .'<br>';

echo 'fseek($handle,-28,SEEK_END) => '. fseek($handle,-10,SEEK_END) .'<br>';
echo 'fgets($handle) => ' . fgets($handle) .'<br>';


fclose($handle);

// #090 - glob, rename, copy, unlink
echo '<br>#090 - glob, rename, copy, unlink<br>';
/*
  File System Functions

  - glob(Pattern[Required], Flags[Optional])
  --- Find Pathnames Matching A Pattern And Return Array

  - rename(Old[Required], New[Required]) => Move
  --- Renames A File Or Directory

  - copy(Old[Required], New[Required], Context[Optional])
  --- Copy A File

  - unlink(File[Required], Context[Optional])
  --- Delete A File

  Same Concept
  - opendir()
  - readdir()
  - closedir()
*/
echo '<pre>glob("*.*") => ';
print_r(glob("*.*"));
echo '</pre>';

// rename same place
// rename("Old/test.txt","Old/text 1.txt");

// Rename other place
// rename("Old/test.txt","new/text 1.txt");

// Copy without Rename
// copy('new/text 1.txt','Old/text 1.txt');

// unlink("Old/text 1.txt");

// #091 - file_get_contents, file_put_contents
echo '<br>#091 - file_get_contents, file_put_contents<br>';

/*
  File System Functions

  - file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength(Optional))
  --- Reads Entire File Into A String

  - file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
  --- Write Data To File
  --- Mode
  ------ FILE_APPEND => If File Exists Append To It

  - Create If Not Exists
  - Open And Close
  - Return Number Of Bytes

  Search
  - Get Set Include Path

*/
echo 'get_include_path() => ' .get_include_path() . '<br>';
// echo 'file_get_contents("elzero.text") => '.file_get_contents("peclcmd.php",true,null,1). "<br>";
// print_r(file("https://www.apple.com"));
// echo 'file_get_contents("https://www.apple.com") => '.file_get_contents("https://www.apple.com"). "<br>";
echo file_put_contents("elzero.text", "\r\nThis Is New Line", FILE_APPEND);
echo file_put_contents("elzero.text", "\r\nThis Is New Line");