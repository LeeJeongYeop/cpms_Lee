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
	function managerModify($id){  // 회원 본인 정보수정과 같이 사용
		$this->db->where('id', $id);
		$data = $this->db->get('member')->result();

		return $data;
	}
	function managerModifyOk($udata){  // 회원 본인 정보수정과 같이 사용
		$this->db->where('id',$udata['id']);
		$this->db->update('member',$udata);
	}
	
	/*  회원 등록  */
	function memberInsert($udata){
		$this->db->insert('member',$udata);
	}

	/*  회원 조회  */
	function memberList($grp){
		$this->db->where('grp', $grp);
		$data = $this->db->get('member')->result_array();

		return $data;
	}

	/*  회원 삭제  */
	function memberDelete($id){
		$this->db->where('id', $id);
		$this->db->delete('member');
	}

	/*  회원 정보 수정  */
	function memberModify($id){
		$this->db->where('id', $id);
		$data = $this->db->get('member')->result();

		return $data;
	}

	function memberModifyOk($udata){
		$this->db->where('id',$udata['id']);
		$this->db->update('member',$udata);
	}
}
?>