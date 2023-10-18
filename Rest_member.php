<?php
defined('BASEPATH') OR exit('No direct access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\libraries\REST_Controller;

class Rest_member extends REST_Controller{

    function __construct($config='rest'){
        parent::__construct($config);
    }

    function index_get(){
        $id=$this->get('id');
        if($id==''){
            $member=$this->db->get('member')->result();
        }else{
            $this->db->where('id',$id);
            $member=$this->db->get('member')->result();
        }

        $this->response($member,404);
    }
}