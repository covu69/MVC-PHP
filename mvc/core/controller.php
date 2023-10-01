<?php
class controller{
    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($folder,$view, $data=[]){
        require_once "./mvc/views/".$folder."/".$view.".php";
    }
}
?>