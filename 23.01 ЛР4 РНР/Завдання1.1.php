<!DOCTYPE html>
<html lang="en">
<head> 
<body>
<?php
function calculateYearsToMillion($initialAmount, $interestRate) {
    $targetAmount = 1000000;
    $years = 0;
    $currentAmount = $initialAmount;

    while ($currentAmount < $targetAmount) {
        $currentAmount *= (1 + $interestRate / 100);
        $years++;
    }

    return $years;
}

$initialAmount = 10000;
$interestRate = 10;
$yearsToMillion = calculateYearsToMillion($initialAmount, $interestRate);
$currentAge = 18;
$ageAtMillion = $currentAge + $yearsToMillion;

echo "Потрібно " . $yearsToMillion . " років, щоб досягти мільйона.<br>";
echo "Коли це станеться, людині буде " . $ageAtMillion . " років.<br>";

if ($ageAtMillion <= 100) { // Перевірка, чи людина доживе (умовно до 100 років)
    echo "Скоріш за все, людина доживе до цього часу.";
} else {
    echo "Можливо, людина не доживе до цього часу.";
}
?>
</body>
</html>