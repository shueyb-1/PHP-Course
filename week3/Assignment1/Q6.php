<?php

$a = 8;
$b = 12;

for ($i = 1; ; $i++) {
    if (($a * $i) % $b == 0) {
        $lcm = $a * $i;
        break;
    }
}

echo "LCM = " . $lcm;

?>