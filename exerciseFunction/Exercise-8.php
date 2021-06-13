<?php
function test($str) 
{
   return strlen($str) < 2 ? $str : substr($str, 0, 2).substr($str, 0, 2).substr($str, 0, 2).substr($str, 0, 2);
   
}

echo test("C Sharp")."<br>";
echo test("JS")."<br>";
echo test("a")."<br>";
?>