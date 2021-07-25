<?php

    class Portfolio extends Conectar
    {
        public function getPortfolio()
        {
            $conectar = parent::Conexion();
            parent::setNames();

            $sql = 'SELECT * FROM portfolio WHERE est=1';
            $sql = $conectar->prepare($sql);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getPortfolio_Lang($port_id)
        {
            $conectar = parent::Conexion();
            parent::setNames();

            $sql = 'SELECT * FROM languajes WHERE port_id=? AND est=1';
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $port_id);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>