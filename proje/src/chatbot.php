<?php
header('Content-Type: application/json');
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Kullanıcıdan gelen mesajı al
$input = json_decode(file_get_contents('php://input'), true);
$question = $input['message'] ?? '';

if (!$question) {
    echo json_encode(['reply' => 'Lütfen bir soru yazın.']);
    exit;
}

$apiKey = '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'; // <--- BURAYA API KEY'İNİ DOĞRU ŞEKİLDE YAZ

// OpenAI API isteği
$ch = curl_init('https://api.openai.com/v1/chat/completions');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer $apiKey"
]);

$data = [
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        ['role' => 'system', 'content' => 'Sen CRM ürünleri hakkında yardımcı bir asistansın.'],
        ['role' => 'user', 'content' => $question]
    ],
    'temperature' => 0.7,
    'max_tokens' => 300
];

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    echo json_encode(['reply' => 'cURL Hatası: ' . curl_error($ch)]);
    curl_close($ch);
    exit;
}
curl_close($ch);

// HTTP kodunu kontrol et
if ($http_code !== 200) {
    echo json_encode([
        'reply' => "HTTP Hatası ($http_code): $response"
    ]);
    exit;
}

// JSON verisini ayrıştır
$json = json_decode($response, true);
$reply = $json['choices'][0]['message']['content'] ?? "JSON ayrıştırılamadı: $response";

echo json_encode(['reply' => $reply]);
