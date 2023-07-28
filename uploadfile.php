<?php
// Step 1: Create a database connection
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Step 2: Handle the file upload
if(isset($_FILES["fileToUpload"])) {
    $file_name = $_FILES["fileToUpload"]["name"];
    $file_type = $_FILES["fileToUpload"]["type"];
    $file_size = $_FILES["fileToUpload"]["size"];
    $file_data = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);

    // Step 3: Save the file to the database
    $sql = "INSERT INTO documents (name, type, size, data) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssis", $file_name, $file_type, $file_size, $file_data);
    mysqli_stmt_execute($stmt);

    // Step 5: Respond to the user
    echo "File uploaded successfully.";
}
?>