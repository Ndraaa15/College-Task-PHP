const chat = document.querySelector("#chat");
const message = document.querySelector("#message");
const baseUrl = "http://localhost/";
function readChat() {
  fetch(`${baseUrl}/chat-read.php`)
    .then((res) => res.text())
    .then((data) => {
      chat.value = data;
    });
  // setTimeout(readChat, 1000);
  setTimeout(readChat, 100);
}
readChat();
message.addEventListener("keyup", (e) => {
  if (e.keyCode === 13) {
    fetch(`${baseUrl}/chat-write.php`, {
      method: "post",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: `text=${message.value}`,
    });
    message.value = "";
  }
});
