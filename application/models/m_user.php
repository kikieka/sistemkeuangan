<?php
class m_user extends CI_Model 
	{
	public function __construct()
    {
    $this->load->database();
    }
    function daftar()
    {
		$data = $this->db->get('user');
		return $data;
	}
    function input_data($data, $table)
    {
    	$this->db->insert($table, $data);
    }
	function update($where , $table)
	{
		return $this->db->get_where($table , $where);
	}
	function hapus($where , $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function simpan($where , $table)
	{
		return $this->db->get_where($table,$where);
	}
}
?>