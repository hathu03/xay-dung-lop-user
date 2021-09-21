<?php

class User {
    const admin = 1;
    const user = 2;

    protected $name;
    protected $email;
    public $role;

    function __construct($name, $email, $role) {
        $this->role = $role;
        $this->name = $name;
        $this->name = $role;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setRole($role) {
        $this->role = $role;
    }

    function getInfo() {
        echo 'Name: ' .$this->name. '<br>';
        echo 'Email:' .$this->email. '<br>';
        echo 'Role:' .$this->role. '<br>';
    }

    function isAdmin() {
        switch ($this->role) {
            case 1:
                echo 'is Admin';
                break;
            case 2:
                echo 'is User nomal';
                break;
        }
    }
}

$user = new User('Ha','ha@gmail.com',1);
$user->getInfo();
$user->isAdmin();
echo '<br>';
echo '----------' . '<br>';
$user->setRole(2);
$user->getInfo();
$user->isAdmin();