
<?php
session_start();

if (isset($_POST['lang']) && in_array($_POST['lang'], ['eng', 'ukr'])) {
    $_SESSION['lang'] = $_POST['lang'];
    echo "Language changed";
} else {
    http_response_code(400);
    echo "Invalid language";
}
?>
