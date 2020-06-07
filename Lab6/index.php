
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <title>Home</title>
</head>
<body>
    <div class ="container">
<table>
<?php
$i=0;     
foreach(file("food.txt", FILE_IGNORE_NEW_LINES) as $food){        
    list($day,$starter,$main,$dessert)=explode(":!:",$food);   


echo "<tr>";
echo "<td> <a href = 'update_form.php'>$day</a></td>";
echo "<td style = 'text-align: left;width: 450px!important; font-size:15px;'>$starter<br>---<br>$main<br>---<br> $dessert</td>";
  echo "</tr>";
  }
?>
</table>
<div>
</body>
</html>