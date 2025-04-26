<?php
$str = "uaau uaaau uau ubbbu upppu   u ucccu upu";
$regexp = "/\bu..u\b/"; // \b — граница слова
$matches = [];

$count = preg_match_all($regexp, $str, $matches);
$matches = $matches[0];

echo "Найдено строк: $count \n";
var_dump($matches);
?>
