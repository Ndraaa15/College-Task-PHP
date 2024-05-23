<?php
$message = $_POST['text'];
// file_put_contents('chat.txt', "$message\n", FILE_APPEND);
file_put_contents('chat.txt', "$message\n");

