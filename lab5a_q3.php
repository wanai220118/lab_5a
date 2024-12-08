<?php
// Function to generate multiplication table
function multiplication($multiplier) {
    $results = [];
    for ($i = 1; $i <= 12; $i++) {
        $results[] = [
            'no' => $i,
            'multiplier' => $multiplier,
            'answer' => $i * $multiplier
        ];
    }
    return $results;
}

// Get the multiplier (for demonstration purposes, let's use 2)
$multiplier = 2; // Replace with dynamic value if needed (e.g., from a form)
$table = multiplication($multiplier);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table, th, td{
        border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($table as $row): ?>
                <tr>
                    <td><?= $row['no'] ?></td>
                    <td><?= $row['multiplier'] ?></td>
                    <td><?= $row['answer'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>