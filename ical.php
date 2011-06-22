<?php header('Content-type: text/html; charset=iso-8859-1');
$file = file_get_contents("https://brukernavn:passord@www.spootnik.net/ofocus/brukernavn/OmniFocus-Reminders.ics");
print $file;
?>

