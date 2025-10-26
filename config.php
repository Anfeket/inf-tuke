<?php
$build_file = __DIR__ . '/build.txt';

if (file_exists($build_file)) {
	$lines = file($build_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	[$commit, $date, $repo] = array_pad($lines, 3, null);
} else {
	$commit = $date = $repo = null;
}

define('BUILD_COMMIT', $commit);
define('BUILD_DATE', $date);
define('BUILD_URL', $repo);

define('ROOT', __DIR__);
