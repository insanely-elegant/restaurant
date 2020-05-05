<?php

$conn = mysqli_connect("localhost", "u306375126_susr", "silverpassword", "u306375126_silverglen");
$filePath = "backups/backup.sql";
$sql = mysqli_query($conn, "TRUNCATE table chef");
$sql = mysqli_query($conn, "TRUNCATE table diningdates");
$sql = mysqli_query($conn, "TRUNCATE table dish");
$sql = mysqli_query($conn, "TRUNCATE table freediner");
$sql = mysqli_query($conn, "TRUNCATE table host");
$sql = mysqli_query($conn, "TRUNCATE table menu");
$sql = mysqli_query($conn, "TRUNCATE table pickups");
$sql = mysqli_query($conn, "TRUNCATE table pickupweeklymenu");
$sql = mysqli_query($conn, "TRUNCATE table reservation");
$sql = mysqli_query($conn, "TRUNCATE table room");
$sql = mysqli_query($conn, "TRUNCATE table tablelayout");
$sql = mysqli_query($conn, "TRUNCATE table userlog");
$sql = mysqli_query($conn, "TRUNCATE table users");
$sql = mysqli_query($conn, "TRUNCATE table weeklymenu");
function restoreMysqlDB($filePath, $conn)
{
    $sql = '';
    $error = '';

    if (file_exists($filePath)) {
        $lines = file($filePath);

        foreach ($lines as $line) {

            // Ignoring comments from the SQL script
            if (substr($line, 0, 2) == '--' || $line == '') {
                continue;
            }

            $sql .= $line;

            if (substr(trim($line), -1, 1) == ';') {
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    $error .= mysqli_error($conn) . "\n";
                }
                $sql = '';
            }
        } // end foreach

        if ($error) {
            $response = array(
                "type" => "error",
                "message" => $error
            );
        } else {
            $response = array(
                "type" => "success",
                "message" => "Database Restore Completed Successfully."
            );
        }
    } // end if file exists
    return $response;
}
restoreMysqlDB($filePath, $conn);

?>

<script>
    alert("Backup restored successfully.");
    window.location = 'backup-restore.php';
</script>