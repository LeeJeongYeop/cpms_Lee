<?
class Calendar extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('cpms/calModel');
		
	}
	public function calInsert(){
		$id=$this->calModel->addId();
		
			$id=($id[0]->id)+1;
		
		echo $id;
		$title=$this->input->post('title');
		$start=$this->input->post('start');
		$end=$this->input->post('end');
		$this->calModel->calInsert($id,$title,$start,$end);
	}
	public function calView(){
		$result=$this->calModel->calView();
		for($i=0;$i<count($result);$i++){
			echo $result[$i]->id."<br>";
			echo $result[$i]->title."<br>";
			echo $result[$i]->start."<br>";
			echo $result[$i]->end."<br>";
		}
	}
	public function calUpdate(){
		$id=$this->input->post('id');
		$start=$this->input->post('start');
		$end=$this->input->post('end');

		$this->calModel->calUpdate($id,$start,$end);
	}
	public function calDelete(){
		$id=$this->input->post('id');
		$this->calModel->calDelete($id);

	}

}
?>