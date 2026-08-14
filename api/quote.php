<?php
/**
 * Quote Form Submission API
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
        'id' => uniqid('quote_'),
        'timestamp' => date('Y-m-d H:i:s'),
        'type' => 'quote',
        'service' => isset($_POST['service']) ? trim($_POST['service']) : '',
        'comuna' => isset($_POST['comuna']) ? trim($_POST['comuna']) : '',
        'property' => isset($_POST['property']) ? trim($_POST['property']) : '',
        'urgency' => isset($_POST['urgency']) ? trim($_POST['urgency']) : '',
        'name' => isset($_POST['name']) ? trim($_POST['name']) : '',
        'phone' => isset($_POST['phone']) ? trim($_POST['phone']) : '',
        'details' => isset($_POST['details']) ? trim($_POST['details']) : '',
        'ip' => $_SERVER['REMOTE_ADDR'] ?? ''
    ];

    $leads[] = $lead;
    file_put_contents($dataFile, json_encode($leads, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    echo json_encode(['success' => true, 'message' => 'Cotización registrada con éxito']);
    exit;
}

echo json_encode(['success' => false, 'message' => 'Método no permitido']);
