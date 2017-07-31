<?php
class m_kategori extends CI_Model 
	{
		public function __construct()
    {
        $this->load->database();
    }
    function daftar(){
		$data = $this->db->get('kategori');
		return $data;
	}
	function hapus($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit($where,$table) {
		return $this->db->get_where($table,$where);

	}
	function v_edit($where,$datakategori,$table){
		$this->db->where($where);
		$this->db->update($table,$datakategori);
	}
}
?>