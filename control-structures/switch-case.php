<?php
//ASSINMENT

/*
1) Change the code below by using switch case statement instead of ifelse
*/
$score = 44;
$grade = '';
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

printf('The grade of a score %d is %s', $score, $grade);