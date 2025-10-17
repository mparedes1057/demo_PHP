<?php
class Database{
    public $connection;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=myAppDemo;user=root;charset=utf8mb4";    //connexio a la db

        $this->connection = new PDO($dsn);    //crea una instancia de la db

    }

    public function query($query)
    {
        $statement = $this->connection-> prepare($query);   //prepara la consulta

        $statement -> execute();   //executa la consulta

        return $statement;    //obtenim els resultats en format array asosiatiu
    }
}
//connect to our MySQL database

//foreach ($posts as $post){   //recorrem els resultats
//    echo "<li>" . $post['title'] . "</li>";
//}
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