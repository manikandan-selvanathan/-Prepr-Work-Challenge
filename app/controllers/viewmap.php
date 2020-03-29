<?php

class ViewMap extends Controller {

    public function index($id=null) 
    {	
     	$lab_model=$this->model("Lab");
        $searchList=$lab_model->getLab($id);  
        $this->view('lab/map', ['labs' =>  json_encode($searchList)]);
    }

}

?>