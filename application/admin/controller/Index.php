<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016-08-25
 * Time: 10:01
 */

namespace app\admin\controller;
use think\Controller;
use think\Request;


class Index extends Controller
{
    public function index(){
        $request = Request::instance();
        echo "当前模块名称是" . $request->module()."</br>";
        echo "当前控制器名称是" . $request->controller()."</br>";
        echo "当前操作名称是" . $request->action();
        dump($request->route());
    }

}