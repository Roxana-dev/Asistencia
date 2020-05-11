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
        //SACAR REGISTROS DEL AÑO
        //


        /*
        $fecha="2019-01-25";
$this->db->where('fecha',$fecha);
$datos=$this->db->get('');
$datos_reloj=$datos->result();*/

        $datos = array('activo' => 0);
        $this->load->view('index/header', $datos);
        $this->load->view('index/barra_calendario');
        $this->load->view('calendario');
        $this->load->view('index/footer');
    }

}
