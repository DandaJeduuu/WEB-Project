<?php

echo "<h2>A4</h2>";

$sum =0;
for ($i = 1; $i <= 100; $i++) {
echo  $sum + $i ; "<br>";
    $sum++;
}


echo "<h2>A7</h2>";


$number = 8;
echo "Výpis z cyklu while:<br>";
while ($number < 5) {
    echo "Hodnota v while je: " . $number . "<br>";
}

echo "<br><br>";
do {
    echo "Hodnota v dowhile je: " . $number . "<br>";
} while ($number < 5);

