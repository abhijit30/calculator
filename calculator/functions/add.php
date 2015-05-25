<?php
function add($array)
{
    foreach($array as $value)
    {
        echo $value.'<br>';
        $result+=$value;
    }
    return $result;
}
?>