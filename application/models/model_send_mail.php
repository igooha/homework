<?php

class Model_Send_Mail extends Model
{
    public function get_data()
    {
        include ("db.php");

        $email = $_POST['email'];
        $login = $_POST['login'];

        $result = mysql_query("SELECT password FROM users WHERE login='$login'",$db->base);
        $array = mysql_fetch_array($result);

        $password = $array['password'];

        require_once 'lib/swift_required.php';

        $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
        ->setUsername('antisocialtin@gmail.com')
        ->setPassword('RightMove91093');

        $mailer = Swift_Mailer::newInstance($transport);

        $message = Swift_Message::newInstance('Востановление пароля')
        ->setFrom(array('antisocialtin@gmail.com' => 'Сайт МузЩит'))
        ->setTo($email)
        ->setBody("Ваш пароль от аккуанта $login: $password");

        $result = $mailer->send($message);

        echo "На вашу почту было отправленно письмо с паролем";

        exit;
    }
}