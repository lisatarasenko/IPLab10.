<!DOCTYPE html>
<html lang="en">
<head>
<body>
    <?php
require_once "functions.php"; // Підключаємо файл з функціями

$x = isset($_POST['x']) ? $_POST['x'] : 0;
$y = isset($_POST['y']) ? $_POST['y'] : 0;

echo "<table border='1'>";
echo "<tr><th>x</th><th>x!</th><th>my_tg(x)</th><th>sin(x)</th><th>cos(x)</th><th>tg(x)</th><th>Сума</th><th>Різниця</th><th>Множення</th><th>Ділення</th><th>Середнє</th></tr>";

echo "<tr>";
echo "<td>" . $x . "</td>";
echo "<td>" . factorial($x) . "</td>";
echo "<td>" . my_tg($x) . "</td>";
echo "<td>" . sin($x) . "</td>";
echo "<td>" . cos($x) . "</td>";
echo "<td>" . tan($x) . "</td>";
echo "<td>" . ($x + $y) . "</td>";
echo "<td>" . ($x - $y) . "</td>";
echo "<td>" . ($x * $y) . "</td>";
echo "<td>" . ($y != 0 ? $x/$y : "На нуль ділити не можна"). "</td>";
echo "<td>" . (($x + $y) / 2) . "</td>";
echo "</tr>";

echo "</table>";
?>
</body>
</html>