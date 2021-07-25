<?php

class Connection
{
    private $dns;
    private $user;
    private $pass;

    function __construct()
    {
        $this->dns = 'mysql:host=mysql.pibfs.com;dbname=pibfs;';
        $this->user = 'pibfs';
        $this->pass = 'bd20pibfs';
    }

    public function connect()
    {
        try {
            $connect = new PDO($this->dns, $this->user, $this->pass);
            return $connect;
        } catch (PDOException $e) {
            echo ("Falha na conexão" . $e->getMessage());
        }
    }
}
