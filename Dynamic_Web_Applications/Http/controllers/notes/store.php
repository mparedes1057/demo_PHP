<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

if (! Validator:: string($_POST['body'], 1, 1000)){ //valida que no ens introdueixin un body buid
    $errors['body'] = 'A of no more than 1000 characters is required';
}

if (!empty($errors)){
     return view("notes/create.view.php", [
        'heading' => 'Create note',
        'errors' => $errors
     ]);
}
$db ->query('insert into notes(body, user_id) values(:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 3
]);

header('location: /notes');
die();