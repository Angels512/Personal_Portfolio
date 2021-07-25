<?php

    class Conectar
    {
        protected $dbh;

        protected function Conexion()
        {
            try
            {
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=portfolio", "root", "");
                return $conectar;
            } catch (Exception $e) {
                print 'Error: ' . $e->getMessage();
                die();
            }
        }

        public function setNames()
        {
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    }

?>