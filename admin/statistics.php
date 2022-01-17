<?php
include 'common.php';
include 'header.php';
include 'menu.php';

?>
<div class="main">
    <div class="body container">
        <?php include 'page-title.php'; ?>
        <div class="row typecho-page-main" role="main">
            <div class="col-mb-12 typecho-list">
                <div class="typecho-list-operate clearfix">
                    <form method="get">
                        <div class="operate">
                            <label><i class="sr-only"><?php _e('全选'); ?></i><input type="checkbox" class="typecho-table-select-all" /></label>
                            <div class="btn-group btn-drop">
                            <button class="btn dropdown-toggle btn-s" type="button"><i class="sr-only"><?php _e('操作'); ?></i><?php _e('选中项'); ?> <i class="i-caret-down"></i></button>
                            <ul class="dropdown-menu">
                                <li><a lang="<?php _e('你确认要删除这些记录吗?'); ?>" href="<?php $security->adminUrl('/deleteRecod.php'); ?>"><?php _e('删除'); ?></a></li>
                            </ul>
                            </div>  
                        </div>
                        <div class="search" role="search">
                            <?php if ('' != $request->keywords): ?>
                            <a href="<?php $options->adminUrl('manage-users.php'); ?>"><?php _e('&laquo; 取消筛选'); ?></a>
                            <?php endif; ?>
                            <input type="text" class="text-s" placeholder="<?php _e('请输入关键字'); ?>" value="<?php echo htmlspecialchars($request->keywords); ?>" name="keywords" />
                            <button type="submit" class="btn btn-s"><?php _e('筛选'); ?></button>
                        </div>
                    </form>
                </div><!-- end .typecho-list-operate -->

                <form method="post" name="manage_users" class="operate-form">
                <div class="typecho-table-wrap">
                    <table class="typecho-list-table">
                        <colgroup>
                            <col width="20"/>
                            <col width="5%"/>
                            <col width="20%"/>
                            <col width="15%"/>
                            <col width="10%"/>
                            <col width="10%"/>
                            <col width="15%"/>
                            <col width="15%"/>
                            <col width="10%"/>
                        </colgroup>
                        <thead>
                            <tr>
                                <th> </th>
                                <th> </th>
                                <th><?php _e('客户端'); ?></th>
                                <th><?php _e('时间'); ?></th>
                                <th><?php _e('语言'); ?></th>
                                <th><?php _e('平台'); ?></th>
                                <th><?php _e('IP'); ?></th>
                                <th><?php _e('IP归属'); ?></th>
                                <th><?php _e('url'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php Typecho_Widget::widget('Widget_Users_Entery')->to($users);
                             ?>
                            <?php while($users->next()): ?>
                            <tr id="user-<?php $users->uid(); ?>">
                                <td><input type="checkbox" value="<?php $users->id(); ?>" name="id[]"/></td>

                                <td><?php if($users->id): ?>
                                    <?php $users->id(); ?><?php else: _e('暂无'); endif; ?>
                                </td>

                                <td><?php if($users->agent): ?>
                                    <?php $users->agent(); ?><?php else: _e('暂无'); endif; ?>
                                </td>

                                <td><?php if($users->create_time): ?>
                                    <?php $modifyDate = new Typecho_Date($users->create_time); ?>
                                    <?php echo $modifyDate->format('Y-m-d H:i:s'); ?>
                                    <?php else: _e('暂无'); endif; ?>
                                </td>   
                               
                                <td><?php if($users->language): ?>
                                    <?php $users->language(); ?><?php else: _e('暂无'); endif; ?>
                                </td>

                                <td><?php if($users->browser): ?>
                                    <?php $users->browser(); ?><?php else: _e('暂无'); endif; ?>
                                </td>

                                <td><?php if($users->create_ip): ?>
                                    <?php $users->create_ip(); ?><?php else: _e('暂无'); endif; ?>
                                </td>

                                <td><?php if($users->ip_location): ?>
                                    <?php $users->ip_location(); ?><?php else: _e('暂无'); endif; ?>
                                </td>

                                <td><?php if($users->url_adress): ?>
                                    <?php $users->url_adress(); ?><?php else: _e('暂无'); endif; ?>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table><!-- end .typecho-list-table -->
                </div><!-- end .typecho-table-wrap -->
                </form><!-- end .operate-form -->

                <div class="typecho-list-operate clearfix">
                    <form method="get">
                        <div class="operate">
                            <label><i class="sr-only"><?php _e('全选'); ?></i><input type="checkbox" class="typecho-table-select-all" /></label>
                            <div class="btn-group btn-drop">
                            <button class="btn dropdown-toggle btn-s" type="button"><i class="sr-only"><?php _e('操作'); ?></i><?php _e('选中项'); ?> <i class="i-caret-down"></i></button>
                            <ul class="dropdown-menu">
                                <li><a lang="<?php _e('你确认要删除这些记录吗?'); ?>" href="<?php $security->adminUrl('/deleteRecod.php'); ?>"><?php _e('删除'); ?></a></li>
                            </ul>
                            <span>总共<a><?php $users->postsNum(); ?></a>条</span>
                            </div>  
                        </div>
                        <?php if($users->have()): ?>
                        <ul class="typecho-pager">
                            <?php $users->pageNav(); ?>
                        </ul>
                        <?php endif; ?>
                    </form>
                </div><!-- end .typecho-list-operate -->
            </div><!-- end .typecho-list -->
        </div><!-- end .typecho-page-main -->
    </div>
</div>

<?php
include 'copyright.php';
include 'common-js.php';
include 'table-js.php';
include 'footer.php';
?>
