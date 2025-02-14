<?php

use Core\Authenticator;
use Http\Forms\LoginForm;


$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

$form = new LoginForm();

if ($form->validate($email, $password)) {
    $auth = new Authenticator();

    if ($auth->attempt($email, $password)) {
        redirect("/");
    }

    $form->error('email', 'No matching account found for that email and password');
}

return view('sessions/create.view.php', [
    'errors' => $form->errors()
]);

return view('sessions/create.view.php', [
    'errors' => [
        'email' => 'No matching account found for that email and password'
    ]
]);
