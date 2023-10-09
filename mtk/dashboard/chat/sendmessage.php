<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the message from the client
  $data = json_decode(file_get_contents("php://input"), true);
  $message = $data["message"];

  // Telegram Bot API endpoint
  $telegramBotToken = "6661779585:AAEudGvMJEzVouJWVn-9imCJ8qrb35P7Yds";
  $telegramChatID = "6336134031";

  // Send the message to Telegram
  $telegramApiUrl = "https://api.telegram.org/bot{$telegramBotToken}/sendMessage";
  $postData = http_build_query([
    "chat_id" => $telegramChatID,
    "text" => $message
  ]);

  $options = [
    "http" => [
      "method" => "POST",
      "header" => "Content-Type: application/x-www-form-urlencoded\r\n",
      "content" => $postData
    ]
  ];

  $context = stream_context_create($options);
  $result = file_get_contents($telegramApiUrl, false, $context);

  // Send the reply back to the client
  header("Content-Type: application/json");
  echo json_encode(["reply" => "Message sent to Telegram!"]);
} else {
  http_response_code(405); // Method Not Allowed
}
?>
