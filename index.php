<!DOCTYPE html>
<html>
<head>

<title>chat</title>
</head>
<body>
<?php
$f = file("history.text");

$dlugosc = count($f);

for($i = 0; $i < $dlugosc; $i++)
{
  echo $f[$i];
}
?>

<form action="" method="POST">
<textarea name = "stringtext" rows = "10" cols = "100">
</textarea>
<br />
<input type="text" name="nick" /><br />
<input value="dodaj" type = "submit"/>

</form>



</body>
</html>
