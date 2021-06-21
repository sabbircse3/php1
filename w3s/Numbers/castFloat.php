<?php
// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>


<?php
$x = 5.35;
$y = (string) $x; // cast $x to string
var_dump($y);