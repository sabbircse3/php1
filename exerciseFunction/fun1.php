<?php 
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, '5');


 ?>
<?php
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>

<?php //declare(strict_types=1); // strict requirement
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>

<?php
$array = name("Volvo", "BMW", "Toyota");
echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
?>