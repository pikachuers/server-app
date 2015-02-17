<?php

return array(
	'driver' => 'smtp',
	'host' => 'smtp.gmail.com',
	'port' => 587,
	'from' => array('address' => 'eliclib.email.notifier@gmail.com', 'name' => "Notifier ". Config::get('serverperpustakaan.namaserver')),
	'encryption' => 'tls',
	'username' => 'eliclib.email.notifier@gmail.com',
	'password' => 'eliclibemail',
	'sendmail' => '/usr/sbin/sendmail -bs',
	'pretend' => false,
	
);
