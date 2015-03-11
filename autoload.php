<?php
require_once("SplClassLoader.php");
$classLoader = new SplClassLoader("Webbamboo\Fortnox", __DIR__."/vendors");
$classLoader->register();
