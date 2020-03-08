<?php
    class db{
        // Properties
        private $dbhost = 'sql12.freesqldatabase.com';
        private $dbuser = 'sql12326542';
        private $dbpass = 'Please wait';
        private $dbname = 'sql12326542';

        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }
