<?php
// Include header
include('header.php');

// Get the page content based on URL query
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Dynamically load content based on the page
if ($page == 'gallery') {
    echo "<h1>Gallery</h1>";
    echo "<p>Content for the Gallery Page</p>";
} elseif ($page == 'about') {
    echo "<h1>About Us</h1>";
    echo "<p>Content for About Us Page</p>";
} else {
    // Default to the Home page
    echo "<h1>Gallery</h1>";
    echo "<p>Content for Home Page</p>";
}

// Include footer
include('footer.php');
?>

