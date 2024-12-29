```php
<?php
function increment(&$var) {
  $var++;
}

$number = 5;
increment($number);
echo $number; // Outputs 6

$array = [1, 2, 3];
increment($array); // Notice: Only variables should be passed by reference
echo $array[0]; // Undefined offset 0
?>
```