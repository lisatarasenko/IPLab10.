<!DOCTYPE html>
<html lang="en">
<head>
<body>
<?php
echo "<table style='width:100%; border-collapse: collapse;'><tr>"; // Початок таблиці

echo "<td style='width:10%; vertical-align: top;'>"; // Початок першого стовпчика (for)
echo "Цикл for:<br>";
for ($i = 1; $i <= 50; $i += 2) {
    echo $i . "<br>";
}
echo "</td>"; // Кінець першого стовпчика

echo "<td style='width:10%; vertical-align: top;'>"; // Початок другого стовпчика (while)
echo "Цикл while:<br>";
$i = 1;
while ($i <= 50) {
    echo $i . "<br>";
    $i += 2;
}
echo "</td>"; // Кінець другого стовпчика

echo "<td style='width:33%; vertical-align: top;'>"; // Початок третього стовпчика (do-while)
echo "Цикл do-while:<br>";
$i = 1;
do {
    echo $i . "<br>";
    $i += 2;
} while ($i <= 50);
echo "</td>"; // Кінець третього стовпчика

echo "</tr></table>"; // Кінець таблиці
?>
</body>
</html>