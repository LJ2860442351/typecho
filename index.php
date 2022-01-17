<?php
/**
 * Typecho Blog Platform
 *
 * @copyright  Copyright (c) 2008 Typecho team (http://www.typecho.org)
 * @license    GNU General Public License 2.0
 * @version    $Id: index.php 1153 2009-07-02 10:53:22Z magike.net $
 */
include_once "common.php";

/** 载入配置支持 */
if (!defined('__TYPECHO_ROOT_DIR__') && !@include_once 'config.inc.php') {
    file_exists('./install.php') ? header('Location: install.php') : print('Missing Config File');
    exit;
}

$ip = get_client_ip();
//插入访问的日志
$db->query($db->insert('table.log')->rows(
    array(
        'create_time'  => time(),
        'create_ip'    => get_client_ip(),
        'browser'      => get_browsers(),
        'language'     => getLang(),
        'agent'        => $_SERVER['HTTP_USER_AGENT'],
        'ip_location'  => get_ip_location($ip),
        'query_string' => $_SERVER['QUERY_STRING'],
        'url_adress'   => $_SERVER['SCRIPT_NAME'],
        'url'          => $_SERVER['SCRIPT_FILENAME'],
    )
));

/** 初始化组件 */
Typecho_Widget::widget('Widget_Init');

/** 注册一个初始化插件 */
Typecho_Plugin::factory('index.php')->begin();

/** 开始路由分发 */
Typecho_Router::dispatch();

/** 注册一个结束插件 */
Typecho_Plugin::factory('index.php')->end();
