<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Admin
 */
class Usuario {
    //put your code here
    private $usu_id;
    private $usu_usuario;
    private $per_nombres;
    private $per_apellidos;
    
   
    function __construct($usu_id, $usu_usuario, $per_nombres, $per_apellidos) {
        $this->usu_id = $usu_id;
        $this->usu_usuario = $usu_usuario;
        $this->per_nombres = $per_nombres;
        $this->per_apellidos = $per_apellidos;
    }
    function getUsu_id() {
        return $this->usu_id;
    }
    function getUsu_usuario() {
        return $this->usu_usuario;
    }

    function getPer_nombres() {
        return $this->per_nombres;
    }

    function getPer_apellidos() {
        return $this->per_apellidos;
    }

    function setUsu_usuario($usu_usuario) {
        $this->usu_usuario = $usu_usuario;
    }

    function setPer_nombres($per_nombres) {
        $this->per_nombres = $per_nombres;
    }

    function setPer_apellidos($per_apellidos) {
        $this->per_apellidos = $per_apellidos;
    }
    function setUsu_id($usu_id) {
        $this->usu_id = $usu_id;
    }



}




