<?php
$names = [];

$names[] = 'Hussani Mamman';
$names[] = 'Mujaheed Abubakar';
$names[] = 'Glory Bala';

// for($i = 0; $i < count($names); $i++) {
//     echo $names[$i] . '<br>';
// }

// foreach ($names as $name) {
//     echo "{$n} <br>";
// }

$numbers = [];

for ($n = 1; $n <= 100; $n++) {
    $mode = $n % 2;

    if ($mode == 0) {
        $numbers[] = $n;
    }
}
// print '<pre>';
print implode(', ', $numbers);
// print '</pre>';