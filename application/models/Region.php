<?php 
class Region extends CI_Model {
		public function add(){
			$Data = array();
        $Data['region_name'] = $this->post('region_name');
        $Data['short_desc'] = $this->post('short_desc');
        $Data['status'] = $this->post('status');
        if(!empty($Data['region_name'] && !empty($Data['short_desc']) && !empty($Data['status']))
        {
        	$this->db->insert('region',$Data);
           $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
        }
        else{
            $this->response("Required fields cannot be empty", REST_Controller::HTTP_BAD_REQUEST);
           }
        }
}