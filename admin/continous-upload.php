<?php
$target_dir = "backups/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])) {
   
        $uploadOk = 1;
    
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "The backup file you uploaded, already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "The file you uploaded is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($FileType != "sql" ) {
    echo "Only .sql backup file is allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Your backup file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        ?>
        <script>
        alert("File uploaded to server successfully.");
        window.location = 'continous-backup.php';
        </script>
        <?php
    } else {
        echo "Sorry, there was an error uploading your backup file.";
    }
}

?>