<?php
/**
 * Created by PhpStorm.
 * User: DemoonWu-Whaley
 * Date: 2017/7/9/0009
 * Time: 16:43
 */

namespace app\admin\model;


use think\Model;

class Category extends Model
{
    public static function add($data){
        $data['status']=1;
        $data['create_time']=time();
//        出于orm的编程思想，这里我决定使用create静态方法
        return self::create($data);
    }
}