<?php
echo strlen(" ")."<br>";
?>

<?php
$x = "hello world!";
echo strlen("$x")."<br>";
?>

<?php
echo str_word_count("Hello world! sabbir")."<br>";
?>

<?php
echo strrev("Hello world!")."<br>";
?>

<?php
echo strpos("Hi! this is me sabbir.I am student. I love coding and i want to become a programmer.", "and")."<br>";

echo str_replace("coding", "programming",  "Hi! this is me sabbir.I am student. I love coding and i want to become a programmer.")."<br>"; //here "coding is replace by "programming" and je replace hobe se aage bosbe and jake bosabo se pore bosbe.

?>

<?php
echo str_replace("world", "Dolly", "Hello world!");
?>

<?php
echo "<br>".strlen("najmul vai")."<br>";
?>

<?php 
echo str_word_count("I am najmul vai");

 ?>

 <?php 
 echo strrev("I am najmul vai");

  ?>

  <?php 

echo strpos("I am najmul vai", "vai");
   ?>


   <?php 
echo str_replace("vai", "DON","I am najmul vai")."<br>";
    ?>

    <?php
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>

<!-- <?php  
$x = "abc";  
$$x = 200;  
echo $x."<br/>";  
echo $$x."<br/>";  
echo $abc;  
?> -->


<?php  
const MESSAGE="Hello const by JavaTpoint PHP";  
echo MESSAGE;  
?> 

