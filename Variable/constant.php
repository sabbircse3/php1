<?php

define('MIN_VALUE', '0.0');   // RIGHT - Works OUTSIDE of a class definition.
define('MAX_VALUE', '1.0');   // RIGHT - Works OUTSIDE of a class definition.

//const MIN_VALUE = 0.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.
//const MAX_VALUE = 1.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.

class Constants
{
  //define('MIN_VALUE', '0.0');  WRONG - Works OUTSIDE of a class definition.
  //define('MAX_VALUE', '1.0');  WRONG - Works OUTSIDE of a class definition.

  const MIN_VALUE = 0.0;      // RIGHT - Works INSIDE of a class definition.
  const MAX_VALUE = 1.0;      // RIGHT - Works INSIDE of a class definition.
   
  public static function getMinValue()
  {
  	$MIN_VALUE = 1;
    return self::MIN_VALUE;
  }

  public static function getMaxValue()
  {
    return self::MAX_VALUE;
  }
}
$obj = new Constants();
echo $obj->getMinValue()."<br>";
echo  "The function name is - " . __FUNCTION__;
?>

<?php
echo "Line number " . __LINE__ . "<br>";
echo "Line number " . __LINE__ . "<br>";
echo "Line number " . __LINE__ . "<br>";
?>

<?php
// Displays the absolute path of this file
echo "The full path of this file is: " . __FILE__;
?>

