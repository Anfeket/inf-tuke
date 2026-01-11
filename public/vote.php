<?php
include __DIR__ . '/../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$data = json_decode(file_get_contents('php://input'), true);
	$variant = $data['variant'] ?? '';

	$valid_variants = ['F-35A', 'F-35B', 'F-35C'];
	if (in_array($variant, $valid_variants)) {
		$stmt = $pdo->prepare("INSERT INTO votes (variant) VALUES (:variant)");
		$stmt->execute(['variant' => $variant]);

		echo json_encode(['success' => true]);
	} else {
		echo json_encode(['success' => false, 'error' => 'Invalid variant']);
	}
} else {
	echo json_encode(['success' => false, 'error' => 'Invalid request method']);
}
