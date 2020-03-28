<?php

class Labs extends Controller
{
    public function index($search=null) 
    {	
        $value=$search==null?"":$search;
		$this->view('lab/index',['search' =>$value ]);
    }

    public function all() 
    {	
        $lab_model=$this->model("Lab");
        $list=$lab_model->getAllLabs();
        header('Content-type: application/json');
        echo json_encode($list);
    }
    
    public function admin() 
    {	
        $lab_model=$this->model("Lab");
        $list=$lab_model->getAllLabs();
		$this->view('lab/admin', ['labs' =>  json_encode($list)]);
    }



    public function search($searchQuery) {	
        $lab_model=$this->model("Lab");
        $searchList=$lab_model->searchLab($searchQuery); 
        header('Content-type: application/json');
        echo json_encode($searchList);
    }


}

?>