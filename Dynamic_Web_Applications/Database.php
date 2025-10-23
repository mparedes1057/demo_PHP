<?php
class Database{
    public $connection;

    public $statement;


    public function __construct($config, $username = 'root', $password = '')
    {
        //connexio a la db
        $dsn =  "mysql:" . http_build_query($config, '', ';');//example.com?host=localhost&port=3306&dbname=myAppDemo

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);    //crea una instancia de la db

    }

    public function query($query, $params = [])
    {
        $this -> statement = $this->connection-> prepare($query);   //prepara la consulta

        $this -> statement -> execute($params);   //executa la consulta

        return $this;    //obtenim els resultats en format array asosiatiu
    }

    public function get()
    {
        return $this ->statement -> fetchAll();
    }

    public function find()
    {
        return $this -> statement -> fetch();
    }

    public function findOrFail()
    {
        $result = $this -> statement -> fetch();

        if (! $result){
            abort();
        }

        return $result;
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