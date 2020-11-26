<?php
$content = file_get_contents('https://www.thecocktaildb.com/api/json/v1/1/search.php?f=a');
$result = json_decode($content);
// $myJSON = json_encode($content)
echo "<pre>";
var_dump(json_decode($content));
echo "</pre>";

?>