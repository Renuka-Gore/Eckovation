
<!DOCTYPE html>
<html>
<head>
<title>Factorial of a Number</title>
</head>
<body>
	<h3>Factorial Calculator</h3>
<table>
<form name="factorial" method="post">
<tr>
<td>Enter Number to calculate its factorial:</td>
<td><input type="text" name="num" required></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Check" name="submit" /></td>
</tr>
</form>
</table>
<?php
if(isset($_POST['submit']))
{
$num=$_POST['num'];
$fact = 1;
for ($i=$num; $i>=1; $i--)
{
 $fact = $fact * $i;
}
echo "factorial of  $num is  $fact";
}
?>
</body>
</html>