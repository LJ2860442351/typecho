<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
	
	<div class="mdui-container-fluid">
		<div class="mdui-row DreamCat-content-header">
			<div class="mdui-container fade-scale in">
				<h1 class="title"><?php $this->options->title(); ?></h1>
				<h4 class="subtitle">
					<?php $this->archiveTitle(array(
						'category' => _t('分类 %s 下的文章'),
						'search' => _t('包含关键字 %s 的文章'),
						'tag' => _t('标签 %s 下的文章'),
						'author' => _t('%s 发布的文章')
					), '', ''); ?>
				</h4>
			</div>
		</div>
		<div class="mdui-row">
			<div class="mdui-col-xs-6 mdui-float-right" style="transform: translateY(-50%);width: 95px;">
				<button class="mdui-shadow-0 mdui-fab mdui-color-theme-accent mdui-ripple"
						mdui-dialog="{target: '#search-1'}" style="background-color: #3f51b5!important;">
					<i class="mdui-icon material-icons">search</i>
				</button>
			</div>
		</div>
	</div>
	<div class="mdui-container mdui-center">
		<?php if ($this->have()): ?>
			<?php while ($this->next()): ?>
				<a href='<?php $this->permalink() ?>'>
					<article class="post" itemscope="" itemtype="http://schema.org/BlogPosting">
						<div class="mdui-row">
							<div id="main">
								<div class="mdui-col-md-1 mdui-col-lg-1"></div>
								<div class="mdui-col-md-10 mdui-col-lg-10">
									<div id="line"></div>
									<div id="coos">
										<div class="lis">
											<div class="spot"></div>
											<div class="g-lin mdui-hidden-xs"></div>
											<div class="mdui-card mdui-hoverable" id="main" role="main"
												 style="border-radius:9px; transform: translateY(-15%);">
												<div class="mdui-card-media">
													<?php $t = thumb($this); ?>
													<?php if ($t[0] == 0): ?>
														<img class="moe-post-wzimg" style="object-fit: cover;"
															 src="<?php echo $t[1]; ?>"/>
													<?php endif; ?>
													<?php if ($t[0] == 1) : ?>
														<img class="moe-post-wzimg" style="object-fit: cover;"
															 src="<?php echo $t[1]; ?>"/>
													<?php endif; ?>
													<div class="mdui-card-media-covered">
														<div class="mdui-card-primary">
															<div class="mdui-card-primary-title">
																<?php $this->title(); ?>
																<?php if ($this->options->articletime == 'checked'): ?>
																	<br>
																	<small>发表时间:
																		<time datetime="<?php $this->date('c'); ?>"
																			  itemprop="datePublished">
																			<?php $this->date(); ?></time>
																	</small>
																<?php endif; ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="mdui-col-md-1 mdui-col-lg-1"></div>
							</div>
						</div>
					</article>
				</a>
			<?php endwhile; ?>
		<?php else: ?>
			<article class="post">
				<h2 class="post-title">没有找到内容</h2>
			</article>
		
		<?php endif; ?>
		
		
		<style>
			.moe-margin-card-top {
				margin-top: 30px;
			}

			.moe-page-div {
				margin-top: 30px;
				max-width: 250px;
				margin-left: auto;
				position: relative;
				margin-right: auto;
				margin-bottom: 80px;
			}

			.moe-page-div .moe-number {
				left: 37%;
				position: absolute;
			}

			.moe-page-div .moe-next {
				right: 0;
				position: absolute;
			}
		</style>
		<div class="moe-margin-card-top"></div>
		<div class="moe-page-div moe-card-a">
			<?php $this->pageLink(
					'<button class="mdui-btn mdui-btn-icon mdui-ripple mdui-color-theme-accent mdui-shadow-5 moe-prev"><i class="mdui-icon material-icons">navigate_before</i></button>',
					'prev'
			); ?>
			<button class="mdui-btn moe-number" disabled><span
						class=""><?php if ($this->_currentPage > 1) echo $this->_currentPage; else echo 1; ?> / <?php echo ceil(
							$this->getTotal() / $this->parameter->pageSize
					); ?></span>
			</button>
			<?php $this->pageLink(
					'<button class="mdui-btn mdui-btn-icon mdui-ripple mdui-color-theme-accent mdui-shadow-5 moe-next"><i class="mdui-icon material-icons">navigate_next</i></button>',
					'next'
			); ?>
		</div>
	</div>
	
	<!-- end #main -->
<?php $this->need('footer.php'); ?>