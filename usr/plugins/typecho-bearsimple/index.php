<?php
/**
 * 简洁大方淡雅，让您专注于写作
 * @package BearSimple 
 * @author WhiteBear
 * @version 1.8.2
 * @link https://www.coder-bear.com/
 * 
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 if($this->options->Sticky == "1"){
 $this->need('modules/sticky.php');
}
  ?>

<?php if($this->options->Diy == '1') :?>

<?php $this->need('pages/diy-index.php'); ?>

  <?php endif; ?>

<?php if($this->options->Diy == '2' || empty($this->options->Diy)) :?>

<?php $this->need('pages/index-z.php'); ?>

  <?php endif; ?>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
