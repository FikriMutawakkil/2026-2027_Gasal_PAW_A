
<!DOCTYPE html>
<html>
<head>
    <title>Process Data</title>
</head>
<body>

<h1>Hasil Pemrosesan Form</h1>

<table border="1" cellpadding="8">
    <tr>
        <th>Nama Field</th>
        <th>Nilai Isian</th>
    </tr>

    <?php
    foreach ($_POST as $field => $value) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($field) . "</td>";
        echo "<td>" . htmlspecialchars($value) . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
