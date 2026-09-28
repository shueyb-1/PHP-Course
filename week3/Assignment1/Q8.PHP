<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            margin: auto;
        }

        th, td {
            border: 1px solid black;
            padding: 5px 10px;
            text-align: center;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

<h2>Multiplication Table</h2>

<table>
    <?php
    for ($i = 1; $i <= 12; $i++) {
        echo "<tr>";

        for ($j = 1; $j <= 12; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>