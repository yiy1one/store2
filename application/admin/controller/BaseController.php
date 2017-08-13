<?php
/**
 * Created by PhpStorm.
 * User: yiyi
 * Date: 2017/8/13
 * Time: 9:24
 */

namespace app\admin\controller;


use think\Controller;
use think\Request;
use data\service\AdminUser as User;

class BaseController extends Controller
{
    protected $user = null; //当前用户

    protected $website = null; //当前网站

    protected $uid;

    protected $instance_id;

    protected $instance_name;

    protected $user_name;

    protected $user_headimg;

    protected $module = null;

    protected $controller = null;

    protected $action = null;

    protected $module_info = null;

    protected $rootid = null;

    protected $moduleid = null;

    protected $style = null;

    public function __construct()
    {
        parent::__construct();
        $this->user = new User();
    }

}