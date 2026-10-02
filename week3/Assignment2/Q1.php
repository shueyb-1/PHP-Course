<?php
// 1) Declare a one-dimensional array and initialize it
$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// 2) Print all elements (foreach...as loop)
echo "Array elements are: <br>";
foreach ($numbers as $n)
    echo ("$n, ");

// 3), 4), 5) Totals
$total = 0;
$evenTotal = 0;
$oddTotal = 0;
foreach ($numbers as $n) {
    $total += $n;
    if ($n % 2 == 0)
        $evenTotal += $n;
    else
        $oddTotal += $n;
}
echo ("<br>Total of all elements is: $total");
echo ("<br>Total of even elements is: $evenTotal");
echo ("<br>Total of odd elements is: $oddTotal");

// 6) Minimum element and its positions
$minimum = min($numbers);
echo ("<br>Minimum element is: $minimum at positions: ");
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $minimum)
        echo ("$i, ");
}

// 7) Maximum element and its positions
$maximum = max($numbers);
echo ("<br>Maximum element is: $maximum at positions: ");
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $maximum)
        echo ("$i, ");
}
?>