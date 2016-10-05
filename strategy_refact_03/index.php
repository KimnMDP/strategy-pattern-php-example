<?php
require_once('Autoloader/Autoloader.php');
require_once('Autoloader/PathsProvider.php');

$pathsProvider = new PathsProvider;
$pathsProvider->appendPath('Example/');
Autoloader::initWith( $pathsProvider );

new TestStrategy;
?>