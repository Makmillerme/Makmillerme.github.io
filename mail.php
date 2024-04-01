<?php
$to = "gerukmaks444@gmail.com";//Почтовый ящик на который будет отправленно сообщение
  $subject = "Тема сообщения";//Тема сообщения
  $message = "Message, сообщение!";//Сообщение, письмо
  $headers = "Content-type: text/plain; charset=utf-8 \r\n";//Шапка сообщения, 
  //содержит определение типа письма, от кого, и кому отправить ответ на письмо
// Проверяем или метод запроса POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Поочередно проверяем или были переданные параметры формы, или они не пустые
    if(isset($_POST["username"])){ // Додано відсутню закриваючу круглу дужку
  $name     = trim(strip_tags($_POST["username"]));
}
if(isset($_POST["usernumber"]))
{
  $number   = trim(strip_tags($_POST["usernumber"]));
}
if (isset($_POST["question"])) { // Виправлено на правильне отримання значення з POST
  $question = trim(strip_tags($_POST["question"]));
}
      // Формируем письмо
      $message  = "<html>";
        $message  .= "<body>";
        $message  .= "Телефон: ".$number;
        $message  .= "<br />";
        $message  .= "Имя: ".$name;
        $message  .= "<br />";
        $message  .= "Вопрос: ".$question;
        $message  .= "</body>";
      $message  .= "</html>";
      // Окончание формирования тела письма
      // Посылаем письмо
      mail ($to, $subject, $message, $headers);
}
else
{
  exit;
} 
?>