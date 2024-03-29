<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];

    $to = "gerukmaks444@gmail.com"; // Замініть на свою електронну адресу
    $subject = "Нове повідомлення з форми зворотного зв'язку";
    $message = "Ім'я: " . $name . "\n";
    $message .= "Електронна пошта: " . $email . "\n";
    $message .= "Номер телефону: " . $phone . "\n";

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Повідомлення успішно відправлено!";
    } else {
        echo "Виникла помилка під час відправки повідомлення.";
    }
}
?>