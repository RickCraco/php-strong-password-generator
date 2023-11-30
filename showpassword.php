<?php
session_start();

if (isset($_SESSION['password'])) {
    $password = $_SESSION['password'];
    echo '<h2>Your Password:</h2>';
    echo '<p>' . $password . '</p>';
    unset($_SESSION['password']);
} else {
    echo '<p>No password to show.</p>';
}
?>
