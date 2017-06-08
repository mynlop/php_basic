<?php

$value = $_COOKIE['count'];
$value++;
setcookie('count', $value);

echo '<p>add 1 </p>';