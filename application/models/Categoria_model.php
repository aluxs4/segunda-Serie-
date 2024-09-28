<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    // Obtener todas las categorías
    public function get_categorias()
    {
        $query = $this->db->get('categorias');
        return $query->result_array();
    }

    // Insertar nueva categoría
    public function insert_categoria($nombre, $descripcion, $restriccion_tiempo)
    {
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'restriccion_tiempo' => $restriccion_tiempo
        );
        return $this->db->insert('categorias', $data);
    }

    // Obtener categoría por ID
    public function get_categoria_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('categorias');
        return $query->row_array();
    }

    // Actualizar categoría
    public function update_categoria($id, $nombre, $descripcion, $restriccion_tiempo)
    {
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'restriccion_tiempo' => $restriccion_tiempo
        );
        $this->db->where('id', $id);
        return $this->db->update('categorias', $data);
    }

    // Eliminar categoría
public function delete_categoria($id)
{
    $this->db->where('id', $id);
    return $this->db->delete('categorias');
}
}
