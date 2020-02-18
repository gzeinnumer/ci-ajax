<?php

class Customer extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('customer_model');
    }

    function index(){
        $this->my_page_builder('pages/customer/list','List');
    }

    function add()
    {
        $this->my_page_builder('pages/customer/add','Add');
    }
    
    function ajax_list1(){
        echo $this->customer_model->ajax_list();
    }
}