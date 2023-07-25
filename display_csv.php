<?php
session_start();

if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    header("Location: login.php");
    exit;
}

$csvFilePath = 'data.csv';

if (($handle = fopen($csvFilePath, 'r')) !== false) {
    $header = fgetcsv($handle); // Get header row
    $data = [];
    while (($row = fgetcsv($handle)) !== false) {
        $data[] = $row;
    }
    fclose($handle);
} else {
    echo "Error: Unable to read CSV file.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CSV Data</title>
</head>
<body>
    <h2>CSV Data</h2>
    <table>
        <thead>
            <tr>
                <?php foreach ($header as $col) : ?>
                    <th><?= $col ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) : ?>
                <tr>
                    <?php foreach ($row as $col) : ?>
                        <td><?= $col ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <a href="data.csv">Download</a>
    <a href="logout.php">Logout</a>
</body>
</html>
