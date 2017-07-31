<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_transaksi');

	}

	public function index()
	{
		$data['financial']=$this->db->query('select * from transaksi')->result_array();
		$this->load->view('financial/v_transaksi.php', $data);
	}
	public function tambah()
	{
		if (isset($_POST['submit'])) {
			$id 			=	$this->input->post ('id_transaksi');
			$tgl			=	$this->input->post ('tanggal');
			$id_member 		=	$this->input->post ('id_member');
			$id_kategori 	=	$this->input->post ('id_kategori');
			$tipe	 		=	$this->input->post ('tipe');
			$jml_transaksi 	=	$this->input->post ('jml_transaksi');
			$keterangan 	=	$this->input->post ('keterangan');

			$simpan_data = array(
				'id_transaksi'=>$id,
				'tanggal'=>$tgl,
				'id_member'=>$id_member,
				'id_kategori'=>$id_kategori,
				'tipe'=>$tipe,
				'id_transaksi'=>$jml_transaksi,
				'keterangan'=>$keterangan,
				);
			$this->db->insert("transaksi", $simpan_data);
			redirect(base_url('C_transaksi'));
		}
		else{
			$this->load->view('financial/tambah_t.php');
		}
	}
}
?>