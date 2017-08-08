<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_operasional extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_operasional');

	}

	public function index()
	{
		$data['financial']=$this->db->query('SELECT transaksi.id_transaksi as id_transaksi, transaksi.tanggal as tanggal, member.nama as nama, kategori.nama_kategori as nama_kategori, transaksi.tipe as tipe, transaksi.jml_transaksi as jml_transaksi, transaksi.keterangan as keterangan from member join transaksi on member.id_member = transaksi.id_member join kategori on kategori.id_kategori=transaksi.id_kategori where kategori.id_kategori="1" order by tanggal desc')->result_array();
		$this->load->view('financial/v_operasional', $data);
	}

	public function tambah()
	{

		//$data ['financial']=$this->db->query('select* from member')->result_array();
		//$data ['kategori']=$this->db->query('select* from kategori')->result_array();

		if (isset($_POST['submit'])) {
			$id 			=	$this->input->post ('id_transaksi');
			$tgl			=	date('Y-m-d H-i-s', strtotime($this->input->post('tanggal')));
			$id_member 		=	$this->input->post ('id_member');
			//$id_kategori 	=	$this->input->post ('id_kategori');
			$tipe	 		=	$this->input->post ('tipe');
			$jml_transaksi 	=	$this->input->post ('jml_transaksi');
			$keterangan 	=	$this->input->post ('keterangan');

			$simpan_data = array(
				'id_transaksi'=>$id,
				'tanggal'=>$tgl,
				'id_member'=>$id_member,
				'id_kategori'=>'1',
				'tipe'=>$tipe,
				'jml_transaksi'=>$jml_transaksi,
				'keterangan'=>$keterangan
				);

			//var_dump($simpan_data);
			$result = $this->db->insert("transaksi", $simpan_data);
			//redirect(base_url('C_operasional'));
		}
			$data['member'] =$this->db->get('member')->result();
			$this->load->view('financial/tambah_o.php',$data);
		}
	public function edit($id=null){
		if ($id !=null) {
			$where = array('id_transaksi'=>$id);
			$data['financial'] = $this->m_operasional->update($where,'transaksi')->result();
								$data['member'] =$this->db->get('member')->result();
								$this->load->view('ganti',$data);
		}
	}
	public function do_edit(){
		$id = $this->input->post('id_transaksi');
		$tgl = $this->input->post('tanggal');
		$id_kategori = $this->input->post('id_kategori');
		$id_member = $this->input->post('id_member');
		$tipe = $this->input->post('tipe');
		$jml_transaksi = $this->input->post('jml_transaksi');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_transaksi'=>$id,
			'tanggal'=>$tgl,
			'id_kategori'=>'1',
			'id_member'=>$id_member,
			'tipe'=>$tipe,
			'jml_transaksi'=>$jml_transaksi,
			'keterangan'=>$keterangan 
			);

		$this->db->where('id_transaksi',$id);
		$this->db->update('transaksi',$data);
		//$kondisi = array('id_transaksi'=>$id);
		$data['financial'] = $this->db->get_where('transaksi', $kondisi)->result_array();
		redirect('C_operasional/index');
	}
	public function delete($id){
		$where = array('id_transaksi'=>$id);
		$this->m_operasional->hapus($where,'transaksi');
		redirect('C_operasional/index');
	}
}
?>