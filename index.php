<?php
$name = $_GET("name");
if (!isset($name)) $name = "Elsa";
echo "Hello ".$name;
