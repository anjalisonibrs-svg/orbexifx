<?php
// Simple PHP Test Script

echo "<h1>PHP is working fine!</h1>";
echo "<p>Today is " . date("l, d F Y") . "</p>";
echo "<p>Your server PHP version: " . phpversion() . "</p>";

// Optional: Check server details
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>
