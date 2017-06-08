<?php

// este operador se integro en la version 7 de php

$a = null;

$result = $a ?? 'Default valor';
var_dump($result);