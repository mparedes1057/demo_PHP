<?php

use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)){
    $errors['email'] = 'Please provide an email address.';
}

if (!Validator::string($password, 7, 20)){
    $errors['password'] = 'Please provide a password of at least seven characters.';
}

if (! empty($errors)){
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}


$user = $db -> query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user){
    header('location: /');
    exit();
} else {
    $db -> query('insert into users(email, password) values(:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    //$_SESSION['logged_in'] = true;
    login($user);

    header('localhost: /');
    exit();
}
