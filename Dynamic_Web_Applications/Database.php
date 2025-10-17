<?php
class Database{
    public $connection;
    public function __construct($config, $username = 'root', $password = '')
    {
        //connexio a la db
        $dsn =  "mysql:" . http_build_query($config, '', ';');//example.com?host=localhost&port=3306&dbname=myAppDemo

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);    //crea una instancia de la db

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