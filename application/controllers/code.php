<? ob_start();?>
<meta charset="utf-8">
<?
class Code extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('codeModel');
		$this->load->library('session');
	}
	public function index(){
		$this->load->view('codeIndex');
	}

	/*************************************/
	/*            로그인 관련               */
	/************************************/
	public function login(){
		$id=$this->input->post('id');
		$pw=$this->input->post('pw');
		$result=$this->codeModel->login($id,$pw);
		if(count($result)==0){
			echo "<script>alert('아이디와 비밀번호가 맞지 않습니다!')</script>";
			echo "<script>location.href='/code'</script>";
			
		}
		else{

			$data=array(
				'uid'=>$result[0]->id,
				'uname'=>$result[0]->name,
				'ugroup'=>$result[0]->grp
				);
			$this->session->set_userdata($data);
			redirect('/code/cadiw','refresh');
		}
	}
	public function cadiw(){

		$udata=$this->session->all_userdata();
		if(isset($udata['uid'])){
			$this->load->view('cadiwHeader');
			$this->load->view('cadiwNav');
			$this->load->view('cadiwIndex');
		}
		else{

			echo "<script>alert('로그인 해주세요!')</script>";
			redirect('/code','refresh');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('/code','location');
	}

	/*************************************/
	/*            관리자 정보 수정           */
	/************************************/
	public function managerModify(){
		$udata=$this->session->all_userdata();
		if(isset($udata['uid'])){
			$result['udata']=$this->codeModel->managerModify($udata['uid']);
			$this->load->view('cadiwHeader');
			$this->load->view('cadiwNav');
			$this->load->view('cadiwManagerModify',$result);
		}else{
			echo "<script>alert('로그인 해주세요!')</script>";
			redirect('/code','refresh');	
		}
	}

	public function managerModifyOk(){
		$udata=array(
			'id'=>$this->input->post('id'),
			'password'=>$this->input->post('pw_ok'),
			'name'=>$this->input->post('name'),
			'phone'=>$this->input->post('phone'),
			'university'=>$this->input->post('uni'),
			'grp'=>$this->input->post('grp'),
			'authority'=>$this->input->post('auth')
			);
		$this->codeModel->managerModifyOk($udata);
		redirect('/code/cadiw','refresh');
	}
	
	/*************************************/
	/*             회원 관리               */
	/************************************/
	public function memberManagement(){
		$udata=$this->session->all_userdata();
		if(isset($udata['uid'])){
			$this->load->view('cadiwHeader');
			$this->load->view('cadiwNav');
			$this->load->view('cadiwMemberManagement');
		}else{
			echo "<script>alert('로그인 해주세요!')</script>";
			redirect('/code','refresh');
		}
	}

	public function memberInsert(){
		$udata=array(
			'id'=>$this->input->post('id'),
			'password'=>$this->input->post('pw'),
			'name'=>$this->input->post('name'),
			'phone'=>$this->input->post('phone'),
			'university'=>$this->input->post('uni'),
			'grp'=>$this->input->post('grp'),
			'authority'=>$this->input->post('auth')
			);
		$this->codeModel->memberInsert($udata);
		redirect('/code/memberManagement','refresh');
	}

	public function memberList(){
		$grp=$this->input->post('grp');
		$data['list'] = $this->codeModel->memberList($grp);
		$this->load->view('cadiwMemberManagementTable', $data);
	}
}

?>