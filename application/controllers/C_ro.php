<?php
defined('BASEPATH') OR exit('No direct script accesss allowed');

class C_ro extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_reportoper');
	}

	public function index()
	{
		$data['financial']=$this->db->query('SELECT transaksi.id_transaksi as id_transaksi, transaksi.tanggal as tanggal, member.nama as nama, kategori.nama_kategori as nama_kategori, transaksi.tipe as tipe, transaksi.jml_transaksi as jml_transaksi, transaksi.keterangan as keterangan from member join transaksi on member.id_member = transaksi.id_member join kategori on kategori.id_kategori=transaksi.id_kategori where kategori.id_kategori="1" order by tanggal desc')->result_array();
		$this->load->view('financial/v_reportoper',$data);
	}

	public function mm()
	{
		$bulan = $_POST['bulan'];
		$sql = "SELECT * FROM transaksi where month(waktu)='$bulan' ";
	}
}