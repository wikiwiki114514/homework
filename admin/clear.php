<!-- /admin/clear.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    file_put_contents('../attendance.txt', '');
    header("Location: /check");
    exit();
}
?>
