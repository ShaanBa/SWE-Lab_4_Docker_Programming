<!DOCTYPE html>
<html>
<head>
    <title>EECS 348 Lab Three Practice Four</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            padding: 5px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>EECS 348 Lab Three Practice Four</h1>
    <form action="practice4.php" method="get">
        Size of the multiplication table: <input type="text" name="number" required><br>
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if (isset($_GET['number']) && is_numeric($_GET['number']) && $_GET['number'] > 0) {
        $n = intval($_GET['number']);
        echo "<h2>Multiplication Table for $n</h2>";
        echo "<table>";
        
        // Header row
        echo "<tr><th>&times;</th>";
        for ($col = 1; $col <= $n; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";

        // Table rows
        for ($row = 1; $row <= $n; $row++) {
            echo "<tr><th>$row</th>";
            for ($col = 1; $col <= $n; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>