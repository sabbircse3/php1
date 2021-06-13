<?php
function test($s) 
{
  if (strlen($s) > 2 && substr($s,0, 2) == "if")
            {
                return $s;
            }
      return "if ".$s;
}

echo test("if sabbir")."\n"."<br>";
echo test("else")."\n";  
?>

<?php
$string1="Welcome to w3resource.com";
echo $string1;

echo substr($string1,-3,-2);
echo '<br>';
?>