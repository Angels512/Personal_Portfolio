<?php

    class Social extends Conectar
    {
        public function getSocial()
        {
            $conectar = parent::Conexion();
            parent::setNames();

            $sql = 'SELECT * FROM social WHERE est=1';
            $sql = $conectar->prepare($sql);
            $sql->execute();

            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>