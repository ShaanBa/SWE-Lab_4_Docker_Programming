<?php

if (isset($_GET['number']) && is_numeric($_GET['number']) && $_GET['number'] > 0) {
        $n = intval($_GET['number']);
        echo "<table>";
        
        // Header row
        echo "<tr><th>&times;</th>"; // Added a corner label for clarity
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