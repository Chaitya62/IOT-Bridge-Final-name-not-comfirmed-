<?php 

class device extends CI_Controller{
	public function add_device(){
	$this->load->model('device_model');
	$device_name = $this->input->post('device_name');
	$device_id = $this->input->post('device_id');
	$about_device = $this->input->post('about_device');
	$key = $this->session->userdata('id'); //later stages will take users key
	$data = array(
			'device_name' => $device_name,
			'device_id'  =>  $device_id,
			'about_device'      =>  $about_device,
			'key' => $key
			);
	$this->device_model->add_device($data);
	redirect('user/device');

	}
	public function edit_device($id){
	$this->load->model('device_model');
	$device_name = $this->input->post('device_name');
	$device_id = $this->input->post('device_id');
	$about_device = $this->input->post('about_device');
	$key = $this->session->userdata('id');; //later stages will take users key
	$data = array(
			'device_name' => $device_name,
			'device_id'  =>  $device_id,
			'about_device'      =>  $about_device,
			'key' => $key
			);
	$this->device_model->edit_device($id,$data);
	redirect('user/device');

	}

	public function delete_device($id){
		$this->load->model('device_model');
		$this->device_model->delete_device($id);
		redirect('user/device');
	}
	
	public function add_parameters($device_id){
		$parameters = $this->input->post("parameter_name[]");
		$this->load->model('device_model');
		foreach ($parameters as $parameter) {
			$data = [ 
				'parameter_name' => $parameter,
				'device_id' => $device_id
			];
			$this->device_model->add_parameter($data);
			
		}
		redirect("user/device");
	}
}


 ?>