<?php
namespace app\index\controller;
use \think\Request;
class Index
{
    public function index(){

        $request = Request::instance();
        echo "当前模块名称是" . $request->module()."</br>";
        echo "当前控制器名称是" . $request->controller()."</br>";
        echo "当前操作名称是" . $request->action();
        dump($request->route());

    }
    public function demo(){
        return   'ipssss';
    }

}
