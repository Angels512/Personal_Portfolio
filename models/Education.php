<?php

    class Education extends Conectar
    {
        public function getEducation()
        {
            $conectar = parent::Conexion();
            parent::setNames();

            $sql = 'SELECT * FROM education WHERE est=1';
            $sql = $conectar->prepare($sql);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>