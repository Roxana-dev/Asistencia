<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class panel_checador extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->load->library('encryption');
        // $this->load->library('valida_permisos');
        // $this->load->model('Acciones_model');
    }

    //GROCERY CRUD CHECADORES
    function index()
    {
        //    if ($this->session->userdata('usuario') && $this->valida_permisos->permiso_usuarios(18) == TRUE) {
        if ($this->session->userdata('usuario')) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_theme('datatables');
                $crud->set_table('checadores');
                $crud->set_subject('checadores');

                $this->bloque_elementos_tabla($crud);
                $output = $crud->render();

                $this->plantilla($output);
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            redirect(panel);
        }
    }





    //ELEMENTOS BLOQUEADOS EN LA TABLA
    function bloque_elementos_tabla($crud)
    {
        $crud->unset_back_to_list();
        $crud->unset_clone();
    }

    //PLANTILLA 
    function plantilla($output = null)
    {
        $datos = array('activo' => 0);
        $this->load->view('index/header', $datos);
        $this->load->view('index/barra');
        $this->load->view('all.php', (array) $output);
        $this->load->view('index/footer');
    }
}
