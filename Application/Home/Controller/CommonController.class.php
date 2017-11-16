<?php
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller{
  protected function _initialize(){
    header('Content-type: application/json');
    header("Access-Control-Allow-Origin: *");
    $token = I('get.token');
    $time1 = strtotime('today');
    $time2 = date('Y-m-d');
    if(md5($time1.$time2) == $token){

    }else{
      $return['err_msg'] = "token不正确";
      echo json_encode($return);
      exit();
    }
  }
}
