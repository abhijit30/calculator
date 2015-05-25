<?php
function average($array)
{
    foreach($array as $value)
    {
        echo $value.'<br />';
        $total+=$value;
        $count++;
    }
    $result=$total/$count;
    return $result;
}
?>