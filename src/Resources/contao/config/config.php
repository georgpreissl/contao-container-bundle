<?php

use GeorgPreissl\Container\ContentContainerStart;
use GeorgPreissl\Container\ContentContainerStop;

$GLOBALS['TL_CTE']['container'] = array
(
  'containerStart' => ContentContainerStart::class,
  'containerStop'  => ContentContainerStop::class,
);

$GLOBALS['TL_WRAPPERS']['start'][] = 'containerStart';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'containerStop';
