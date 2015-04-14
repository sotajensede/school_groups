<?php

/*
 * 
 * Starting at 1912:
 *
 * Robot
 * Wizard
 * Alien
 * Superhero
 * Undead
 * Pirate
 * Daikaiju
 * Time Traveler
 * Spy
 * Astronaut
 * Ninja/Samurai
 * Treasure Hunter
 *
 */

$year = 1912;

echo "
    <table>
        <tr>
            <td>Robot</td>
            <td>Wizard</td>
            <td>Alien</td>
            <td>Superhero</td>
            <td>Undead</td>
            <td>Pirate</td>
            <td>Daikaiju</td>
            <td>Time Traveler</td>
            <td>Spy</td>
            <td>Astronaut</td>
            <td>Ninja/Samurai</td>
            <td>Treasure Hunter</td>
        </tr>
     ";

while ($year < 2015) {
    echo "<tr>";
        for($i = 0;$i < 12 && $year <= 2015; ++$i) {
            echo "<td>$year</td>";
            ++$year;
        }
    echo"</tr>";
}

echo "</table>";

?>
