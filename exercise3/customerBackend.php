<?php
    echo "<link rel='stylesheet' type='text/css' href='style.css' />";

    function shipCost($z) {
        if ($z[2] == 'e') return 0;
        if ($z[2] == '0') return 50;
        return 5;
    }

    $pswd = $_POST["password"];
    $hapQ = $_POST["hap"];
    $homQ = $_POST["ans"];
    $winQ = $_POST["win"];
    $ship = $_POST["ship"];
    $email = substr($_POST["email"], 0, strpos($_POST["email"], '@'));
    echo "<p id='welcome'>Welcome, $email!<br />";
    echo "Your password is $pswd!</p>";

    $total = $hapQ * 60000 + $homQ * 4 + $winQ * 100 + shipCost($ship);

    echo "<table>";
    echo "<thead><th>Item</th><th>Quantity</th><th>Cost per Item</th><th>Sub Total</th></thead>";
    echo "<tbody>";
    echo "<tr><td>Happiness</td><td> $hapQ </td><td>$60,000.00</td><td>$" . $hapQ * 60000 . ".00</td></tr>";
    echo "<tr><td>Homework answers</td><td> $homQ </td><td>$4.00</td><td>$" . $homQ * 4 . ".00</td></tr>";
    echo "<tr><td>Winning lottery ticket</td><td> $winQ </td><td>$100.00</td><td>$" . $winQ * 100 . ".00</td></tr>";
    echo "<tr><td> $ship </td><td>1</td><td>" . shipCost($ship) . "</td><td>$" . shipCost($ship) . ".00</td></tr>";
    echo "<tr><td colspan='3'>Total:</td><td> $$total.00 </td></tr>";
    echo "</tbody>";
    echo "</table>";
?>