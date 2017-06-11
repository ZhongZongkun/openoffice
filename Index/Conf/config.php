<?php
return array(
	//'配置项'=>'配置值'
    //'URL_MODEL'=>2,//隐藏index.php
     'URL_HTML_SUFFIX'=>'.shtml',//修改页面后缀

	//开启应用分组
    'APP_GROUP_LIST' =>'Index,Admin',
    'DEFAULT_GROUP'=> 'Index',   //默认分组

    //数据库配置
	'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => '127.0.0.1', // 服务器地址
    'DB_NAME'               => 'openoffice',          // 数据库名
    'DB_USER'               => 'office',      // 用户名
    'DB_PWD'                => 'office',          // 密码
    'DB_PORT'               => '3306',        // 端口
    'DB_PREFIX'             => 'of_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    => false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       => true,        // 启用字段缓存
    'DB_CHARSET'            => 'utf8',      // 数据库编码默认采用utf8

    //点语法默认解析
    'TMPL_VAR_IDENTIFY'  =>'array',
    //模版路径
    'TMPL_FILE_DEPR'     =>'_',
);
?>