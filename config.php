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

// env z .env (hosting)
if (!defined('DB_LOADED')) {
	$lines = file(__DIR__ . '/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	foreach ($lines as $line) {
		if (str_starts_with(trim($line), '#')) continue;
		[$name, $value] = array_map('trim', explode('=', $line, 2));
		putenv("$name=$value");
	}
	define('DB_LOADED', true);
}

// databaza
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_NAME', getenv('DB_NAME') ?: 'f35_database');
define('DB_USER', getenv('DB_USER') ?: 'f35_user');
define('DB_PASS', getenv('DB_PASS') ?: 'f35_password');

$pdo_dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';
try {
	$pdo = new PDO($pdo_dsn, DB_USER, DB_PASS, [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	]);
} catch (PDOException $e) {
	die('Database connection failed: ' . $e->getMessage());
}

// tabulky
try {
	$pdo->query("SELECT 1 FROM votes LIMIT 1");
} catch (PDOException $e) {
	$create_table_sql = "
	CREATE TABLE votes (
		id INT AUTO_INCREMENT PRIMARY KEY,
		variant VARCHAR(10) NOT NULL,
		vote_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
	) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
	";
	$pdo->exec($create_table_sql);
}
