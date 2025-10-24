<?php
$build_file = __DIR__ . '/build.txt';
if (file_exists($build_file)) {
	define('LAST_CHANGE', file($build_file));
} else {
	define('LAST_CHANGE', 'nie je zaznamenané');
}
