<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q1</title>

    <style>
        table, th, td{
        border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
        $name = "Tuan Khalidah Syazwana Binti Tuan Mohd Kasmawi";
        $matricnumber = "AI220118";
        $course = "BIP";
        $yearofstudy = "3";
        $address = "Pt Haji Rais"
    ?>

    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matricnumber"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$yearofstudy"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>
</html>