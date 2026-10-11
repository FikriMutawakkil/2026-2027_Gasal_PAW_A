
<?php
$weight = array(
    "Andy" => "70",
    "Barry" => "65",
    "Charlie" => "75"
);

$names = array_keys($weight);
$weights = array_values($weight);

for ($i = 0; $i < count($weight); $i++) {
    echo $names[$i] . " is " . $weights[$i] . " kg.<br>";
}
?>
