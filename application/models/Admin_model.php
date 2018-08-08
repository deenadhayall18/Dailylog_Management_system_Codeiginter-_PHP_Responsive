<?php 
class Admin_model extends CI_Model{


	public function checkUserExists($logindata){
		$data['username']=$logindata['username'];
		$data['password'] = $logindata['password'];
		$res = $this->db->select("*")->from("tbl_login")->where($data);
		$res = $this->db->get()->result_array();
		return $res;
	}

	public function StoreLogData($data_to_store){
		$res = $this->db->insert("tbl_dailylog",$data_to_store);
		return $res;
	}

	public function UpdateLogData($data_to_update,$lid){
		$this->db->where('lid',$lid);
		$this->db->update("tbl_dailylog",$data_to_update);
		// echo $this->db->last_query(); die;
		return true;
	}

	public function getLogDetails($user,$lid=null){
		if(!empty($lid)){
			$this->db->where("lid",$lid);
		}
		$res = $this->db->select("*")->from("tbl_dailylog")->where('user',$user);
		$res = $this->db->get()->result_array();
		return $res;
	}

	public function getFullLogDetails(){
		$temp = $this->db->get("tbl_dailylog")->result_array();
		return $temp;
	}


	public function StoreTaskData($task_to_store){
		$res = $this->db->insert("tbl_task",$task_to_store);
		return $res;
	}

	public function UpdateTaskData($tid,$task_to_store){
		$res = $this->db->where('tid',$tid);
		$res = $this->db->update("tbl_task",$task_to_store);
		// echo $this->db->last_query(); die;
		return $res;
	}

	public function getTaskDetails($user,$tid=null){
		if(!empty($tid)){
			$this->db->where("tid",$tid);
		}
		$res = $this->db->select("*")->from("tbl_task")->where('user',$user);
		$res = $this->db->get()->result_array();
		// echo $this->db->last_query(); die;
		return $res;
	}

	public function getTaskCount($user){
		$where_arr = array('user'=> $user,'status' =>'1');
		$res = $this->db->select("*")->from("tbl_task")->where($where_arr);
		$res = $this->db->get()->result_array();
		return $res;
	}

	public function DeleteLogList($Logid){
		$this->db->where('lid',$Logid);
		$this->db->delete("tbl_dailylog");
		return true;
	}

	public function DeleteTask($tid){
		$this->db->where('tid',$tid);
		$this->db->delete("tbl_task");
		return true;
	}

}
?>