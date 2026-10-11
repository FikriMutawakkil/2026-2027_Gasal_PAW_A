
<?php
$height = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charlie" => "170"
);

$height["David"] = "180";
$height["Ethan"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Harry"] = "182";

echo "height = ";
print_r($height);

echo "<br>Nilai dengan indeks terakhir: " . end($height);

unset($height["Charlie"]);

echo "<br><br>Setelah Charlie dihapus:<br>";
echo "height = ";
print_r($height);

echo "<br>Nilai dengan indeks terakhir setelah dihapus: "
    . end($height);
?>
