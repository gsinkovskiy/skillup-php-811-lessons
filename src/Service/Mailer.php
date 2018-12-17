<?php

namespace App\Service;

class Mailer
{

	public function send($to)
	{
		echo 'Отправка письма ' . $to;

		$transport = (new \Swift_SmtpTransport('smtp.ethereal.email', 587, 'tls'))
			->setUsername('oivjhaeymscz5vno@ethereal.email')
			->setPassword('8bgMaWw2En81FwX3kJ');

		// Create the Mailer using your created Transport
		$mailer = new \Swift_Mailer($transport);

		// Create a message
		$message = (new \Swift_Message('Тема'))
			->setFrom(['john@doe.com' => 'John Doe'])
			->setTo($to)
			->setBody('Сообщение из PHP')
		;

		// Send the message
		$result = $mailer->send($message);
		var_dump($result);
	}

}
