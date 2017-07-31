<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_transaksi');
		date_default_timezone_set('Asia/Jakarta');

	}
	public function index()
	{
		redirect("C_transaksi/tampil");
	}

	public function tampil()
	{
		$data['financial']=$this->db->query('SELECT transaksi.id_transaksi as id_transaksi, transaksi.tanggal as tanggal, member.nama as nama, kategori.nama_kategori as nama_kategori, transaksi.tipe as tipe, transaksi.jml_transaksi as jml_transaksi, transaksi.keterangan as keterangan from member join transaksi on member.id_member = transaksi.id_member join kategori on kategori.id_kategori=transaksi.id_kategori;')->result_array();
		$this->load->view('financial/v_transaksi.php', $data);
	}
	public function tambah()
	{
		if (isset($_POST['submit'])) {
			//$id 			=	$this->input->post ('id_transaksi');
			$tgl			=	$this->input->post ('tanggal');
			$tgl            =   date('Y-m-d H:i:s', strtotime($tgl));
			$id_member 		=	$this->input->post ('id_member');
			$id_kategori 	=	$this->input->post ('id_kategori');
			$tipe	 		=	$this->input->post ('tipe');
			$jml_transaksi 	=	$this->input->post ('jml_transaksi');
			$keterangan 	=	$this->input->post ('keterangan');

			$simpan_data = array(
				//'id_transaksi'=>$id,
				'tanggal'=>$tgl,
				'id_member'=>$id_member,
				'id_kategori'=>$id_kategori,
				'tipe'=>$tipe,
				'jml_transaksi'=>$jml_transaksi,
				'keterangan'=>$keterangan,
				);
			$this->db->insert("transaksi", $simpan_data);
			redirect(base_url('C_transaksi'));
		}
		else{
			$this->load->view('financial/v_incometransaksi.php');
		}
	}
	public function income()
	{
		$data['financial']=$this->db->query('select * from member')->result_array();
		$data['kategori']=$this->db->query('select * from kategori')->result_array();

		if (isset($_POST['submit'])) {
			// $id 			=	$this->input->post ('id_transaksi');
			$tgl			=	$this->input->post('tanggal');
			$tgl=date('Y-m-d H:i:s', strtotime($tgl));
			$id_member 		=	$this->input->post('id_member');
			$id_kategori 	=	$this->input->post('id_kategori');
			$jml_transaksi 	=	$this->input->post('jml_transaksi');
			$keterangan 	=	$this->input->post('keterangan');
			
			$simpan_data = array(	
				//'id_transaksi'=>$id,
				'tanggal'=>$tgl,
				'id_member'=>$id_member,
				'id_kategori'=>$id_kategori,
				'tipe'=>'income',
				'jml_transaksi'=>$jml_transaksi,
				'keterangan'=>$keterangan,
				);
			var_dump($simpan_data);
			// die();
			$result = $this->db->insert("transaksi", $simpan_data);
			redirect(base_url('C_transaksi/tampil'));
		}
		else{
			$this->load->view('financial/v_incometransaksi',$data);
		}
	}
		public function outcome()
	{
		$data['financial']=$this->db->query('select * from member')->result_array();
		$data['kategori']=$this->db->query('select * from kategori')->result_array();

		if (isset($_POST['submit'])) {
			// $id 			=	$this->input->post ('id_transaksi');
			$tgl			=	$this->input->post('tanggal');
			$tgl=date('Y-m-d H:i:s', strtotime($tgl));
			$id_member 		=	$this->input->post('id_member');
			$id_kategori 	=	$this->input->post('id_kategori');
			$jml_transaksi 	=	$this->input->post('jml_transaksi');
			$keterangan 	=	$this->input->post('keterangan');

			$simpan_data = array(
				// 'id_transaksi'=>$id,
				'tanggal'=>$tgl,
				'id_member'=>$id_member,
				'id_kategori'=>$id_kategori,
				'tipe'=>'Outcome',
				'jml_transaksi'=>$jml_transaksi,
				'keterangan'=>$keterangan,
				);

			var_dump($simpan_data);
			// die();
			$result = $this->db->insert ("transaksi", $simpan_data);
			redirect(base_url('C_transaksi/tampil'));
		}
		else{
			$this->load->view('financial/v_outcometransaksi',$data);
		}
	}

	public function hapus($id)
	{
		$where = array('id_transaksi'=> $id);
		$this->m_transaksi->hapus($where,'transaksi');
		redirect('C_transaksi/tampil');
			
	}

	public function edit($id) 
	{
        $where = array('id_transaksi'=> $id);
		$data['member'] = $this->db->get('member');
		$data['kategori'] = $this->db->get('kategori');
		$data['financial'] = $this->db->get_where('transaksi', $where);
		$this->load->view('financial/v_edittransaksi.php', $data);
	}

	public function v_edit($id)
	{
			$id_transaksi	=	$this->input->post('id_transaksi');
			$tgl			=	$this->input->post('tanggal');
			$tgl=date('Y-m-d H:i:s', strtotime($tgl));
			$id_member 		=	$this->input->post('id_member');
			$id_kategori 	=	$this->input->post('id_kategori');
			$jml_transaksi 	=	$this->input->post('jml_transaksi');
			$keterangan 	=	$this->input->post('keterangan');

			$data = array(
				//'id_transaksi'=>$id_transaksi,
				'tanggal'=>$tgl,
				'id_member'=>$id_member,
				'id_kategori'=>$id_kategori,
				'jml_transaksi'=>$jml_transaksi,
				'keterangan'=>$keterangan,
				);

			$this->db->where('id_transaksi', $id_transaksi);
			$this->db->update('transaksi',$data);
			//$kondisi = array('id_transaksi' => $id);
			$data['financial'] = $this->db->get_where('transaksi',$kondisi)->result_array();
			//$this->load->view('C_transaksi/tampil');
			redirect('C_transaksi/tampil');
	}
}
?>