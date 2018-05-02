<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <style>
    table {
        border: 1px solid #000;
        }
        table tr {
            margin: 0;
        }
    table td {
        margin: 0;
        border: 1px solid #000;
        padding: 4px;
    }
    </style>
    <title>Document</title>
</head>
<body>
<?php
$students = [
    [
        'first_name' => "Hussaini",
        'last_name' => 'Mamman',
        'reg_no' => '04/1572/5'
    ],
    [
        'first_name' => "Hussaini",
        'last_name' => 'Mamman',
        'reg_no' => '04/1572/5'
    ],
    [
        'first_name' => "Hussaini",
        'last_name' => 'Mamman',
        'reg_no' => '04/1572/5'
    ],
    [
        'first_name' => "Hussaini",
        'last_name' => 'Mamman',
        'reg_no' => '04/1572/5'
    ],
    [
        'first_name' => "Hussaini",
        'last_name' => 'Mamman',
        'reg_no' => '04/1572/5'
    ]
];

?>

<table>
    <tr>
        <td>SN</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Reg No</td>
    </tr>
    <?php foreach ($students as $student): ?>
    
    <tr>
        <td></td>
        <td><?=$student['first_name'];?></td>
        <td><?=$student['last_name'];?></td>
        <td><?=$student['reg_no'];?></td>
    </tr>
    
    <?php endforeach; ?>
</table>
</body>
</html>