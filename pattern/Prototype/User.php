<?php
namespace Pattern\Prototype;

class User
{
    private string $name;
    private string $username;
    private string $password;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
    }

    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
    }

    public function __clone()
    {
        $this->password = '';
    }
}
