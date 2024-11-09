<?php
namespace Hong\Entity;

class User implements PrintAble {

    public $name;
    private $email;
    private $password;
    public array $favorite_movies = [];

    public function __construct(string $name, string $email, string $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function getName(){
        return $this->name;
    }

    function setName($name){
        $this->name = $name;
    }

    function getEmail(){
        return $this->email;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function getPassword(){
        return $this->password;
    }

    function setPassword($password){
        $this->password = $password;
    }

    public function addFavoriteMovie(string $movie): bool
    {
        $this->favorite_movies[] = $movie;

        return true;
    }

    public function printMySelf(){
        echo '<b>I am a User</b>'.'<br/>';
        echo $this->name.'<br/>';
        echo $this->email.'<br/>';
    }

    public function printMySelfOnConsole(){
        echo 'I am a User ---';echo "\n";
        echo $this->name;echo "\n";
        echo $this->email;echo "\n";
    }

}
