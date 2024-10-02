<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $contactPerson = $_POST['contactPerson'];
    $designationContact = $_POST['designationContact'];
    $address = $_POST['address'];
    $visit = $_POST['visit'];
    $mobile = $_POST['mobile'];
    $emailContact = $_POST['emailContact'];
    $companyWriteup = $_POST['companyWriteup'];

    // Save form data into a file or database (For simplicity, saving in a text file)
    $file = fopen("feedback.txt", "a");
    fwrite($file, "Contact Person: $contactPerson\n");
    fwrite($file, "Designation: $designationContact\n");
    fwrite($file, "Address: $address\n");
    fwrite($file, "Date of Visit: $visit\n");
    fwrite($file, "Mobile: $mobile\n");
    fwrite($file, "Email: $emailContact\n");
    fwrite($file, "Company Write-Up: $companyWriteup\n");
    fwrite($file, "-----------------------------\n");
    fclose($file);

    // Redirect back to the form with a success message
    echo "<script>alert('Your feedback has been submitted successfully!'); window.location.href='index.html';</script>";
} else {
    echo "Form not submitted properly!";
}
?>
