<?php
/**
 * Created by PhpStorm.
 * User: DemoonWu-Whaley
 * Date: 2017/7/9/0009
 * Time: 14:26
 * 这是异常处理的基类
 * 没有启用，正在想一些服务器内部的错误是否需要外抛出去
 * @param  array
 * @return exception
 */

namespace app\lib\exception;
use think\Exception;

class BaseException extends Exception{

    public $code=400;
    // 错误的具体信息
    public $msg="参数错误";
    // 自定义的错误码
    public $errorCode=10000;

    public function __construct($params=[]){
        //如果没有参数传入，那么就不调用构造方法
        if (!is_array($params)) {
            throw new Exception('异常的构造参数的必须为数组，请检查异常的类的定义');
        }
        if (array_key_exists('code', $params)) {
            $this->code=$params['code'];
        }
        if (array_key_exists('msg', $params)) {
            $this->msg=$params['msg'];
        }
        if (array_key_exists('errorCode', $params)) {
            $this->errorCode=$params['errorCode'];
        }

    }
}