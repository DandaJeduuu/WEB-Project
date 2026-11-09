<?php
echo "<h2>Daniel Novák</h2>";
echo "<b>Výsledky testů:</b>";
echo "<br>";
$test1 = 75;
$test2 = 90;
$test3 = 60;

echo "<br>";
echo "Test 1: ".$test1;
echo "<br>";
echo "<br>";

echo "Test 2:".$test2;
echo "<br>";
echo "<br>";
echo "Test 3:".$test3;
echo "<br>";
echo "<br>";
echo "Celkový počet bodů: ";
echo $test1 + $test2 + $test3;
echo "<br>";
echo "<br>";

echo "Průměrný počet bodů: ";
echo ($test1 + $test2 + $test3)/3;
echo "<br>";
echo "<br>";

echo "Protencuální úspěšnost: ";
echo ($test1 + $test2 + $test3)/3;
echo "%";



 if ((($test1 + $test2 + $test3)/3)==75){
     echo "<h2>Výsledná známka je: 2</h2>";


 }


 echo "Student prospěl";