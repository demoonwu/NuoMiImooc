<?php
/**
 * Created by PhpStorm.
 * User: DemoonWu-Whaley
 * Date: 2017/7/9/0009
 * Time: 7:14
 */

namespace app\admin\validate;

use app\lib\exception\BaseException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function gocheck(){
        $params=Request::instance()->param();
        $result=$this->batch()->check($params);
        if (!$result){
//            TODO:回头把异常处理给写了
            $msg='validate验证没有通过====>'.implode('|',$this->error);
            throw new BaseException(['msg'=>$msg]);
//            notice：仔细考虑了一下，决定还是不封装异常了
//                      因为这个里面用的是网页做的交互，如果封装了反而不好
//                    最终发现不做封装无法区分自定义异常和未知异常，只能封装了
        }else{
            return true;
        }
    }
}