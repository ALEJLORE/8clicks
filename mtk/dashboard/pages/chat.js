document.addEventListener("DOMContentLoaded", function() {
  const chatBox = document.getElementById("chat-box");
  const messageInput = document.getElementById("message-input");
  const sendButton = document.getElementById("send-button");

  sendButton.addEventListener("click", function() {
    const message = messageInput.value;
    if (message.trim() === "") return;

    // Send message to server (PHP) for processing
    fetch("sendMessage.php", {
      method: "POST",
      body: JSON.stringify({ message: message }),
      headers: {
        "Content-Type": "application/json"
      }
    })
    .then(response => response.json())
    .then(data => {
      // Display sent message in chat box
      chatBox.innerHTML += `<div>You: ${message}</div>`;
      // Display received message from server (Telegram)
      chatBox.innerHTML += `<div>Bot: ${data.reply}</div>`;
      // Clear input field
      messageInput.value = "";
    });
  });
});
