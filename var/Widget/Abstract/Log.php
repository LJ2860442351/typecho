<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

/**
 * 用户抽象组件
 *
 * @category typecho
 * @package Widget
 * @copyright Copyright (c) 2008 Typecho team (http://www.typecho.org)
 * @license GNU General Public License 2.0
 * @version $Id$
 */

/**
 * 用户抽象类
 *
 * @category typecho
 * @package Widget
 * @copyright Copyright (c) 2008 Typecho team (http://www.typecho.org)
 * @license GNU General Public License 2.0
 */
class Widget_Abstract_Log extends Widget_Abstract
{
    /**
     * ___options
     *
     * @access protected
     * @return Typecho_Config
     */
    protected function ___options()
    {
        $rows = $this->db->fetchAll($this->db->select()
                ->from('table.options')->where('id = ?', $this->uid));
        $options = array();
        foreach ($rows as $row) {
            $options[$row['name']] = $row['value'];
        }

        return new Typecho_Config($options);
    }

    /**
     * 获取页面偏移
     *
     * @access protected
     * @param string $column 字段名
     * @param integer $offset 偏移值
     * @param string $group 用户组
     * @param integer $pageSize 分页值
     * @return integer
     */
    protected function getPageOffset($column, $offset, $group = null, $pageSize = 20)
    {
        $select = $this->db->select(array('COUNT(uid)' => 'num'))->from('table.log')
            ->where("table.log.{$column} > {$offset}");

        if (!empty($group)) {
            $select->where('table.users.group = ?', $group);
        }

        $count = $this->db->fetchObject($select)->num + 1;
        return ceil($count / $pageSize);
    }

    /**
     * 通用过滤器
     *
     * @access public
     * @param array $value 需要过滤的行数据
     * @return array
     */
    public function filter(array $value)
    {
        //生成静态链接
        $routeExists = (null != Typecho_Router::get('author'));

        $value['permalink'] = $routeExists ? Typecho_Router::url('author', $value, $this->options->index) : '#';

        /** 生成聚合链接 */
        /** RSS 2.0 */
        $value['feedUrl'] = $routeExists ? Typecho_Router::url('author', $value, $this->options->feedUrl) : '#';

        /** RSS 1.0 */
        $value['feedRssUrl'] = $routeExists ? Typecho_Router::url('author', $value, $this->options->feedRssUrl) : '#';

        /** ATOM 1.0 */
        $value['feedAtomUrl'] = $routeExists ? Typecho_Router::url('author', $value, $this->options->feedAtomUrl) : '#';

        $value = $this->pluginHandle(__CLASS__)->filter($value, $this);
        return $value;
    }

    /**
     * 将每行的值压入堆栈
     *
     * @access public
     * @param array $value 每行的值
     * @return array
     */
    public function push(array $value)
    {
        $value = $this->filter($value);
        return parent::push($value);
    }

    /**
     * 查询方法
     *
     * @access public
     * @return Typecho_Db_Query
     */
    public function select()
    {
        return $this->db->select()->from('table.log');
    }

    /**
     * 获得所有记录数
     *
     * @access public
     * @param Typecho_Db_Query $condition 查询对象
     * @return integer
     */
    public function size(Typecho_Db_Query $condition)
    {
        return $this->db->fetchObject($condition->select(array('COUNT(id)' => 'num'))->from('table.log'))->num;
    }

    /**
     * 增加记录方法
     *
     * @access public
     * @param array $rows 字段对应值
     * @return integer
     */
    public function insert(array $rows)
    {
        return $this->db->query($this->db->insert('table.log')->rows($rows));
    }

    /**
     * 更新记录方法
     *
     * @access public
     * @param array $rows 字段对应值
     * @param Typecho_Db_Query $condition 查询对象
     * @return integer
     */
    public function update(array $rows, Typecho_Db_Query $condition)
    {
        return $this->db->query($condition->update('table.log')->rows($rows));
    }

    /**
     * 删除记录方法
     *
     * @access public
     * @param Typecho_Db_Query $condition 查询对象
     * @return integer
     */
    public function delete(Typecho_Db_Query $condition)
    {
        return $this->db->query($condition->delete('table.log'));
    }

    /**
     * 调用gravatar输出用户头像
     *
     * @access public
     * @param integer $size 头像尺寸
     * @param string $rating 头像评级
     * @param string $default 默认输出头像
     * @param string $class 默认css class
     * @return void
     */
    public function gravatar($size = 40, $rating = 'X', $default = null, $class = null)
    {
        $url = Typecho_Common::gravatarUrl($this->mail, $size, $rating, $default, $this->request->isSecure());
        echo '<img' . (empty($class) ? '' : ' class="' . $class . '"') . ' src="' . $url . '" alt="' .
        $this->screenName . '" width="' . $size . '" height="' . $size . '" />';
    }



}
