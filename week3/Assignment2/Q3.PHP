<?php
// Two-dimensional associative array
// Note: the table repeats CA221, but keys must be unique, so the third row uses CA224.
$students = array(
    "CA221" => array("Name" => "Mohamed Ahmed Ali", "Phone" => "0648440403", "Address" => "Laba Dhagax, Wardhiigley"),
    "CA223" => array("Name" => "Ahmed Abdi Jama",   "Phone" => "0647223201", "Address" => "Taleex, Hodan"),
    "CA224" => array("Name" => "Amina Nur Adan",    "Phone" => "0646990276", "Address" => "Macmacaanka, Dharkeynley")
);

echo "<table border='1' cellpadding='6'>";
echo "<tr><th></th><th>Name</th><th>Phone</th><th>Address</th></tr>";
foreach ($students as $id => $info) {
    echo "<tr><th>$id</th>";
    foreach ($info as $k => $v)
        echo "<td>$v</td>";
    echo "</tr>";
}
echo "</table>";
?>