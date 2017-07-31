<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->helper('form');

	}

	public function index()
	{
		$data['financial']=$this->db->query('select * from user')->result_array();
		$this->load->view('financial/v_user.php', $data);
	}
	/**public function tambah_form(){
		$this->load->view('tambah_t');
	}*/
	public function tambah()
	{
		if($this->input->post() != null){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$role=$this->input->post('role');

			$simpan_data=array(
				'username'=>$username,
				'password'=>md5($password),
				'role'=>$role);
			$this->db->insert("user", $simpan_data);
		}
		$this->load->view('financial/tambah_t.php');
	}
	public function edit($id_user = null){
		if ($id_user != null) {
			# code...
			$where = array ('id_user'=>$id_user);
			$data['financial']=$this->m_user->update($where, 'user')->result();
								$this->load->view('update', $data);
		}
		/**$this->load->view('financial/tambah_t.php');*/
	}
	public function do_edit() {
		$id_user= $this->input->post('id_user');
		$username=$this->input->post('username');
		$role=$this->input->post('role');

		$data=array(
			'id_user'=>$id_user,
			'username'=>$username,
			'role'=>$role
			);

		$this->db->where('id_user',$id_user);
		$this->db->update('user',$data);
		$kondisi = array('id_user' => $id_user);
		$data['financial'] = $this->db->get_where('user', $kondisi)->result_array();
		redirect('C_user/index');
		/**$this->load->view('financial/v_user', $data);*/
	}
	public function delete($id_user){
		$where = array('id_user'=>$id_user);
		$this->m_user->hapus($where,'user');
		redirect('C_user/index');
	}
}
?>