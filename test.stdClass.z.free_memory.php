<?php
$mem = memory_get_usage();

unset($a, $b, $c);

$mem = memory_get_usage() - $mem;