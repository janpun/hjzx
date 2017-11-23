<?php
// 测试联通性
function ping($text){
  try {
  $client = new SoapClient('http://192.168.1.200/uncall_lib/index.php?wsdl');
    $return = $client->UncallWorld($text);
    $json = xml_to_json($return);
    return $json;
  } catch (SOAPFault $e) {
    print_r('Exception:'.$e);
  }
}

// 拨打电话
function on_click_call($exten, $tel, $action_id=""){
  try {
  $client = new SoapClient('http://192.168.1.200/uncall_lib/index.php?wsdl');
    $return = $client->OnClickCall($exten, $tel, $action_id);
    $json = xml_to_json($return);
    return $json;
  } catch (SOAPFault $e) {
    print_r('Exception:'.$e);
  }
}

// 拨打电话
function set_buys($agent){
  try {
  $client = new SoapClient('http://192.168.1.200/uncall_lib/index.php?wsdl');
    $return = $client->setBuys($agent);
    $json = xml_to_json($return);
    return $json;
  } catch (SOAPFault $e) {
    print_r('Exception:'.$e);
  }
}

// 拨打电话
function set_idle($agent){
  try {
  $client = new SoapClient('http://192.168.1.200/uncall_lib/index.php?wsdl');
    $return = $client->setIdle($agent);
    $json = xml_to_json($return);
    return $json;
  } catch (SOAPFault $e) {
    print_r('Exception:'.$e);
  }
}

// XML转json
function xml_to_json($source) {
  if(is_file($source)){
    $xml_array=simplexml_load_file($source);
  }else{
    $xml_array=simplexml_load_string($source);
  }
  $json = json_encode($xml_array);
  return $json;
}
