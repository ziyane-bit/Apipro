<?php
require_once 'ClassAutoLoad.php';

$mailCnt = [
'name_from' => 'Tatiana ziyane',
'mail_from' => 'ziyane.tatiana@strathmore.edu',
'name_to' =>'Oeppa podcast',
'mail_to' => 'oeppapodcast@gmail.com',
'subject' => 'Your trusted transfer partner, klink',
'body' => 'Thank you for joining <b>Klink</b>!<p>We are excited to have you on board.<br>Moving money across East Africa is now fast, transparent, and secure.
<p>Together, we are Connecting Africa.<p>— Klink Team'

];

$ObjSendMail->Send_Mail($conf, $mailCnt);