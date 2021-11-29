<?php
$to      = 'sergvn@rambler.ru';
$subject = 'Тестовое задание. Сергей Немакин';
$message = "<h2>Обратная связь</h2>
<table  border='0' cellpadding='10' cellspacing='1' style='margin:10; padding:10'>
    <tr>
        <td>Имя</td>
        <td>{$_POST['name']}</td>
    </tr>
    <tr>
        <td>Почта</td>
        <td><a href='mailto:{$_POST['email']}'>{$_POST['email']}</a></td>
    </tr>
    <tr>
        <td>Телефон</td>
        <td>{$_POST['telefon']}</td>
    </tr>
        <tr>
        <td>День рождения</td>
        <td>{$_POST['birthday']}</td>
    </tr>
</table>
<b>Вопрос:</b>
<p><i>{$_POST['question']}</i></p>";
   

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
echo $message;
mail($to, $subject, $message, $headers);