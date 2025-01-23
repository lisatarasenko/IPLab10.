<?php
function generateRandomName($type) {
    $syllables = ["мур", "няв", "гав", "бев", "кіт", "пес", "брат", "сест", "ри", "ка", "ан", "на", "ді", "ма"];
    $name = "";
    $syllablesCount = rand(2, 4); // Випадкова кількість складів

    for ($i = 0; $i < $syllablesCount; $i++) {
        $name .= $syllables[array_rand($syllables)];
    }

    return $name;
}

echo "Ім'я для кота: " . generateRandomName("кіт") . "<br>";
echo "Ім'я для собаки: " . generateRandomName("пес") . "<br>";
echo "Ім'я для брата: " . generateRandomName("брат") . "<br>";
echo "Ім'я для сестри: " . generateRandomName("сестра") . "<br>";
?>