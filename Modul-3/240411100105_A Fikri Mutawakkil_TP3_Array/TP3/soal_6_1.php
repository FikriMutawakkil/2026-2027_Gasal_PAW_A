
<?php
// 1. array_push()
$a = array("A");
array_push($a, "B");

echo "Array awal dan array_push: ";
print_r($a);
echo "<br><br>";

// 2. array_merge()
$a = array("A", "B");
$b = array("C");
$c = array_merge($a, $b);

echo "Hasil array_merge: ";
print_r($c);
echo "<br><br>";

// 3. array_values()
$data = array("X" => 1, "Y" => 2);
$result = array_values($data);

echo "Hasil array_values: ";
print_r($result);
echo "<br><br>";

// 4. array_search()
$fruits = array("A", "B", "C");
$result = array_search("B", $fruits);

echo "Hasil array_search: " . $result;
echo "<br><br>";

// 5. array_filter()
$numbers = array(0, 1, false, 2, "", 3, "array");
$result = array_filter($numbers);

echo "Hasil array_filter: ";
print_r($result);
echo "<br><br>";

// 6. Sorting array terindeks
$numbers = array(3, 1, 2);

sort($numbers);
echo "sort: ";
print_r($numbers);
echo "<br>";

rsort($numbers);
echo "rsort: ";
print_r($numbers);
echo "<br><br>";

// 7. Sorting array asosiatif berdasarkan nilai
$height = array(
    "Peter" => 35,
    "Ben" => 37,
    "Joe" => 43
);

$copy = $height;
asort($copy);
echo "asort: ";
print_r($copy);
echo "<br>";

$copy = $height;
arsort($copy);
echo "arsort: ";
print_r($copy);
echo "<br><br>";

// 8. Sorting array asosiatif berdasarkan kunci
$copy = $height;
ksort($copy);
echo "ksort: ";
print_r($copy);
echo "<br>";

$copy = $height;
krsort($copy);
echo "krsort: ";
print_r($copy);
?>
