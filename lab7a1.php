<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab7a 1</title>
    <style>
        table { border-collapse: collapse; width: 60%; margin: 30px auto; font-family: Arial, sans-serif; }
        th, td { border: 1px solid ; padding: 12px; text-align: left; }
    </style>
</head>
<body>

<?php
$name = "Ali bin Ahmad";
$matricNo = "AI230123";
$course = "Bachelor of Computer Science (Web Technology)";
$yearOfStudy = "Year 2";
$address = "Kolej Kediaman Tun Dr. Ismail, UTHM, 86400 Parit Raja, Johor";
?>

<table>
    <tr>
        <th>Detail</th>
        <th>Information</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric number</td>
        <td><?php echo $matricNo; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of study</td>
        <td><?php echo $yearOfStudy; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>