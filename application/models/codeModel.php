<?
class CodeModel extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}
	/*  로그인  */
	function login($id,$pw){
		$strQuery = "select * from member where id='$id' and password='$pw';";

		return $this->db->query($strQuery)->result();
	}

	/*  관리자 정보 수정  */
	function managerModify($id){
		$data = $this->db->query(" select * from member where id='$id'")->result();
		
		return $data;
	}
	function managerModifyOk($udata){
		$this->db->where('id',$udata['id']);
		$this->db->update('member',$udata);
	}
	
	/*  회원 등록  */
	function memberInsert($udata){
		$this->db->insert('member',$udata);
	}

	function memberList($grp){
		$this->db->where('grp', $grp);
		$data = $this->db->get('member')->result_array();

		return $data;
	}
}
?>