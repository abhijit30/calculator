<?php 
include 'post.php'; 
?>
<html>
<head>
    <title></title>
</head>
<body>
<form action = "index.php" method = "POST">
<p>Enter number's: <input type = "text" name = "first" size="30" value = <?php echo "$result1";?>> </input></p><br>
<?php 
echo '<p>SELECT AN OPERATOR:
<select name = "oper">';
foreach($all_files as $values){
    echo '<option value ='. $values;
    if(isset($_POST['oper']) && ($_POST['oper']==$values)) 
        echo 'selected='."selected";
    echo ' >'.$values.'</option>';
}
echo '</select>'.'<br /><br />';
?>
<?php echo $_POST['oper']; ?> 
<input type = "submit" name = "submit" value = "RESULT" />
</body>
</html>