<?php 
$text = "W3School.com";
echo "I love $text"."<br>";
?>

<?php 
$text = "W3School.com";
echo "I love" . $text . "!";
?>

<?php
$x = 5;

function myTest(){
    echo "<p> Variable x inside function is: $x</p>";
}

myTest();

echo "<p>Variable x outside function is $x</p>"
?>

<?php
function myTest2(){
    static $a=6;
    echo "<p>Variable a inside function is: $a</p>";
}
myTest2();

echo "<p>Variable a outside function is: $a</p>";
?>

<?php
$text1 = "Learn PHP";
$text2 = "W3School.com";

$x = 5;
$y = 6;

print "<h2>". $text1 ."</h2>";
print "Study PHP at " . $text2 . "<br>";
print $x + $y . "<br>";
?>

<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>