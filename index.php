<?php
require_once 'classes.php';
require_once 'forms.php';

// create an instance for my class

$instance = new MyClass();
$formInstance = new user_forms();

// call the method myMethod
$instance->heading();
$instance->myMethod();
// call the signup_form method
$formInstance->signup_form();
$instance->footer();