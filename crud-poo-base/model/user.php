<?php 

class User {
    private $id, $email, $password;

    public function __construct($id, $email="", $password="") {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
    }

    public function __get($attr)
    {
       return $this->attr;
    }

    public function __set($attr, $value)
    {
        return $this->attr = $value;
    }
}