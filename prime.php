
<!DOCTYPE html>
<html>
<head>
<title>Prime Number</title>
</head>
<body>
	<h3>Find the prime numbers upto a limit</h3>
<table>
<form name="prime" method="post">
<tr>
<td>Enter Number :</td>
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
for($j=2;$j<=$num;$j++ )
{
for($k=2;$k<$j;$k++ )
{
if($j%$k==0)
{
break;
}
}
if( $k == $j )
echo "Prime Number : $j <br />";
}
}
?>
</body>
</html>