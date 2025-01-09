<?php

$botToken = 'TOKEN_BOT';
$adminUserId = CHAT_ID;
$apiUrl = "https://api.telegram.org/bot{$botToken}/sendMessage";

// Set the timezone to Iran
date_default_timezone_set('Asia/Tehran');

function get_order_book() {
    $url = "https://api.nobitex.ir/v2/orderbook/BTCUSDT";
    $response = file_get_contents($url);
    return json_decode($response, true);
}

function send_message($chatId, $text) {
    global $apiUrl;

    $data = [
        'chat_id' => $chatId,
        'text' => $text,
    ];

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    file_get_contents($apiUrl, false, $context);
}

function process_start_command($chatId) {
    // Fetch Bitcoin price information
    $orderBookData = get_order_book();
    $lastTradePrice = $orderBookData['lastTradePrice'] ?? 'N/A';

    // Compose message with current date and time in Iran's timezone
    $message = "Bitcoin Price: {$lastTradePrice}\nTime: " . date('Y-m-d H:i:s');

    // Send message to user
    send_message($chatId, $message);
}

$update = json_decode(file_get_contents('php://input'), true);

if (isset($update['message']['text'])) {
    $chatId = $update['message']['chat']['id'];
    $messageText = strtolower($update['message']['text']);

    if ($messageText == '/start') {
        // Process /start command
        process_start_command($chatId);
    }
}
