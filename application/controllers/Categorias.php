<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Categoria_model'); 
        $this->load->helper('url');
    }   

    // Listar categorías
    public function index()
    {
        $data['categorias'] = $this->Categoria_model->get_categorias();
        $this->load->view('templates/sidebar');
        $this->load->view('categorias/index', $data);
        $this->load->view('templates/footer');
    }

    // Mostrar formulario de creación
    public function create()
    {
        $this->load->view('templates/sidebar');
        $this->load->view('categorias/create');
        $this->load->view('templates/footer');
    }

    // Guardar nueva categoría
    public function store()
    {
        $nombre = $this->input->post('nombre');
        $descripcion = $this->input->post('descripcion');
        $restriccion_tiempo = $this->input->post('restriccion_tiempo');
        $this->Categoria_model->insert_categoria($nombre, $descripcion, $restriccion_tiempo);
        redirect('categorias');
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $data['categoria'] = $this->Categoria_model->get_categoria_by_id($id);
        $this->load->view('templates/sidebar');
        $this->load->view('categorias/edit', $data);
        $this->load->view('templates/footer');
    }

    // Actualizar categoría
    public function update($id)
    {
        $nombre = $this->input->post('nombre');
        $descripcion = $this->input->post('descripcion');
        $restriccion_tiempo = $this->input->post('restriccion_tiempo');
        $this->Categoria_model->update_categoria($id, $nombre, $descripcion, $restriccion_tiempo);
        redirect('categorias');
    }

    // Eliminar categoría
public function delete($id)
{
    $this->Categoria_model->delete_categoria($id);
    redirect('categorias');
}
}
