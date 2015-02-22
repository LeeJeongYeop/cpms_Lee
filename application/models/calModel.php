<?
class CalModel extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}
	function addId(){
		$strQuery="select id from cal order by id desc limit 1";
		return $this->db->query($strQuery)->result();
	}
	function calInsert($id,$title,$start,$end){
		$insertdb=array(
			'id'=>$id,
			'title'=>$title,
			'start'=>$start,
			'end'=>$end);
		$this->db->insert('cal',$insertdb);
	}
	function calView(){
		$strQuery="select * from cal;";
		return $this->db->query($strQuery)->result();
	}
	function calUpdate($id,$start,$end){
		$updatedb=array(
			'start'=>$start,
			'end'=>$end
			);
		$this->db->where('id',$id);
		$this->db->update('cal',$updatedb);
	}
	function calDelete($id){
		$this->db->where('id',$id);
		$this->db->delete('cal');
	}
}
?>