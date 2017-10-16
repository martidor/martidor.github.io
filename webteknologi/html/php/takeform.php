<html>
<body>
<p> yolo </p>
<?php
ini_set('display_errors', 'On');
$file = 'tilbakemelding.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$date = date_create();
$timestamp = date_format($date, 'U = Y-m-d H:i:s') . "\n";
$name = "Navn: " + $_POST["name"] + "\n";
$epost = "Epost: " + $_POST["epost"] + "\n";
$melding = "Melding: " + $_POST["melding"] + "\n\n";

$current .= timestamp + " Tilbakemelding:\n" + name + epost + melding;
// Write the contents back to the file
file_put_contents($file, $current, FILE_APPEND | LOCK_EX);
?>
</body>
</html>
