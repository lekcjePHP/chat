<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>chat</title>
</head>
<body>
<?php
if (isset($_POST['stringtext']) && isset($_POST['nick']))
{
// Sprawdzamy pare rzeczy:
  if(strlen($_POST['stringtext']) <=100 && strlen($_POST["nick"]) <=10)
  {
    $f = fopen("history.text", "a");
     fwrite($f, "<b>");
    fwrite($f, $_POST["nick"]);
    fwrite($f, ": </b>");
    fwrite($f,$_POST['stringtext']);
    fwrite($f, "<br />");
  } 
else 
    {
      echo "<p class='alert'>PODALES ZA DLUGI NICK LUB WIADOMOSC!</p>";
    }
}
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
