<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("./storedxss.txt", "r") or die("Unable to open file!");
var_dump($myfile);
// Output one line until end-of-file
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
    var_dump( fgets($myfile) . "<br>");
    echo("one");
}
echo ("two");
fclose($myfile);
?>

</body>
</html>