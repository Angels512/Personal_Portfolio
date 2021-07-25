<?php

    class Contact extends Conectar
    {
        public function createContact($cont_name, $cont_email, $cont_subject, $cont_message)
        {
            $conectar = parent::Conexion();
            parent::setNames();

            $sql = 'INSERT INTO contact VALUES (null, ?, ?, ?, ?, now(), 1);';
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $cont_name);
            $sql->bindValue(2, $cont_email);
            $sql->bindValue(3, $cont_subject);
            $sql->bindValue(4, $cont_message);
            $sql->execute();


            // Enviar Email

            $destinatario = 'miguelcolmatiz@gmail.com';
            $asunto = 'Formulario de Contacto ('. $cont_name .') - Angels Web';

            $mensaje = file_get_contents('../public/templates/Contact.html');
            $mensaje = str_replace('lblName', $cont_name, $mensaje);
            $mensaje = str_replace('lblEmail', $cont_email, $mensaje);
            $mensaje = str_replace('lblSubject', $cont_subject, $mensaje);
            $mensaje = str_replace('lblMessage', $cont_message, $mensaje);

            $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            mail($destinatario, $asunto, $mensaje, $cabeceras);
        }
    }

?>