<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="comments">
  <!-- Default -->
  <?php function threadedComments($comments, $options) {
    $commentClass = '';
      if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
          $commentClass .= ' comment-by-author';
        } else {
          $commentClass .= ' comment-by-user';
      }
    }
    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
  ?>
  <article class="comment">
    <li itemscope itemtype="http://schema.org/UserComments" id="comment-<?php $comments->theId(); ?>"  class="comment-body<?php
      if ($comments->levels > 0) {
        echo ' comment-child';
        $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
      } else {
        echo ' comment-parent';
      }
      $comments->alt(' comment-odd', ' comment-even');
      echo $commentClass;
    ?> comments">
    <div class="comment-author" itemprop="creator" itemscope itemtype="http://schema.org/Person">
      <span itemprop="image"><?php $comments->gravatar('100', ''); ?></span>
      <div class="comment-meta" style="font-size: 12px;">
        <cite class="fn" itemprop="name"><?php $comments->author(); ?></cite><br/>
        <span itemprop="commentTime"><?php $comments->dateWord(); ?></span>
      </div>
    </div>
    <div class="comment-content" itemprop="commentText">
      <?php $comments->content(); ?>
      <p class="comment-reply"><?php $comments->reply(); ?></p>
    </div>
    <?php if ($comments->children) { ?>
      <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
      </div>
    <?php } ?>
    </li>
  </article>
  <?php } ?>

  <?php $this->comments()->to($comments); ?>

  <?php if($this->allow('comment')): ?>

      <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="comments-content">
          <!-- Comment Form -->
          <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" class="comment-form" role="form">
            <h5 id="response"><?php _e('?????????'); ?></h5>
            <?php if($this->user->hasLogin()): ?>
            <p><?php _e('?????????'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>???<?php _e('?????????'); ?><a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('??????'); ?></a></p>
            <?php else: ?>
              <input type="text" name="author" maxlength="12" id="author" class="form-control input-control" placeholder="<?php _e('??????'); ?>" value="<?php $this->remember('author'); ?>" required>
              <input type="email" name="mail" id="mail" class="form-control input-control" placeholder="<?php _e('??????'); ?>" value="<?php $this->remember('mail'); ?>" <?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>>
              <input type="url" name="url" id="url" class="form-control input-control" placeholder="<?php _e('??????'); ?>" value="<?php $this->remember('url'); ?>" <?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?>>
            <?php endif; ?>
            <textarea name="text" id="textarea" class="form-control" placeholder="<?php _e('????????????????????????'); ?>" required></textarea>
            <?php $comments->cancelReply(); ?>
            <button type="submit" id="misubmit">??????</button>
          </form>
        </div>
      </div>

      <?php if ($comments->have()): ?>
        <p style="margin-top: 30px;"><?php $this->commentsNum(_t('????????????'), _t('????????????')); ?></p>
        <?php $comments->listComments(); ?>
        <?php $comments->pageNav('&laquo;', '&raquo;', 5, '...', array('wrapTag' => 'ul', 'wrapClass' => 'page-change', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
      <?php endif;
  endif; ?>

</div>