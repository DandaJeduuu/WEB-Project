<?php
echo "<h1>A1</h1><br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";



}


echo "<h2>A2</h2>";
for ($i = 2; $i<>20; $i++){

if ($i % 2 == 0){
    echo "<br>";
    echo $i;

}




}

echo "<h2>A3</h2>";


$number = 7;
for ($i = 1; $i <= 10; $i++) {

    $nasobilka =$number * $i;
    echo $nasobilka . "<br>";

}


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

echo "<h2>A8</h2>";


$i = 1;

while ($i <= 5) {
    echo $i . "<br>";
    $i++;
    }
