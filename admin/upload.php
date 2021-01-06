<?php
$target_dir = "backups/";
$target_file = $target_dir . 'backup.sql';
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $uploadOk = 1;
}
// Check if file already exists
if (file_exists($target_file)) {
    unlink("backup.sql"); ?>
    <script>
        alert("File replaced on server successfully.");
        window.location = 'upload-backup.php';
    </script>
    <?php
    $uploadOk = 1;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if ($imageFileType != "sql") {
    echo "Sorry, only .sql backup file is allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your backup file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    ?>
        <script>
            alert("File replaced on server successfully.");
            window.location = 'upload-backup.php';
        </script>
<?php
    } else {
        echo "Sorry, there was an error uploading your backup file.";
    }
}
?>