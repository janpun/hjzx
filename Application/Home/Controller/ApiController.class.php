<?php
namespace Home\Controller;
use Think\Controller;
class ApiController extends CommonController {
  //测试是否能ping通
  public function ping(){
    echo ping("ping");
  }

  //拨打电话
  public function call(){
    $exten = I('get.exten');
    $tel = I('get.tel');
    echo on_click_call($exten, $tel);
  }

  //设置忙
  public function set_busy(){
    $exten = I('get.exten');
    echo set_buys($exten);
  }

  //设置闲
  public function set_idle(){
    $exten = I('get.exten');
    echo set_idle($exten);
  }

  //获取分机表
  public function users(){
    $user = M("Users","",C('DB_CONFIG1')) -> select();
    echo json_encode($user);
  }

  //获取分机表
  public function lists(){
    $date = I('get.date');
    $exten = I('get.exten');
    $table = "Cdro_".$date;
    $map['clid|src|dst'] = $exten;
    $user = M($table,"",C('DB_CONFIG2')) -> where($map) -> select();
    echo json_encode($user);
  }
}
