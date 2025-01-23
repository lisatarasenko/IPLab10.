<?php
function findRepeatingElements($array) {
    $counts = array_count_values($array);
    $repeatingElements = array_keys(array_filter($counts, function ($count) {
        return $count > 1;
    }));
    return $repeatingElements;
}

$array = [1, 2, 2, 3, 4, 4, 4, 5];
$repeating = findRepeatingElements($array);
echo "Елементи, що повторюються: " . implode(", ", $repeating);
?>