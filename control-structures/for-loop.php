<?php 

for($i = 1; $i <= 10; $i++) {
    $mode = $i % 2;
    if ($mode != 0) {
        echo "{$i} <br>";
    }
}