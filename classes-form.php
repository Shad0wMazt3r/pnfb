<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = $_POST["full_name"] ?? "";
    $email = $_POST["email"] ?? "";

    // Validate the input
    if (empty($fullname) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid input. Please provide a valid fullname and email address.";
        exit;
    }

    // Compose the data
    $data = [$fullname, $email];

    // Define the CSV file path
    $csvFilePath = 'data.csv';

    // Save the data to the CSV file
    if (file_exists($csvFilePath)) {
        $file = fopen($csvFilePath, 'a');
    } else {
        $file = fopen($csvFilePath, 'w');
        fputcsv($file, ['Full Name', 'Email']); // Add header row if the file is newly created
    }

    if (fputcsv($file, $data)) {
        fclose($file);
        echo "Data saved to CSV file successfully!";
    } else {
        echo "Failed to save data to CSV file. Please try again later.";
    }
}
?>
