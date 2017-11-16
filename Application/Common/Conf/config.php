<?php
return array(
	//'配置项'=>'配置值'
	'URL_CASE_INSENSITIVE' =>true,      //开启不区分大小写
  // 'SHOW_PAGE_TRACE' =>true,
	'URL_MODEL' => '2',
	'URL_HTML_SUFFIX'=>'',	//伪静态后缀
	'COOKIE_PATH' => '/',				//设置cookie目录

	//数据库配置
	'DB_TYPE' => 'mysql' ,           //设置数据库类型
	'DB_HOST' => '192.168.88.200' ,       //设置数据库主机
	'DB_NAME' => 'outbound' ,        //设置数据库名
	'DB_USER' => 'janpun' ,            //设置数据库账号
	'DB_PWD' => '123456' ,             //设置数据库密码
	'DB_PORT' => '3306' ,            //设置数据库端口号
	'DB_PREFIX' => '' ,             //设置数据库表前缀

	'DB_CONFIG1' => array(
    'db_type'  => 'mysql',
    'db_user'  => 'janpun',
    'db_pwd'   => '123456',
    'db_host'  => '192.168.88.200',
    'db_port'  => '3306',
    'db_name'  => 'asterisk',
		'db_prefix' => '',
	),

	'DB_CONFIG2' => array(
    'db_type'  => 'mysql',
    'db_user'  => 'janpun',
    'db_pwd'   => '123456',
    'db_host'  => '192.168.88.200',
    'db_port'  => '3306',
    'db_name'  => 'asteriskcdrdb',
		'db_prefix' => '',
	),

	//模块
	'MODULE_ALLOW_LIST'    =>    array('Home'),
  'DEFAULT_MODULE'       =>    'Home',
);
