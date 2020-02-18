<?php

class Person extends My_Controller
{
    function index(){
        $this->my_page_builder('person');
    }
    function fetch(){
        $this->load->model('person_model');
        echo $this->person_model->fetch_data();
    }
}