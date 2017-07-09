<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\validate\Category as CategoryValidate;
use app\admin\model\Category as CategoryModel;


class Category extends Controller
{
    public function index()
    {
        $res = CategoryModel::all();
        return json($res);
        exit();
        return $this->fetch('', ['categorys' => $res]);
    }
//    这个是页面里面的增加模块
    public function add(){
        return $this->fetch();
    }
    public function save(){
//        验证category的数据是否合法
//        这里使用了一种更加优雅的方式实现
        (new CategoryValidate())->scene('add')->gocheck();
        $data=Request::instance()->param();
//        这里自定义了一个add方法
        $res=CategoryModel::add($data);
        if ($res!=null){
            return $this->success('增加成功');
        }else {
            return $this->error('增加失败');
        }
    }
    public function edit(){
//        $res=CategoryModel::query('SELECT USER()');
        //$data=Request::instance()->param();
        //$res=CategoryModel::find(1);
       // return json($data);
        return $this->fetch();
    }
}