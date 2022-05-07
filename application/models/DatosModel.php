<?php

    class datosModel extends CI_model
    {

        public function __construct()
        {

            $this->load->database();

        }

        public function registro($nombre, $telefono, $correo_electronico)
        {

            return $this->db->insert("datos", ["nombre" => $nombre, "telefono" => $telefono, "correo_electronico" => $correo_electronico]);

            //Se puede continuar haciendo el CRUD completo, actualizando vistas, controladores, modelos y tablas para crear cada uno de ellos.

        }

    }

?>