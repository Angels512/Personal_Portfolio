<?php

    class Skill extends Conectar
    {
        public function getSkill()
        {
            $conectar = parent::Conexion();
            parent::setNames();

            $sql = 'SELECT * FROM skill WHERE est=1';
            $sql = $conectar->prepare($sql);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>