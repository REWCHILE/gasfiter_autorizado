<?php
/**
 * Contact Form Submission API
 */
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dataFile = __DIR__ . '/../data/leads.json';
    
    $leads = [];
    if (file_exists($dataFile)) {
        $content = file_get_contents($dataFile);
        $leads = json_decode($content, true) ?: [];
    }

    $lead = [
        'id' => uniqid('contact_'),
        'timestamp' => date('Y-m-d H:i:s'),
        'type' => 'contact',
        'name' => isset($_POST['name']) ? trim($_POST['name']) : '',
        'phone' => isset($_POST['phone']) ? trim($_POST['phone']) : '',
        'email' => isset($_POST['email']) ? trim($_POST['email']) : '',
        'comuna' => isset($_POST['comuna']) ? trim($_POST['comuna']) : '',
        'service' => isset($_POST['service']) ? trim($_POST['service']) : '',
        'message' => isset($_POST['message']) ? trim($_POST['message']) : '',
        'ip' => $_SERVER['REMOTE_ADDR'] ?? ''
    ];

    $leads[] = $lead;
    file_put_contents($dataFile, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    echo json_encode(['success' => true, 'message' => 'Mensaje recibido correctamente. Un técnico SEC se contactará a la brevedad.']);
    exit;
}

echo json_encode(['success' => false, 'message' => 'Método no permitido']);
