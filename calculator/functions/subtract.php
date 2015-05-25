<?php
function subtract($array)
{
    $i=0;
    $count=0;
    foreach($array as $value)
    {
        $i++;
        $count++;
    }
    $result=$array[0]-$array[1];
    
    if($i==2)
    {
        return $result;
    }
    else
    {
        for($i=2;$i<=$count;$i++)
        {
            $result=$result-$array[$i];
        }
    }
    echo $i;
    return $result;
}
?>