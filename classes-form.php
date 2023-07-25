<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = $_POST["full_name"] ?? "";
    $email = $_POST["email"] ?? "";
    $phone = $_POST["phone"] ?? "";
    // Validate the input
    if (empty($fullname) || empty($email) || empty($phone) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid input. Please provide a valid fullname and email address.";
        exit;
    }

    // Compose the data
    $data = [$fullname, $email, $phone];

    // Define the CSV file path
    $csvFilePath = 'data.csv';

    // Save the data to the CSV file
    if (file_exists($csvFilePath)) {
        $file = fopen($csvFilePath, 'a');
    } else {
        $file = fopen($csvFilePath, 'w');
        fputcsv($file, ['Full Name', 'Email', 'Phone']); // Add header row if the file is newly created
    }

    if (fputcsv($file, $data)) {
        fclose($file);
        header("Location: success.html");
    } else {
        echo "Failed to save data to CSV file. Please try again later.";
    }
}
?>
