<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Panel_principal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    //METODO ENCARGADO DE CARGAR PANEL ADMIN
    function panel()
    {
        if ($this->session->userdata('usuario')) {
            $datos = array('activo' => 1);
            $this->load->view('index/header', $datos);
            $this->load->view('index/barra');
            $this->load->view('panel');
            $this->load->view('index/footer');
        } else {
            $this->formulario();
        }
    }

    //METODO ENCARGADO CARGAR PLANTILLA FORMULARIO
    function formulario()
    {
        $datos = array('activo' => 1);
        $this->load->view('index/header', $datos);
        $this->load->view('formulario');
        $this->load->view('index/footer');
    }
}
