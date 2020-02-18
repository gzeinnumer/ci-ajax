<?php

class Person_Model extends My_Model
{
    function __construct(){
        parent::__construct();
        $this->my_table='tbperson';
        $this->my_column_order=array( 'id', 'name', 'salary', 'age');
        $this->my_column_search=array('name', 'salary', 'age');
        $this->my_order=array('id'=>'asc');
    }

    function fetch_data(){
        $data=array();
        $list=$this->my_result_builder();
        foreach($list as $row){
            $subdata=array();
            $subdata[]=$row->id;
            $subdata[]=$row->name;
            $subdata[]=$row->salary;
            $subdata[]=$row->age;
            $subdata[]='<a href="#" onclick="alert(\''.$row->id.'\')" class="btn btn-primary btn-xs">Edit</a>
                        <a href="#" onclick="alert(\''.$row->id.'\')" class="btn btn-danger btn-xs">Delete</a>';
            $data[]=$subdata;
        }
        return $this->my_json_builder($data);
    }
}