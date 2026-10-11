
<?php
$fruits = array(
    "Avocado", "Blueberry", "Cherry",
    "Durian", "Elderberry", "Fig",
    "Grape", "Honeydew"
);

unset($fruits[1]);

echo "Data Blueberry dihapus.<br>";
echo 'fruits = ';
print_r($fruits);

echo "<br>Nilai dengan indeks tertinggi: " . end($fruits);
?>
