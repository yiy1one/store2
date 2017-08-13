<?php
/**
 * Created by PhpStorm.
 * User: yiyi
 * Date: 2017/8/13
 * Time: 9:28
 */

namespace data\service;


use think\Session;

class AdminUser extends User
{
    protected $uid;
    protected $instance_id;  //店铺id
    protected $is_admin;
    protected $module_id_array;
    protected $instance_name;

    public function __construct()
    {
        $this->init();
    }

    private function init(){
        $this->uid = Session::get('uid');
        $this->instance_id = 0;
        $this->is_admin = Session::get('is_admin');
        $this->module_id_array = Session::get('module_id_array');
        $this->instance_name = Session::get('instance_name');
        $this->is_member = Session::get('is_member');
        $this->is_system = Session::get('is_system');
    }

    /**
     * 把返回的数据集转换成Tree
     * @param array $list 要转换的数据集
     * @param string $pid parent标记字段
     * @param string $level level标记字段
     * @return array
     */
    public function listToTree($list,$pk='id',$pid='pid',$child='_child',$root=0){

    }
}