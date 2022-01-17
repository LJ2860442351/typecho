<?php
include 'common.php';
include 'header.php';
include 'menu.php';

/**
 * 删除记录
 *
 */
$entry = Typecho_Widget::widget('Widget_Users_Entery');
$entry->deleteRecod();

?>
