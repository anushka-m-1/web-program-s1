<!DOCTYPE html>
<html>
<body>
<?php
$names = array("anu", "bichu", "vismaya");


asort($names);
echo "<h3>Ascending order (asort):</h3>";
foreach ($names as $n) {
    echo $n . "<br>";
}


arsort($names);   
echo "<h3>Descending order (arsort):</h3>";
foreach ($names as $n) {
    echo $n . "<br>";
}
?>
</body>
</html>

