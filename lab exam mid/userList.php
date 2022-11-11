<?php

echo '<table border="1">';

$file = fopen("user.txt", "r") or die("Unable to open file!");

echo '<tr><th>ID</th><th>Password</th><th>Password</th><th>Name</th><th>Type</th></tr>';



while (!feof($file)){

$data = fgets($file);

echo "<tr><td>" . str_replace('|','</td><td>',$data) . '</td></tr>';

}

echo '</table>';

fclose($file);

?>