<?php
session_start();

// Default language
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'eng'; // Make sure this matches your filenames like lang_eng.php
}
?>
