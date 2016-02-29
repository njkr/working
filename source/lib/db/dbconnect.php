<?php

/**
 * Created by PhpStorm.
 * User: Jenkins-Raj
 * Date: 29/02/2016
 * Time: 9:27 PM
 */
class dbconnect
{

    // nain var  connect

    public $connection;


    // nain var  connect


    public $server = '';
    public $username = '';
    public $password = "";
    public $database = "";

    public function __construct($server, $userame ,$password , $database)
    {

        $this->server=$server;
        $this->username=$userame;
        $this->password=$password;
        $this->database=$database;

    }


    public function connect()
    {
        try {

            $this->connection = new PDO("mysql:host=$this->server,dbname=$this->database", $this->username, $this->password);

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {

            echo 'error connection '.$e->getMessage();

        }


    }


}