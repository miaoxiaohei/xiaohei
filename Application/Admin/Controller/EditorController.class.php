<?php
namespace Admin\Controller;
use Think\Controller;
class EditorController extends CommonController {
    public function index(){
        $this->display();
   }

    public function addNews(){
        $this->display();
    }

    public function ueditor(){
        $data = new \Org\Util\Ueditor();
        echo $data->output();
    }
}