<?php
$code = 'unset($a);';
$mem = memory_get_usage();

eval($code);

$mem = memory_get_usage() - $mem;