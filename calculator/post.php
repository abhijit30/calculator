<?php
include 'gateway.php';
//echo $_POST['oper'];
if($_SERVER['REQUEST_METHOD']==POST)
{
    $string=$_POST['first'];
    $array=explode(',',$string);
    foreach($all_files as $values)
    {
        if($_POST['oper']==$values)
        {
            $result1=$values($array);
        }
    }
    $dbc=mysql_connect('localhost','root','abhijit');
        mysql_select_db('real_calci',$dbc);
        $num2= mysql_real_escape_string(trim(strip_tags($string)),$dbc);
        $query="INSERT INTO entries (entry_id, text_num , result) VALUES (0,'$num2','$result1')";
        mysql_query($query,$dbc);
        $query1="SELECT * FROM entries ORDER BY entry_id DESC LIMIT 10";
        if($r= mysql_query($query1,$dbc))
        {
            while($row=mysql_fetch_array($r))
            {
                print " You Entered : {$row['text_num']}<br>"."Result is: {$row['result']}". "<br>";
            }
        }
        else
        {
            print'<p style="COLOR :RED;"> Check the query</p>'.mysql_error().'</p>';
        }
}
?>