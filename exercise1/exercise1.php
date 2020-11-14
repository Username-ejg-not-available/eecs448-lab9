<?php

function mult($x,$y) {
    return $x * $y;
}

echo "<table style='font-size=.5em;'>";

echo "<tr><td></td>";
for ($i = 1; $i < 101; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";
for ($i = 1; $i < 101; $i++) {
    echo "<tr><th>$i</th>";
    for ($j = 1; $j < 101; $j++) {
        echo "<th>" . mult($i,$j) . "</th>";
    }
}

echo "</table>";
?>