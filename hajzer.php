<?php
for ($gates = [1, 2, 3], $won = 0, $i = 0, $max = $argv[1], $changing = $argv[2]; $i < $max; $i++) {
    $full = mt_rand(1,3); //winning gate
    $selected = mt_rand(1,3); //gate selected by the contestant
    $emptyGates = array_values(array_diff($gates, [ $full ], [ $selected ])); //new gates for selection: one always winning one losing
    $newGates = array_values(array_diff($gates, [ $emptyGates[0] ])); //opening one of the empty gates
    $newSelected = $changing ? ($selected === $newGates[0] ? $newGates[1] : $newGates[0]) : $selected;
    $won = ($newSelected === $full) ? $won + 1 : $won;
    echo 'Winning: ' . $full . ' Selected: ' . $selected . ' Dropped: ' . $emptyGates[0] . ' Finally selected: ' . $newSelected . ' ' . ($newSelected === $full ? 'WON!' : 'LOST!' ) . PHP_EOL;
}
echo $won . ' / ' . $max . PHP_EOL;
