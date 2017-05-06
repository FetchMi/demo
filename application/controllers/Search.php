<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Search
 *
 * @author yongquizheng
 */
class Search extends CI_Controller{
    public function index(){
      $this->load->model('company_model','model');
      $service = filter_input(INPUT_GET, 'service');
      //TODO: handle limit case
      if(!empty($service)){
        $companies = $this->model->get_company_by_service($service);
        if($companies!==NULL){
            $data['companies']=$companies;
            $this->load->view('search',$data);
        }
      }
    }
}
