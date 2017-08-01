<?php
class m_reportran extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public  function daftar()
	{
		$data = $this->db->get('transaksi');
		return $data;
	}
}
?>