/*Ahoj Danieli*/
<?php
echo "A";
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}





echo "B";
echo "<br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "<br>";
}






echo "C";
echo "<br>";
$number = 7;

for ($i = 1; $i <= 10; $i++) {
    $result = $number * $i;
    echo "$number × $i = $result<br>";
}







echo "D";
echo "<br>";
$sum = 0;

for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}

echo "Součet čísel od 1 do 100 je: " . $sum;







echo "E";
echo "<br>";
$counter = 10;

while ($counter >= 1) {
    echo $counter . "<br>";
    $counter--;
}

echo "Hotovo";



echo "<br>";

echo "F";
echo "<br>";
$number = 8;


while ($number < 5) {
    echo "While: " . $number . "<br>";
}


do {
    echo "Do-while: " . $number . "<br>";
} while ($number < 5);






echo "G";
echo "<br>";
$i = 1;
while ($i <= 5) {
    echo $i . "<br>";
    $i++;
}


