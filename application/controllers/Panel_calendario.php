<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Panel_calendario extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('grocery_CRUD');
        //  $this->load->library('encryption');
        //   $this->load->library('valida_permisos');
        //  $this->load->model('Acciones_model');
    }

    //GROCERY CRUD USUARIOS
    function index()
    {
        $fecha_inicial = "2020-05-01";
        $fecha_final = "2020-05-09";
        // $this->db->where('id', 1070795);

        $this->db->where('fechahora BETWEEN "' . date('Y-m-d', strtotime($fecha_inicial)) . '" and "' . date('Y-m-d', strtotime($fecha_final)) . '"');
        $datos = $this->db->get('peticiones');
        $datos_reloj = $datos->result();


        $parametros = array('datos_reloj' => $datos_reloj);
        $datos = array('activo' => 0);
        $this->load->view('index/header', $datos);
        $this->load->view('index/barra_calendario');
        $this->load->view('calendario', $parametros);
        $this->load->view('index/footer');
    }
}
