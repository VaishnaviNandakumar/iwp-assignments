<html> 
<body> 
<form method=POST >  
Day:<input type="text" name="day"><br><br> 
Starter:<input type="text" name="starter"><br><br>  
Main Course:<input type="text" name="main"><br><br>  
Desert:<input type="text" name="desert"><br><br> 
<input name="Update" type="submit" value="Update"> 
</form> 
<a href="index.php">Back to Menu</a> 
<?php 
if(isset($_POST['Update'])) 
{ 

$var= $_POST['day']; 
$var1=$_POST['starter']; 
$var2=$_POST['main']; 
$var3=$_POST['desert']; 
$text =   strval($var).":!:".strval($var1).":!:".strval($var2).":!:".strval($var3);
$fp = fopen('food.txt', 'a');
fwrite($fp, $text);
fclose($fp);
} 

?> 
</body> 
</html> 
 
 