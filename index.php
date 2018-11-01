<?php

require_once 'utils/StringFormatter.php';
require_once 'vendor/autoload.php';

echo '<pre>' . \utils\StringFormatter::sortWords('αβγαβγ αβγαβγαβγ') . '</pre>';