<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем и очищаем данные
    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST['subject'])); // исправлено!
    $message = strip_tags(trim($_POST['message']));

    // Кому отправляем
    $to = "avafeniks@gmail.com";

    // Тема письма
    $tema = $subject;

    // Тело письма
    $body = "Имя: $name\n";
    $body .= "E-mail: $email\n";
    $body .= "Тема: $subject\n";
    $body .= "Текст:\n$message\n";

    // Заголовки
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Отправка
    if (mail($to, $tema, $body, $headers)) {
        echo "Письмо отправлено!";
    } else {
        echo "Ошибка при отправке.";
    }
} else {
    echo "Доступ запрещен";
}
?>
