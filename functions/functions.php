<?php
/*// Script start
$rustart = getrusage();
error_reporting(-1);
echo grader(65);

echo '<br>';

$evens = evens(1038768);

print number_format($evens, 2);*/

function grader($score)
{
    if ($score >= 70) {
        $grade = 'A';
    } else if ($score >= 60) {
        $grade = 'B';
    } else if ($score >= 50) {
        $grade = 'C';
    } else if ($score >= 45) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }
    
    return $grade;
}

function evens($limit)
{
    for($i = 1; $i <= $limit; $i++) {
        $mode = $i % 2;
        static $sum = 0;
        if ($mode != 0) {
            $sum += $i;
        }
    }

    return $sum;
}

$rustart = getrusage();

// Code ...

// Script end
function rutime($ru, $rus, $index) {
    return ($ru["ru_$index.tv_sec"]*1000 + intval($ru["ru_$index.tv_usec"]/1000))
     -  ($rus["ru_$index.tv_sec"]*1000 + intval($rus["ru_$index.tv_usec"]/1000));
}

$ru = getrusage();
echo "This process used " . rutime($ru, $rustart, "utime") .
    " ms for its computations\n";
echo "It spent " . rutime($ru, $rustart, "stime") .
    " ms in system calls\n";