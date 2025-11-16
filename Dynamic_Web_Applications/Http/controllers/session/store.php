<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if (! $form->validate(Semail, $password)) {
    return view('session/create.view.php', [
        'errors' => $form->errors()
    ]);
}

$user = $db -> query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user){
    if (password_verify($password, $user['password'])){
        login([
            'email' => $email
        ]);

        header('location: /');
        exit();
    }
}



return view('session/create.view.php', [
    'errors' => [
        'email' => 'No mathcing accound found for that email address.'
    ]
]);