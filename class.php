<?php

class User {

//Properties
    public $name;
    public $email;
    private $status = 'Active';
//Adding a constructor
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
//Method
    public function login() {
    echo $this->name . ' logged in <br>';
    }
    //getter: Extends the private class out the entire code.
    public function getStatus() {
        echo $this->status;
    }
    public function setStatus($status) {
        echo $this->status = $status;
    }
}   

class Admin extends User {
    public $level;
    public function __construct($name, $email, $level)
    {
        $this->level = $level;
        parent::__construct($name, $email);
    }
}

class MathUtility {
    public static $pi = 3.14;
}
echo MathUtility::$pi;


class Article {
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }
    public function publish() {
        $this->published = true;
    }
    public function isPublished() {
        return $this->published;
    }
}

$article1 = new Article('My first article', 'This was were it all started');
$article2 = new Article('My second article', 'This getting pretty comfy');
$article1->publish();


//Instatiate a new object.
// $user1 = new User();

// $user1->name = "Gerald Nnadi";
// $user1->email = "geranwa@outlook.com";

//var_dump($user1);
// $user1->login();
//because the constructor works, this method will work.
$user2 = new User('ThankGod Nnadi', 'thaokgod001@gmail.com');
$user2->login();
$user3 = new User('Chinenye Nnadi', 'Chinny@gmail.com');
$user3->login();
// $user2->getStatus();
$user3->setStatus('Inactive');
$admin = new Admin('Elizabeth Ukamaka', 'lizzy@gmail.com', '5');
$admin->login();
?>