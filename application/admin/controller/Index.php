<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function welcome() {
         var_dump(\Map::getAddressByIp());
        return '欢迎来到o2o商城平台!';
    }


}
