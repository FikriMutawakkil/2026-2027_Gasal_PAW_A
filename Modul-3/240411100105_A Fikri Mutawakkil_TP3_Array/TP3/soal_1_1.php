
<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

array_push($fruits, "Durian", "Elderberry", "Fig", "Grape", "Honeydew");

echo 'fruits = ';
print_r($fruits);

echo "<br>Nilai dengan indeks tertinggi: " . $fruits[count($fruits) - 1];
?>
