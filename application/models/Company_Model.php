<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Company_Model
 *
 * @author yongquizheng
 */
class Company_Model extends CI_Model {
    
    protected $company_table_var ='companies';
    protected $tag_property_var='Tags';
    protected $sponsored_property_var='Sponsored';
    public function __construct(){
        parent::__construct();
    }
    
    public function get_all_companies(){
       $query= $this->db->get($this->company_table_var);
       if($query){
           return $query->result();
       }
       return NULL;
       
    }
    
    public function get_company_by_service($serivce,$limit=0){
        $this->db->like($this->tag_property_var,$serivce);
        $this->db->order_by($this->sponsored_property_var,'DESC');
        if($limit!=0){
            $this->db->limit($limit);
        }
        $query = $this->db->get($this->company_table_var);
        if(!empty($query)){
            return $query->result();
        }
    }
        
    //put your code here
}
