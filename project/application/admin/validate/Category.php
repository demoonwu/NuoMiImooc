<?php
/**
 * Created by PhpStorm.
 * User: DemoonWu-Whaley
 * Date: 2017/7/8/0008
 * Time: 17:20
 * @return
 * @param
 * 这是一个验证层，写给category用的
 */

namespace app\admin\validate;
class Category extends BaseValidate
{
    protected $rule = [
        ['id', 'number'],
        ['name' , 'require|max:10','name是必填字段|name的最大长度为10'],
        ['parent_id', 'number'],
        ['listorder', 'number'],
        ['status', 'number|in:-1,0,1']
    ];

    protected $scene=[
        'add'=>['name','parent_id']
    ];

}