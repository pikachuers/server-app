<?php

return array(
	'driver' => 'smtp',
	'host' => 'smtp.mailgun.org',
	'port' => 465,
	'from' => array('address' => 'eliclib.email.notifier@gmail.com', 'name' => "Notifier ". Config::get('serverperpustakaan.namaserver')),
	'encryption' => 'tls',
	'username' => 'eliclib.email.notifier@gmail.com',
	'password' => 'eliclibemail',
	'sendmail' => '/usr/sbin/sendmail -bs',
	'pretend' => false,
);
