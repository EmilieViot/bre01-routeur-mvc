<?php

require "config/autoload.php";

$routeur = new Routeur();
$routeur->handleRequest($_GET);