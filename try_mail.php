<?php
require_once 'ClassAutoLoad.php';

$mailCnt = [
'name_from' => 'Tatiana ziyane',
'mail_from' => 'ziyane.tatiana@strathmore.edu',
'name_to' =>'Oeppa podcast',
'mail_to' => 'oeppapodcast@gmail.com',
'subject' => 'Your trusted transfer partner, klink',


];

$ObjSendMail->Send_Mail($conf, $mailCnt);