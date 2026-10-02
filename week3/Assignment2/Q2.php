<?php
// Two-dimensional associative array (use => to connect key/value)
$colors = array(
    "Light"  => array("Red" => "Light Red",  "Green" => "Light Green",  "Blue" => "Light Blue"),
    "Normal" => array("Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"),
    "Dark"   => array("Red" => "Dark Red",   "Green" => "Dark Green",   "Blue" => "Dark Blue")
);

echo "<table border='1' cellpadding='6'>";
echo "<tr><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>";
foreach ($colors as $rowName => $row) {
    echo "<tr><th>$rowName</th>";
    foreach ($row as $k => $v)
        echo "<td>$v</td>";
    echo "</tr>";
}
echo "</table>";
?>