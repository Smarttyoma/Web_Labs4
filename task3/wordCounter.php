<?php
$text = $_POST["textarea"];
$regexp = "/\b\w+(?:\s+\w+)+\b/u"; // Регулярка: слово(+) пробел(ы) слово(+) и так далее
$matches = [];

$count = preg_match_all($regexp, $text, $matches);

echo "There are <b>$count words with spaces</b> in the text!";
?>
