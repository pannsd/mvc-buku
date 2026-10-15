<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/models/Buku.php';
require_once __DIR__ . '/../app/controllers/BukuController.php';

$database = new Database();
$db = $database->connect();

$model = new Buku($db);
$controller = new BukuController($model);

$page = $_GET['page'] ?? 'buku';
$action = $_GET['action'] ?? 'index';

if ($page !== 'buku') {
    http_response_code(404);
    exit('Halaman tidak ditemukan.');
}

if (!method_exists($controller, $action)) {
    http_response_code(404);
    exit('Aksi tidak valid.');
}

$controller->$action();