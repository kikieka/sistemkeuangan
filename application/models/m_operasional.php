<?php
class m_operasional extends CI_Model 
	{
		public function __construct()
    {
        $this->load->database();
    }
    function daftar()
    {
		$data = $this->db->get('transaksi');
		return $data;
	}
	function update($where, $table)
	{
		return $this->db->get_where($table , $where);	
	}
	function hapus($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>