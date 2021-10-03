<?php
session_start();
class Authentication
{
    private $password;
    private $login;

    function __construct($login, $password)
    {
        $this->password = $password;
        $this->login = $login;

        if ($this->password == '123' && $this->login == 'test')
        {
            $_SESSION['user'] = ['login' => $login, 'password' => $password];
            return header('location:admin.php');
        }
    }
}

if (isset($_POST))
{
    $login = $_POST['login'];
    $password = $_POST['password'];

    new Authentication($login, $password);
}
?>