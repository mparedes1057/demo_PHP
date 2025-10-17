<?php

require 'functions.php';


//connect to our MySQL database
$dsn = "mysql:host=localhost;port=3306;dbname=myAppDemo;user=root;charset=utf8mb4";    //connexio a la db
$pdo = new PDO($dsn);    //crea una instancia de la db

$statement = $pdo-> prepare("select * from posts where id = 2;");   //prepara la consulta

$statement -> execute();   //executa la consulta

$posts = $statement -> fetchAll(PDO::FETCH_ASSOC);    //obtenim els resultats

foreach ($posts as $post){   //recorrem els resultats
    echo "<li>" . $post['title'] . "</li>";
}

//class Person{
//    public $name;
//    public $age;
//
//    public function breathe()
//    {
//        echo $this -> name . " is breathing";
//    }
//}
//
//$person = new Person();
//
//$person -> name = 'Toni Mas';
//$person -> age = 20;
//
//dd($person -> breathe());