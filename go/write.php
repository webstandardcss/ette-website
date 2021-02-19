// write.php
//
// This is the file that write to a database, or text file, or whatever.

<?php
header("Access-Control-Allow-Origin: *"); // Let's just be safe.

$navString = $_SERVER['REQUEST_URI']; // Returns "/clickstats/15/" or whatever. You want the "15"
$parts = explode('/', $navString); // Break into an array

// Change the number to reflect the piece of the array you want. You can scale this up to more fields.

$clicked = $parts[2]; // This is the position of the click

// Do something awesome with that number, like append it to a text file or write it to a database

?>