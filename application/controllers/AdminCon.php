<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincon extends CI_Controller{
	public function __construct(){
		parent :: __construct();
		$this->load->library("form_validation");
		$this->load->model("Admin_model");
		$this->load->helper(array('form', 'url')); 
		$this->load->library('session');
		$this->load->library('upload');
	}
	public function index(){
		if($this->input->post("submit")){
			$this->form_validation->set_rules('username','Username','required|alpha');
			$this->form_validation->set_rules("password",'Password','required|min_length[8]|max_length[8]');
			if($this->form_validation->run() == false){
				$logindata['username'] = $this->input->post("username");
				$logindata['password'] = $this->input->post("password");
				$success = $this->Admin_model->checkUserExists($logindata);
				if($success){
					$this->session->set_userdata("user",$this->input->post("username"));
					$this->session->set_userdata("sess_auth","RDjhg%$43fjhnfj");
					redirect("dashboard");
				}else{
					$this->session->set_flashdata("ErrMsg","Invalid Login Credentials");
					redirect("adminindex");
				}
			}else{
				redirect("adminindex");
			}
		}
		$this->load->view("adminindex");
	}
	public function AdminDashboard(){
		$this->load->view("common");
	}
	public function AdminDashboardMain(){

		$data['url'] = 'dashboard';
		$user = $this->session->userdata("user");
		$data['dbTaskData'] = $this->Admin_model->getTaskCount($user);
		$dbLogData = $this->Admin_model->getFullLogDetails();
		foreach ($dbLogData as $value) {
			if(in_array(date('Y-m-d'),$value)){
				$data['LogUpdatedToday'] = 1;
			}if(!empty($value)){
				$ListOfdate[] = $value['date'];
			}
		}if(!empty($ListOfdate)){
			rsort($ListOfdate);
		}else{
			$ListOfdate=NULL;
		}
		$data['last_log_date'] = $ListOfdate[0];
		if(!empty($this->session->userdata("sess_auth"))){
			$this->load->view("common",$data);
		}else{
			session_unset();
			redirect("adminindex");
		}
	}
	public function DailyLogList(){
		if(!empty($this->input->post("deleteid"))){
			$Logid = $this->input->post("deleteid");
			$logDeleted = $this->Admin_model->DeleteLogList($Logid);
			if(isset($logDeleted)){
				$this->session->set_flashdata("DelSucc" ,'Log Details Deleted Successfully !');
				redirect("dailyLogList");
			}else{
				$this->session->set_flashdata("DelSucc",'Technical Issues!Try Again!');
				redirect("dailyLogList");
			}
		}
		$data['url'] = 'dailyLogList';

		$user = $this->session->userdata("user");
		$data['dbLogData'] = $this->Admin_model->getLogDetails($user);
		if(!empty($this->session->userdata("sess_auth"))){
			$this->load->view("common",$data);
		}else{
			session_unset();
			redirect("adminindex");
		}
	}
	public function AddLog(){
		$data['url'] = 'AddLog';
		if($this->input->post("submit")){
			$this->form_validation->set_rules("date","Date","required");
			$this->form_validation->set_rules("project","Project","required|min_length[5]");
			$this->form_validation->set_rules("dailylog","Daily Log","required|min_length[5]");
			if($this->form_validation->run()== true){
				$data_to_insert['date'] =$this->input->post("date");
				$data_to_insert['project'] = $this->input->post("project");
				$data_to_insert['logdetails'] = $this->input->post("dailylog");
				$data_to_insert['user'] = $this->session->userdata("user");
				$dbLogStored = $this->Admin_model->StoreLogData($data_to_insert);
				if($dbLogStored){
					$this->session->set_flashdata("Succ",'Hey! Your Details Stored Successfully ! ..');
				}else{
					$this->session->set_flashdata("Succ",'OOPS! Some Error Occured..Do it Again !..');
				}
			}else{
				$this->load->view("common",$data);
			}
		}
		$user = $this->session->userdata("user");
		$data['dbLogData'] = $this->Admin_model->getLogDetails($user);
		if(!empty($this->session->userdata("sess_auth"))){
			$this->load->view("common",$data);
		}else{
			session_unset();
			redirect("adminindex");
		}
	}
	public function EditLog(){
		$data['url'] = 'edit-log';
		$data['lid'] = $lid = $this->input->get('id');
		if($this->input->post("submit")){
			$this->form_validation->set_rules("date","Date","required");
			$this->form_validation->set_rules("project","Project","required|min_length[5]");
			$this->form_validation->set_rules("dailylog","Daily Log","required|min_length[5]");
			if($this->form_validation->run()== true){
				$data_to_insert['date'] =$this->input->post("date");
				$data_to_insert['project'] = $this->input->post("project");
				$data_to_insert['logdetails'] = $this->input->post("dailylog");
				$data_to_insert['user'] = $this->session->userdata("user");
				$lid = $this->input->post("id");
				$dbLogStored = $this->Admin_model->UpdateLogData($data_to_insert,$lid);
				if($dbLogStored){
					$this->session->set_flashdata("Succ",'OOI! Your Details Updated Successfully ! ..');
					redirect('dailyLogList');
				}else{
					$this->session->set_flashdata("Succ",'OOPS! Some Error Occured..Do it Again !..');
				}
			}else{
				$this->load->view("common",$data);
			}
		}
		$user = $this->session->userdata("user");
		$data['dbLogData'] = $this->Admin_model->getLogDetails($user,$lid);
		if(!empty($this->session->userdata("sess_auth"))){
			$this->load->view("common",$data);
		}else{
			session_unset();
			redirect("adminindex");
		}
	}
	public function AddTaskMethod(){
		$data['url'] = 'AddTask';
		if($this->input->post("submit")){
			$this->form_validation->set_rules("taskdate","Date","required");
			$this->form_validation->set_rules("task","Task","required|min_length[5]");
			if($this->form_validation->run()==TRUE){
				$task_to_store['date'] = $this->input->post("taskdate");
				$task_to_store['task'] = $this->input->post("task");
				$task_to_store['user'] = $this->session->userdata("user");
				$task_to_store['status'] = 1;
				$dbTaskStored = $this->Admin_model->StoreTaskData($task_to_store);
				if($dbTaskStored){
					$this->session->set_flashdata("Succ",'Well done ! &nbsp; Your Task Assigned Successfully ! ..');
				}else{
					$this->session->set_flashdata("Succ",'OOPS! Some Error Occured..Do it Again !..');
				}
			}else{
				$this->load->view("common",$data);
			}
		}
		if(!empty($this->session->userdata("sess_auth"))){
			$this->load->view("common",$data);
		}else{
			session_unset();
			redirect("adminindex");
		}
	}
	public function EditTaskMethod(){
		$data['url'] = 'edit-task';
		$data['tid'] = $tid = $this->input->get('id');
		if($this->input->post("submit")){
			$this->form_validation->set_rules("date","Date","required");
			$this->form_validation->set_rules("project","Project","required");
			$this->form_validation->set_rules("dailylog","Daily Log","required");
			if($this->form_validation->run()==false){
				$task_to_store['date'] = $this->input->post("taskdate");
				$task_to_store['task'] = $this->input->post("task");
				$task_to_store['user'] = $this->session->userdata("user");
				if(!empty($this->input->post("status")=='on')){
					$task_to_store['status'] = 1;
				}else{
					$task_to_store['status'] = 0;
				}
				$tid = $this->input->post("tid");
				$dbTaskUpdated = $this->Admin_model->UpdateTaskData($tid,$task_to_store);
				if($dbTaskUpdated){
					$this->session->set_flashdata("Succ",'Great ! Your Task Details Updated Successfully ! ..');
					redirect("dailyTaskList");
				}else{
					$this->session->set_flashdata("Succ",'OOPS! Some Error Occured..Do it Again !..');
					redirect("dailyTaskList");
				}
			}else{
				$this->load->view("common",$data);
			}
		}
		$user = $this->session->userdata("user");
		$data['dbTaskData'] = $this->Admin_model->getTaskDetails($user,$tid);
		if(!empty($this->session->userdata("sess_auth"))){
			$this->load->view("common",$data);
		}else{
			session_unset();
			redirect("adminindex");
		}
	}
	public function DailyTaskList(){
		if(!empty($this->input->post("deleteid"))){
			$tid = $this->input->post("deleteid");
			$Taskdeleted = $this->Admin_model->DeleteTask($tid);
			if(isset($Taskdeleted)){
				$this->session->set_flashdata("DelSucc","Task details deleted Successfully !");
				redirect("dailyTaskList");
			}else{
				$this->session->set_flashdata("DelSucc","Technical Error! Try Again!");
				redirect("dailyTaskList");
			}
		}
		$data['url'] = 'dailyTaskList';
		$user = $this->session->userdata("user");
		$data['dbTaskData'] = $this->Admin_model->getTaskDetails($user);
		if(!empty($this->session->userdata("sess_auth"))){
			$this->load->view("common",$data);
		}else{
			session_unset();
			redirect("adminindex");
		}
	}

	public function notfound(){
		$this->load->view("notfound");
	}

	public function logout(){
		session_destroy();
		redirect("adminindex");
	}

}
?>