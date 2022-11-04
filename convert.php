<?php

require 'autoloader.php';

use App\Setup;
use App\Converter;

$setup = new Setup();
$converter = new Converter();

$array = $setup->loadConfig('array');
$type = $setup->loadConfig('type');

$result = $converter->convert($array, $type);
?>

<div style="white-space: pre;"><?php echo $result; ?></div>
