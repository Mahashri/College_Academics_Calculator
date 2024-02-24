<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather form data
    $name = $_POST["name"];
    $rollNumber = $_POST["rollNumber"];
    $collegeMail = $_POST["collegeMail"];
    $mobileNumber = $_POST["mobileNumber"];
    $passedOutYear = $_POST["passedOutYear"];

    // Write data to Excel file
    $file = 'student_details.xlsx';

    // Check if file exists, if not create it and add headers
    if (!file_exists($file)) {
        $header = "Name\tRoll Number\tCollege Mail ID\tWhatsApp Mobile Number\tYear of Passing\n";
        file_put_contents($file, $header);
    }

    // Append student data to the file
    $data = "$name\t$rollNumber\t$collegeMail\t$mobileNumber\t$passedOutYear\n";
    file_put_contents($file, $data, FILE_APPEND);

    // Success message
    echo "Student details successfully stored in Excel.";
} else {
    // Handle invalid request method
    http_response_code(405);
    echo "Method Not Allowed";
}
?>
