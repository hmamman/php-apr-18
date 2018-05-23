<?php
$link = mysqli_connect(
    'localhost',
    'root',
    'Zhuauth+',
    'php_apr_18'
) or die (mysqli_connect_error());


function escape($data)
{
    if (!is_numeric($data)) {
        return "'{$data}'";
    }

    return $data;
}