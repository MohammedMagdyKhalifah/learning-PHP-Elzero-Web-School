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
