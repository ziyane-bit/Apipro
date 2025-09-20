<?php

require_once __DIR__ . '/../../ClassAutoLoad.php';
require_once __DIR__ . '/../../conf.php';

// Prepare email content
$mailCnt = [
    'name_from' => 'Tatiana ziyane',
    'mail_from' => 'ziyane.tatiana@strathmore.edu',
    'name_to'   => 'Oeppa podcast',
    'mail_to'   => 'oeppapodcast@gmail.com',
    'subject'   => 'Your trusted transfer partner, klink'
];

// instantiate SendMail class 
$objSendMail = new SendMail();
//call (handles validation, greeting, and body automatically)
$ObjSendMail->Send_Mail($conf, $mailCnt);


//Instead of duplicating email code in here, standardize to use the SendMail class via try_mail.php.