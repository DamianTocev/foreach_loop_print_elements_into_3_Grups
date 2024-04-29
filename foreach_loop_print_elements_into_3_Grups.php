<?php
$elements = [42, 3, 3.8, "Hello", 3.14, "World"];
while (FALSE !== ($line = fgets(STDIN))) {
  $elements[] = trim($line);
}
$integer = [];
$float = [];
$string = [];

foreach ($elements as $element) {
    if (is_int($element)) {
        $integer[] = $element;
    } elseif (is_float($element)) {
        $float[] = $element;
    }elseif (is_string($element)) {
        $string[] = $element;
    }
}
echo "<p>integers: " . implode(", ", $integer) . "</p>";
echo "<p>floats: " . implode(", ", $float) . "</p>";
echo "<p>strings: " . implode(", ", $string) . "</p>";
?>