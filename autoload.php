<?php
require_once("SplClassLoader.php");
$classLoader = new SplClassLoader("Webbamboo\Fortnox", __DIR__."/vendor");
$classLoader->register();
