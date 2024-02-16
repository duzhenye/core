<?php

declare(strict_types=1);

use src\core\Loader;

require_once __DIR__ . '/App.php';
require_once __DIR__ . '/core/Loader.php';

Loader::autoload(true, [dirname(__DIR__)]);
