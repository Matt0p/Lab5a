<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q1</title>
</head>
<body>
 <?php
 $name = "Ahmad Faiz bin Za'afar";
 $matric = "AI220249";
 $course = "Bachelor in Computer Science (Web Technology) With Honors";
 $year = "Year 3";
 $address = "Lot 1108, Jln Kempas, Kg Tg Sepat, 42800 Tg Sepat, Selangor";
 ?>
 <table>
    <tr>
        <td>Name</td>
        <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo "$matric"; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo "$year"; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo "$address"; ?></td>
    </tr>
 </table>

</body>
</html>