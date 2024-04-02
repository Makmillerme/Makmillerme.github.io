<?php
header('Content-Type: application/json'); // Встановлюємо заголовок відповіді у форматі JSON

$to = "gerukmaks444@gmail.com";
$subject = "Feedback-Formular von der Website Fidelis";
$headers = "Content-type: text/html; charset=utf-8 \r\n";

$response = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["username"]) ? trim(strip_tags($_POST["username"])) : "";
    $number = isset($_POST["usernumber"]) ? trim(strip_tags($_POST["usernumber"])) : "";
    $question = isset($_POST["question"]) ? trim(strip_tags($_POST["question"])) : "";

    $message = "<html><body>";
    $message .= "VOLLSTÄNDIGER NAME: " . $name . "<br />";
    $message .= "E-MAIL-ADRESSE: " . $number . "<br />";
    $message .= "TELEFONNUMMER: " . $question;
    $message .= "</body></html>";

    if (mail($to, $subject, $message, $headers)) {
        $response["status"] = "success";
        $response["message"] = "Die E-Mail wurde erfolgreich gesendet.";
    } else {
        $response["status"] = "error";
        $response["message"] = "Die E-Mail wurde nicht gesendet.";
    }
} else {
    $response["status"] = "error";
    $response["message"] = "Ungültige Anfrage.";
}

echo json_encode($response); // Повертаємо відповідь у форматі JSON
?>
