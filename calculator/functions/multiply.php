<?php
function multiply($array)
{
    $result=1;
    foreach($array as $value)
    {
        echo $value.'<br>';
      $result*=$value;
    }
    return $result;
}
?>