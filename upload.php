<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cv = $_FILES['cv'];

    // Check if file is uploaded
    if ($cv['error'] == UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/';
        $cv_filename = basename($cv['name']);
        $upload_file = $upload_dir . $cv_filename;

        // Save file
        if (move_uploaded_file($cv['tmp_name'], $upload_file)) {
            echo "CV uploaded successfully.";
        } else {
            echo "Failed to upload CV.";
        }
    } else {
        echo "Error uploading file.";
    }
}
?>
