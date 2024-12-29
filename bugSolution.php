```php
<?php
function increment(&$var) {
  if (is_numeric($var)) {
    $var++;
  } else {
    // Handle non-numeric values or throw an exception as needed.
    trigger_error("Cannot increment non-numeric value.", E_USER_WARNING);
  }
}

$number = 5;
increment($number);
echo $number; // Outputs 6

$array = [1, 2, 3];
// Do not pass $array[0] by reference to avoid the error.
//Instead, use a copy of the value
$element = $array[0];
increment($element);
$array[0] = $element;
echo $array[0]; // Outputs 2

?>
```