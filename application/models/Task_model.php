<?php

class Task_model extends CI_Model
{
    public function getTask($id = null)
    {
        if ($id == null) {
            return $this->db->get('task')->result_array();
        } else {
            return $this->db->get_where('task', ['id' => $id])->row_array();
        }
    }

    public function addTask($data)
    {
        $this->db->insert('task', $data);
        return $this->db->affected_rows();;
    }

    public function updateTask($data, $id)
    {
        $this->db->update('task', $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function deleteTask($id)
    {
        $this->db->delete('task', ['id' => $id]);
        return $this->db->affected_rows();
    }
}
