<!DOCTYPE html>
<html lang="en">
<head>
<body>
<?php
function processThreeDigitNumber($number) {
    if ($number < 100 || $number > 999) {
        return "Число має бути тризначним.";
    }

    $digit1 = floor($number / 100);
    $digit2 = floor(($number % 100) / 10);
    $digit3 = $number % 10;

    $sum = $digit1 + $digit2 + $digit3;
    $reversedNumber = $digit3 * 100 + $digit2 * 10 + $digit1;
    $largestNumber = max($digit1 * 100 + $digit2 * 10 + $digit3, $digit1 * 100 + $digit3 * 10 + $digit2, $digit2 * 100 + $digit1 * 10 + $digit3, $digit2 * 100 + $digit3 * 10 + $digit1, $digit3 * 100 + $digit1 * 10 + $digit2, $digit3 * 100 + $digit2 * 10 + $digit1);


    return "Сума цифр: " . $sum . "<br>Число в зворотному порядку: " . $reversedNumber . "<br>Найбільше число: " . $largestNumber;
}

$number = 321; // Приклад
echo processThreeDigitNumber($number);

?>
</body>
</html>