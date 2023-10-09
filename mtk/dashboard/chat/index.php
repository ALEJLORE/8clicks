<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Telegram Chat</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div id="chat-box" class="border p-3 mb-3" style="height: 300px; overflow-y: scroll;"></div>
        <div class="input-group mb-3">
          <input type="text" id="message-input" class="form-control" placeholder="Type your message...">
          <button class="btn btn-primary" id="send-button">Send</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="chat.js"></script>
</body>
</html>
