<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * Typecho Blog Platform
 *
 * @copyright  Copyright (c) 2008 Typecho team (http://www.typecho.org)
 * @license    GNU General Public License 2.0
 * @version    $Id$
 */

/**
 * 后台成员列表组件
 *
 * @author qining
 * @category typecho
 * @package Widget
 * @copyright Copyright (c) 2008 Typecho team (http://www.typecho.org)
 * @license GNU General Public License 2.0
 */
class Widget_Users_Entery extends Widget_Abstract_Log
{
    /**
     * 分页计算对象
     *
     * @access private
     * @var Typecho_Db_Query
     */
    private $_countSql;

    /**
     * 所有文章个数
     *
     * @access private
     * @var integer
     */
    private $_total = false;

    /**
     * 当前页
     *
     * @access private
     * @var integer
     */
    private $_currentPage;

    /**
     * 仅仅输出域名和路径
     *
     * @access protected
     * @return string
     */
    protected function ___domainPath()
    {
        $parts = parse_url($this->url);
        return $parts['host'] . (isset($parts['path']) ? $parts['path'] : NULL);
    }

    /**
     * 发布文章数
     *
     * @access protected
     * @return integer
     */
    protected function ___postsNum()
    {
        return $this->db->fetchObject($this->db->select(array('COUNT(id)' => 'num'))
                    ->from('table.log'))->num;
    }

    /**
     * 执行函数
     *
     * @access public
     * @return void
     */
    public function execute()
    {
        $this->parameter->setDefault('pageSize=20');
        $select = $this->select();
        $this->_currentPage = $this->request->get('page', 1);

        /** 过滤标题 */
        if (NULL != ($keywords = $this->request->keywords)) {
            $select->where('name LIKE ? OR screenName LIKE ?',
            '%' . Typecho_Common::filterSearchQuery($keywords) . '%',
            '%' . Typecho_Common::filterSearchQuery($keywords) . '%');
        }

        $this->_countSql = clone $select;

        $select->order('table.log.id', Typecho_Db::SORT_DESC)
        ->page($this->_currentPage, $this->parameter->pageSize);

        $this->db->fetchAll($select, array($this, 'push'));
    }

    /**
     * 输出分页
     *
     * @access public
     * @return void
     */
    public function pageNav()
    {
        $query = $this->request->makeUriByRequest('page={page}');;

        /** 使用盒状分页 */
        $nav = new Typecho_Widget_Helper_PageNavigator_Box(false === $this->_total ? $this->_total = $this->size($this->_countSql) : $this->_total,
        $this->_currentPage, $this->parameter->pageSize, $query);
        $nav->render('&laquo;', '&raquo;');
    }

        /**
     * 删除记录
     *
     * @access public
     * @return void
     */
    public function deleteRecod()
    {
        $id = $this->request->filter('int')->getArray('id');

        $deleteCount = 0;
        foreach ($id as $value) {

            if ($this->delete($this->db->sql()->where('id = ?', $value))) {
                $deleteCount ++;
            }
        }

        /** 提示信息 */
        $this->widget('Widget_Notice')->set($deleteCount > 0 ? _t('记录已经删除') : _t('没有记录被删除'),
        $deleteCount > 0 ? 'success' : 'notice');

        /** 转向原页 */
        $this->response->redirect(Typecho_Common::url('statistics.php', $this->options->adminUrl));
    }

     /**
     * 入口函数
     *
     * @access public
     * @return void
     */
    public function action()
    {
        $this->user->pass('administrator');
        $this->security->protect();
        $this->on($this->request->is('do=delete'))->deleteRecod();
        $this->response->redirect($this->options->adminUrl);
    }
}
