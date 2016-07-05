<?php
namespace app\index\controller;

class Index
{
    public function index()

    {
        
        return '学习ThinkPHP';

    }

    public function hellos()
    {
        return 'hello';
    }

    public function hello($name = 'World')
    {
        return 'Hello,' . $name . '！';
    }
    public function say(){
        return 'speak php';
    }
}
