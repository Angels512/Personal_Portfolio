<?php

    class Experience extends Conectar
    {
        public function getExperience()
        {
            $conectar = parent::Conexion();
            parent::setNames();

            $sql = 'SELECT * FROM experience WHERE est=1';
            $sql = $conectar->prepare($sql);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>