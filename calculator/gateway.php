<?php
$all_files=array();
$file= glob("functions/*.php");
foreach($file as $file_path)
{
    $file_extension = pathinfo($file_path);
    $file_name = $file_extension['filename'];
    $temp = $file_name.'.php';
    include "$file_path";
    if(function_exists("$file_name"))
    {
        $all_files[]=$file_name;
    }
}
?>