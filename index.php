<?php
require_once 'layouts.php';
require_once 'forms.php';

// create an instance for my class

$instance = new MyClass();
$formInstance = new user_forms();

// call the method myMethod
$instance->heading();
$instance->welcome();
// call the signup_form method
$formInstance->signup_form();
$instance->footer();