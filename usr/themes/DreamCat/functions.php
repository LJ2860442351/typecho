<?php
	ini_set("error_reporting", "E_ALL & ~E_NOTICE");
	/**
	 * DreamCat   是一个极简自适应博客主题,年轻人追梦的必备良品!
	 *
	 * @package DreamCat
	 * @author LychApe
	 * @version X2.3.211003
	 * @link https://github.com/LychApe/DreamCat
	 */
	error_reporting(E_ALL ^ E_NOTICE);
	if (!defined('__TYPECHO_ROOT_DIR__')) exit;

#define("THEME_URL", rtrim(preg_replace('/^' . preg_quote($options->siteUrl, '/') . '/', $options->rootUrl . '/', $options->themeUrl, 1), '/'));
	
	function themeConfig($form) {
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('logoUrl'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('Dec'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('title'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('keywords'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('description'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('Decc'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('commentszs'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('headbj1'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('headbj2'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('qq'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('weixin'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('zfb'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('weibo'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('github'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('linkedin'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('baidusl'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('articletime'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('listtc'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('CustomCdn'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('CustomFont'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('CustomRandomPictures'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('CustomizeGlobalCss'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('CustomizeGlobalJs'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('CustomFooter'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('CustomPicture1'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('ClickEffects'));
		$form->addInput(new Typecho_Widget_Helper_Form_Element_Hidden('Favicon'));
		
		$options = Typecho_Widget::widget('Widget_Options');
		$Html = <<<HTML
<!-- CSS -->
	<meta http-equiv="x-dns-prefetch-control" content="on"/>
	<link rel="dns-prefetch" href="//cdn.jsdelivr.net"/>
	<link rel="dns-prefetch" href="//cdn.bootcss.com"/>
	<link rel="stylesheet preload" href="//cdn.bootcdn.net/ajax/libs/mdui/1.0.2/css/mdui.min.css" as="style">
<style>
.mdui-tab .mdui-tab-active {
	color: rgb(74 69 62 / 70%);
	opacity: 2;
}

.mdui-tab-indicator {
	background-color: rgb(74 69 62 / 70%);
}

.fillet-A1 {
	border-radius: .5rem
}

.shadow-A1 {
	box-shadow: .5rem .875rem 2.375rem rgba(39, 44, 49, .06), .0625rem .1875rem .5rem rgba(39, 44, 49, .03)
}

.button-ts {
	position: relative
}

.button-ts:active {
	transform: translateY(2px);
	-webkit-transition: box-shadow 2.5s;
	box-shadow: .5rem .875rem 2.375rem rgba(255, 255, 255, .12),
	.0625rem .1875rem .5rem transparent
}
</style>
	  <div class="mdui-card">
		  <div class="mdui-card-primary">
			  <div class="mdui-card-primary-title">DreamCat 主题配置中心</div>
			  <div class="mdui-card-primary-subtitle">Version: X2.3.211003</div>
		  </div>
		<div class="mdui-tab mdui-tab-centered" mdui-tab>
		  <a href="#example3-tab1" class="mdui-ripple">模板信息</a>
		  <a href="#example3-tab2" class="mdui-ripple">全局设置</a>
		  <a href="#example3-tab3" class="mdui-ripple">高级设置</a>
		</div>
		<div id="example3-tab1" class="mdui-p-a-2">
			<div class="mdui-card-content">
			<div class="mdui-row-xs-2">
				<div class="mdui-col">
					<div class="mdui-card shadow-A1 button-ts" style="background-color: rgb(130 123 123 / 14%);">
						<div class="mdui-card-header">
						  <img class="mdui-card-header-avatar" src="https://i.loli.net/2020/01/19/gHs2Kb39YixpyE4.png" alt=""/>
						  <div class="mdui-card-header-title">DreamCat</div>
						  <div class="mdui-card-header-subtitle">X2.3.211003</div>
						</div>
					</div>
				</div>
				<div class="mdui-col">
					<div class="mdui-card shadow-A1 button-ts" mdui-dialog="{target: '#exampleDialog'}" style="background-color: rgb(130 123 123 / 14%);">
						<div class="mdui-card-header">
						  <img class="mdui-card-header-avatar" src="https://i.loli.net/2020/01/19/gHs2Kb39YixpyE4.png" alt=""/>
						  <div class="mdui-card-header-title">开发者</div>
						  <div class="mdui-card-header-subtitle">简单不先于复杂,而是在复杂之后</div>
						</div>
					</div>
				</div>
			</div>
			<br/>
				<div class="mdui-card shadow-A1" style="background-color: rgb(130 123 123 / 14%);">
				<div class="mdui-card-content">
					<img alt="GitHub " src="https://img.shields.io/github/stars/LychApe/DreamCat?style=for-the-badge" alt="">
					<img alt="GitHub all releases" src="https://img.shields.io/github/downloads/LychApe/DreamCat/total?style=for-the-badge" alt="">
					<img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/LychApe/DreamCat?style=for-the-badge" alt="">
					<img alt="GitHub code size in bytes" src="https://img.shields.io/github/languages/code-size/LychApe/DreamCat?style=for-the-badge" alt="">
				</div>
				</div>
				<br/>
				
				<div class="mdui-card shadow-A1" style="background-color: rgb(130 123 123 / 14%);">
					<div class="mdui-card-content">
					最新版本：<a href="https://github.com/LychApe/DreamCat/"><img alt="GitHub release (latest by date)" src="https://img.shields.io/github/v/release/LychApe/DreamCat?style=flat-square"></a>
					<div class="mdui-float-right">当前版本：X2.3.211003</div>
					</div>
				</div>
				<br/>
				<div class="mdui-card shadow-A1" style="background-color: rgb(130 123 123 / 14%);">
					<div class="mdui-card-content">
					<div class="mdui-typo">
					<p>QQ交流群:1034830519</p>
					<p>最后，祝您使用愉快:)</p>
					</div>
					</div>
				</div>
				</div>
		</div>
		
		<div id="example3-tab2" class="mdui-p-a-2">
		<br/>
		<div class="mdui-chip">
		  <span class="mdui-chip-title">首页设置</span>
		</div>
		<br/>
		
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_logoUrl" value="{$options->logoUrl}" placeholder="头像地址"/>
		  <div class="mdui-textfield-helper">在这里填入一个图片 URL 地址, 以在网站前台显示头像，留空则显示默认头像</div>
		</div>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_CustomPicture1" value="{$options->CustomPicture1}" placeholder="侧边栏图片地址"/>
		  <div class="mdui-textfield-helper">在这里填入一个图片 URL 地址, 以在侧边栏显示背景图片，留空则显示默认背景图片</div>
		</div>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_title" value="{$options->title}" placeholder="网站标题"/>
		  <div class="mdui-textfield-helper">在这里填入一个网站标题, 以在网站前台显示网站标题，留空则不显示</div>
		</div>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_Dec" value="{$options->Dec}" placeholder="填入首页标语"/>
		  <div class="mdui-textfield-helper">在这里填入一个首页标语, 以在网站前台显示首页标语，留空则不显示</div>
		</div>
		<br/>
		<div class="mdui-chip">
		  <span class="mdui-chip-title">SEO设置</span>
		</div>
		<br/>
		
	   <div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_Favicon" value="{$options->Favicon}" placeholder="网站Favicon链接"/>
		  <div class="mdui-textfield-helper">网站Favicon将显示在网页标签的头部,留空则不显示</div>
	   </div>
	   <div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_description" value="{$options->description}" placeholder="网站SEO描述"/>
		  <div class="mdui-textfield-helper">网站描述将显示在网页代码的头部,留空则不显示</div>
		</div>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_keywords" value="{$options->keywords}" placeholder="网站SEO关键字"/>
		  <div class="mdui-textfield-helper">请以半角逗号 "," 分割多个关键字</div>
		</div>
		
		<br/>
		<div class="mdui-chip">
		  <span class="mdui-chip-title">博主栏设置</span>
		</div>
		<br/>
		
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_headbj1" value="{$options->headbj1}" placeholder="填入一个首页公告背景地址"/>
		  <div class="mdui-textfield-helper">填入一个图片地址，不填则显示默认背景(地球)</div>
		</div>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_headbj2" value="{$options->headbj2}" placeholder="填入一个首页博主栏背景地址"/>
		  <div class="mdui-textfield-helper">填入一个图片地址，不填则显示默认背景(地球)</div>
		</div>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_Decc" value="{$options->Decc}" placeholder="填入一个具有逼格的首页博主栏简介或者说明"/>
		  <div class="mdui-textfield-helper">在这里填入一个具有逼格的首页博主栏简介或者说明，留空则不显示</div>
		</div>
		
		<br/>
		<div class="mdui-chip">
		  <span class="mdui-chip-title">联系方式设置</span>
		</div>
		<br/>
		
	   <div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_qq" value="{$options->qq}" placeholder="填写QQ二维码图片地址"/>
		  <div class="mdui-textfield-helper">填写您的QQ二维码图片地址,它将在首页以及其他地方显示，不填则不显示</div>
		</div>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_weixin" value="{$options->weixin}" placeholder="填写微信二维码图片地址"/>
		  <div class="mdui-textfield-helper">填写您的微信二维码图片地址,它将在首页以及其他地方显示，不填则不显示</div>
		</div>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_zfb" value="{$options->zfb}" placeholder="填写支付宝二维码图片地址"/>
		  <div class="mdui-textfield-helper">填写您的支付宝二维码图片地址,它将在首页以及其他地方显示，不填则不显示</div>
		</div>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_weibo" value="{$options->weibo}" placeholder="填写微博二维码图片地址"/>
		  <div class="mdui-textfield-helper">填写您的微博二维码图片地址,它将在首页以及其他地方显示，不填则不显示</div>
		</div>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_github" value="{$options->github}" placeholder="填写Github地址"/>
		  <div class="mdui-textfield-helper">填写您的Github地址,它将在首页以及其他地方显示，不填则不显示</div>
		</div>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_linkedin" value="{$options->linkedin}" placeholder="填写Linkedin地址"/>
		  <div class="mdui-textfield-helper">填写您的Linkedin地址,它将在首页以及其他地方显示，不填则不显示</div>
		</div>
		
	<br/>
	<div class="mdui-chip">
	  <span class="mdui-chip-title">自定义页脚内容</span>
	</div>
		<div class="mdui-textfield">
		<textarea type="text" id="CustomFooter" class="mdui-textfield-input" rows="4" name="dreamcat_CustomFooter" value="{$options->CustomFooter}" placeholder="自定义页脚内容"></textarea>
		<script>document.getElementById("CustomFooter").value = "{$options->CustomFooter}"</script>
		</div>
		
		</div>
		
		<div id="example3-tab3" class="mdui-p-a-2">
<div class="mdui-card shadow-A1" style="background-color: rgb(130 123 123 / 14%);">
	<div class="mdui-card-content">
	<div class="mdui-textfield">
	  <input type="text" class="mdui-textfield-input" name="dreamcat_ClickEffects" value="{$options->ClickEffects}" placeholder="填入disabled/checked"/>
	  <div class="mdui-textfield-helper">开启则全局有点击特效（开启：checked 关闭：disabled）</div>
	</div>
	<br/>
	<div class="mdui-textfield">
	  <input type="text" class="mdui-textfield-input" name="dreamcat_articletime" value="{$options->articletime}" placeholder="填入disabled/checked"/>
	  <div class="mdui-textfield-helper">开启则首页文章显示发表时间 （开启：checked 关闭：disabled）</div>
	</div>
	<br/>
	<div class="mdui-textfield">
	  <input type="text" class="mdui-textfield-input" name="dreamcat_listtc" value="{$options->listtc}" placeholder="填入disabled/checked"/>
	  <div class="mdui-textfield-helper">开启则首页时间线的文章不在以 图片+标题的方式展示，而是改为 标题+内容 的方式展示（开启：checked 关闭：disabled）</div>
	</div>
	<br/>
	<div class="mdui-textfield">
	  <input type="text" class="mdui-textfield-input" name="dreamcat_baidusl" value="{$options->baidusl}" placeholder="填入disabled/checked"/>
	  <div class="mdui-textfield-helper">开启则文章内显示百度是否收录 （开启：checked 关闭：disabled）</div>
	</div>
	<br/>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_commentszs" value="{$options->commentszs}" placeholder="填入一个数字限制评论的字数"/>
		  <div class="mdui-textfield-helper">文章可评论的字数</div>
		</div>
	<br/>


	<div class="mdui-chip">
	  <span class="mdui-chip-title">自定义CDN设置</span>
	</div>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_CustomCdn" value="{$options->CustomCdn}" placeholder="自定义CDN"/>
		  <div>
		  <p>CDN加速模式: 填写"AccelerationMode"或留空</p>
		  <p>自定义CDN加速模式: 填写CDN静态资源链接</p>
		  <p>本地资源: 填写LocalMode <br/>(需在终端输入git clone https://github.com/LychApe/DreamCat_StaticResources.git )</p>
		  <p style="color: rgba(0,0,0,.54);font-size: smaller;">p.s.留空则默认使用DreamCat源</p>
		  </div>
		</div>
		<?php var_dump($options->CustomCdn); ?>
		<div class="mdui-chip">
	  <span class="mdui-chip-title">随机图片设置</span>
	</div>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_CustomRandomPictures" value="{$options->CustomRandomPictures}" placeholder="填入自定义随机图片链接或留空"/>
		  <div>
		  <p>自定义随机图片：填入一个自定义随机图片接链或留空</p>
		  <p style="color: rgba(0,0,0,.54);font-size: smaller;">p.s.留空则默认使用DreamCat源</p>
		  </div>
		</div>

	<div class="mdui-chip">
	  <span class="mdui-chip-title">字体设置</span>
	</div>
		<div class="mdui-textfield">
		  <input type="text" class="mdui-textfield-input" name="dreamcat_CustomFont" value="{$options->CustomFont}" placeholder="填入字体链接或留空"/>
		  <div>
		  <p>自定义字体：填入一个字体接链或留空</p>
		  <p style="color: rgba(0,0,0,.54);font-size: smaller;">p.s.留空则默认使用DreamCat源</p>
		  </div>
		</div>
		
		<div class="mdui-chip">
		  <span class="mdui-chip-title">自定义全局CSS</span>
		</div>
		<div class="mdui-textfield">
		  <textarea type="text" id="CustomizeGlobalCss" class="mdui-textfield-input" rows="5" name="dreamcat_CustomizeGlobalCss" value="{$options->CustomizeGlobalCss}" placeholder="填入CSS样式"></textarea>
		  <script>document.getElementById("CustomizeGlobalCss").value = "{$options->CustomizeGlobalCss}"</script>
		</div>
		
		<div class="mdui-chip">
		  <span class="mdui-chip-title">自定义全局JS</span>
		</div>
		<div class="mdui-textfield">
		  <textarea type="text" id="CustomizeGlobalJs" class="mdui-textfield-input" rows="5" name="dreamcat_CustomizeGlobalJs" placeholder="填入JS"></textarea>
		  <script>document.getElementById("CustomizeGlobalJs").value = "{$options->CustomizeGlobalJs}"</script>
		</div>
		
	</div>
</div>
		
		</div>
		
<div class="mdui-dialog" id="exampleDialog">
  <div class="mdui-dialog-title">开发者列表</div>
  <div class="mdui-dialog-content">
  
<div class="mdui-row-xs-2">
	<div class="mdui-col">
		<div class="mdui-card shadow-A1 button-ts" style="background-color: rgb(130 123 123 / 14%);">
			<div class="mdui-card-header">
			  <img class="mdui-card-header-avatar" src="https://q2.qlogo.cn/headimg_dl?dst_uin=1091044631@qq.com&spec=640"/>
			  <div class="mdui-card-header-title">HanFengA7</div>
			  <div class="mdui-card-header-subtitle">所幸抬头仰望,总有星辰相伴!</div>
			</div>
		</div>
		<br/>
	</div>
	<div class="mdui-col">
		<div class="mdui-card shadow-A1 button-ts" style="background-color: rgb(130 123 123 / 14%);">
			<div class="mdui-card-header">
			  <img class="mdui-card-header-avatar" src="https://q2.qlogo.cn/headimg_dl?dst_uin=2206645368@qq.com&spec=640"/>
			  <div class="mdui-card-header-title">TeddyNight</div>
			  <div class="mdui-card-header-subtitle">自由和未来不可以被妥协</div>
			</div>
		</div>
		<br/>
	</div>
	
	<div class="mdui-col">
		<div class="mdui-card shadow-A1 button-ts" style="background-color: rgb(130 123 123 / 14%);">
			<div class="mdui-card-header">
			  <img class="mdui-card-header-avatar" src="https://q2.qlogo.cn/headimg_dl?dst_uin=1906944165@qq.com&spec=640"/>
			  <div class="mdui-card-header-title">Dev-Leo</div>
			  <div class="mdui-card-header-subtitle">不忘初心,牢记使命！</div>
			</div>
		</div>
		<br/>
	</div>
	<div class="mdui-col">
		<div class="mdui-card shadow-A1 button-ts" style="background-color: rgb(130 123 123 / 14%);">
			<div class="mdui-card-header">
			  <img class="mdui-card-header-avatar" src="https://q2.qlogo.cn/headimg_dl?dst_uin=2135620856@qq.com&spec=640"/>
			  <div class="mdui-card-header-title">CornWorld</div>
			  <div class="mdui-card-header-subtitle">"希望人没事"</div>
			</div>
		</div>
		<br/>
	</div>
	
	<div class="mdui-col">
		<div class="mdui-card shadow-A1 button-ts" style="background-color: rgb(130 123 123 / 14%);">
			<div class="mdui-card-header">
			  <img class="mdui-card-header-avatar" src="https://q2.qlogo.cn/headimg_dl?dst_uin=1846405136@qq.com&spec=640"/>
			  <div class="mdui-card-header-title">WhiteBearcn</div>
			  <div class="mdui-card-header-subtitle"></div>
			</div>
		</div>
		<br/>
	</div>
	
	<div class="mdui-col">
		<div class="mdui-card shadow-A1 button-ts" mdui-dialog="{target: '#exampleDialog'}" style="background-color: rgb(130 123 123 / 14%);">
			<div class="mdui-card-header">
			  <img class="mdui-card-header-avatar" src="https://q2.qlogo.cn/headimg_dl?dst_uin=2477819731@qq.com&spec=640"/>
			  <div class="mdui-card-header-title">学神之女</div>
			  <div class="mdui-card-header-subtitle">举头望涵涵，低头思第一。</div>
			</div>
		</div>
		<br/>
	</div>
</div>
  <br/>
  除此之外，还有很多来自全世界的开发者正通过 GitHub 向我们提交贡献。
  </div>
  <div class="mdui-dialog-actions">
	<button class="mdui-btn mdui-ripple" mdui-dialog-confirm>确认</button>
  </div>
</div>
		
		<div class="mdui-card-actions">
		</div>
	  </div>
	  
	  
<style>
.primary {
	border: none;
	background-color: #d8d8d8;
	cursor: pointer;
	border-radius: 2px;
	color: #FFF;
}

.primary:hover {
	transition-duration: 1.5s;
	background-color: rgb(74 69 62 / 70%);
}

.primary:disabled {
	background-color: #edecec;
	cursor: default;
}
</style>
  	<script rel="preload" src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js" as="script"></script>
	<script rel="preload" src="//cdn.bootcdn.net/ajax/libs/mdui/1.0.2/js/mdui.min.js" as="script"></script>
<script>
		//同步input值
		$('input').bind('input propertychange blur', function () {
			var name = $(this).attr("name").split('_')[1];
			$("input[name='" + name + "']").val($(this).val());
		});
		
		//同步textarea值
		$('textarea').bind('input propertychange blur', function () {
			//var length = $("textarea").val();
			var name = $(this).attr("name").split('_')[1];
			$("input[name='" + name + "']").val($(this).val());
			//console.log(name);
		});
		
		//$('checkbox', function(){
		//	var that = mdui.$.data(document.body,'input',);
		//	var name = $(that).attr("name").split('_')[1];
		//	var value = data.elem.checked?data.value:'';
		//	$("input[name='"+name+"']").val(value);
		//});
			
			
	
			</script>
		
HTML;
		$layout = new Typecho_Widget_Helper_Layout();
		$layout->html(_t($Html));
		$form->addItem($layout);
	}
	
	/** 随机图片
	 *
	 * @return Array
	 */
	function thumb($obj) {
		$rand_num = 10;
		$options = Helper::options();
		if ($options->CustomRandomPictures == '') {
			$imgcdn = "https://cdn.jsdelivr.net/gh/LychApe/DreamCat_StaticResources@main";
		}
		else {
			$imgcdn = $options->CustomRandomPictures;
		}
		
		if ($rand_num == 0) {
			$imgurl = $imgcdn . "/img/OER/0.jpg"; //如果$rand_num = 0,则显示默认图片，须命名为"0.jpg"
		}
		else {
			$imgurl = $imgcdn . "/img/OER/" . rand(1, $rand_num) . ".jpg"; // 须按"1.jpg","2.jpg","3.jpg"，一定要安装顺序
		}
		$attach = $obj->attachments(1)->attachment;
		if (isset($attach->isImage) && $attach->isImage == 1) {
			$thu = [0, $attach->url];
		}
		else {
			$thu = [1, $imgurl];
		}
		return $thu;
	}
	
	/** 显示下一篇
	 *
	 * @access public
	 *
	 * @param String $default 如果没有上一篇,显示的默认文字
	 *
	 * @return Void
	 */
	function theNext($widget) {
		$db = Typecho_Db::get();
		$sql = $db->select()->from('table.contents')->where('table.contents.created > ?', $widget->created)->where(
				'table.contents.status = ?', 'publish'
		)->where('table.contents.type = ?', $widget->type)->where('table.contents.password IS NULL')->order(
				'table.contents.created', Typecho_Db::SORT_ASC
		)->limit(1);
		$content = $db->fetchRow($sql);
		if ($content) {
			$content = $widget->filter($content);
			$link =
					'<a href="' . $content['permalink'] . '" class="mdui-ripple mdui-color-theme mdui-col-xs-10 mdui-col-sm-6 doc-footer-nav-right"><div class="doc-footer-nav-text"><i class="mdui-icon material-icons">arrow_forward</i><span class="doc-footer-nav-direction">Next</span><div class="doc-footer-nav-chapter">' . $content['title'] . '</div></div></a>';
			echo $link;
		}
		else {
			$link2 =
					'<a class="mdui-ripple mdui-color-theme mdui-col-xs-10 mdui-col-sm-6 doc-footer-nav-right"><div class="doc-footer-nav-text"><i class="mdui-icon material-icons">arrow_forward</i><span class="doc-footer-nav-direction">Next</span><div class="doc-footer-nav-chapter">没有啦!!!</div></div></a>';
			echo $link2;
		}
	}
	
	/** 显示上一篇
	 *
	 * @access public
	 *
	 * @param String $default 如果没有下一篇,显示的默认文字
	 *
	 * @return Void
	 */
	function thePrev($widget) {
		$db = Typecho_Db::get();
		$sql = $db->select()->from('table.contents')->where('table.contents.created < ?', $widget->created)->where(
				'table.contents.status = ?', 'publish'
		)->where('table.contents.type = ?', $widget->type)->where('table.contents.password IS NULL')->order(
				'table.contents.created', Typecho_Db::SORT_DESC
		)->limit(1);
		$content = $db->fetchRow($sql);
		if ($content) {
			$content = $widget->filter($content);
			$link =
					'<a href="' . $content['permalink'] . '" class="mdui-ripple mdui-color-theme mdui-col-xs-2 mdui-col-sm-6 doc-footer-nav-left"><div class="doc-footer-nav-text"><i class="mdui-icon material-icons">arrow_back</i><span class="doc-footer-nav-direction mdui-hidden-xs-down">Previous</span><div class="doc-footer-nav-chapter mdui-hidden-xs-down">' . $content['title'] . '</div></div></a>';
			echo $link;
		}
		else {
			$link2 =
					'<a class="mdui-ripple mdui-color-theme mdui-col-xs-2 mdui-col-sm-6 doc-footer-nav-left"><div class="doc-footer-nav-text"><i class="mdui-icon material-icons">arrow_back</i><span class="doc-footer-nav-direction mdui-hidden-xs-down">Previous</span><div class="doc-footer-nav-chapter mdui-hidden-xs-down">没有啦!!!</div></div></a>';
			
			echo $link2;
		}
	}
	
	/**  判断内容页是否百度收录 */
	function baidu_record() {
		$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$res = checkBaidu($url);
		if ($res == 1) {
			echo "百度已收录";
		}
		else {
			if ($res == 2) {
				echo '<a style="color:red;" rel="external nofollow" title="点击提交收录！" target="_blank" href="https://ziyuan.baidu.com/sitesubmit/index?sitename=$url">百度未收录</a>';
			}
			else {
				echo '无法查询';
			}
		}
	}
	
	function checkBaidu($url) {
		if (function_exists('curl_version') && function_exists('curl_init') && function_exists('curl_close')) {
			$url = 'http://www.baidu.com/s?wd=' . urlencode($url);
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			@$rs = curl_exec($curl);
			if ($rs == false) return -2;
			curl_close($curl);
			if (!strpos($rs, '没有找到')) { //没有找到说明已被百度收录
				return 1;
			}
			else {
				return -3;
			}
		}
		else return -2;
	}
	
	function art_count($cid) {
		$db = Typecho_Db::get();
		$rs = $db->fetchRow(
				$db->select('table.contents.text')->from('table.contents')->where('table.contents.cid=?', $cid)->order(
						'table.contents.cid', Typecho_Db::SORT_ASC
				)->limit(1)
		);
		$text = preg_replace("/[^\x{4e00}-\x{9fa5}]/u", "", $rs['text']);
		echo mb_strlen($text, 'UTF-8');
	}
	
	/** 输出评论回复内容，配合 commentAtContent($coid)一起使用
	 *
	 * @return String
	 * @example showCommentContent($comments->coid)
	 */
	function showCommentContent($coid) {
		$db = Typecho_Db::get();
		$result = $db->fetchRow(
				$db->select('text')->from('table.comments')->where('coid = ? AND status = ?', $coid, 'approved')
		);
		$text = $result['text'];
		$atStr = commentAtContent($coid);
		$_content = Markdown::convert($text);
		if ($atStr !== '') {
			return substr_replace($_content, $atStr, 0, 3);
		}
		else {
			return $_content;
		}
	}
	
	/** 评论回复加@
	 *
	 * @return String
	 */
	function commentAtContent($coid) {
		$db = Typecho_Db::get();
		$prow = $db->fetchRow(
				$db->select('parent')->from('table.comments')->where('coid = ? AND status = ?', $coid, 'approved')
		);
		$parent = $prow['parent'];
		if ($parent != "0") {
			$arow = $db->fetchRow(
					$db->select('author')->from('table.comments')->where('coid = ? AND status = ?', $parent, 'approved')
			);
			$author = $arow['author'];
			return "<p><a href=\"#comment-{$parent}\">@{$author}</a>";
		}
		else {
			return '';
		}
	}
	
	/**  算术验证评论 前端
	 *
	 * @return Void
	 */
	function spam_protection_math() {
		$num1 = 1;
		$num2 = rand(1, 9);
		echo "$num1 + $num2 = ";
		echo '<input type="text" name="sum\" class="vnick vinput" value=""
	size="25" tabindex="4" style=" background: 0 0; width:70px; border: none; resize: none; outline: none; padding:
	10px 5px; max-width: 100%; font-size: .775rem;" placeholder="计算结果">';
		echo '<input type="hidden" name="num1" value="$num1">';
		echo '<input type="hidden" name="num2" value="$num2">';
	}
	
	/**  算术验证评论 后端
	 *
	 * @return Void
	 */
	function spam_protection_pre($comment) {
		$sum = "";
		if (isset($_POST['sum'])) {
			$sum = $_POST['sum'];
		}
		switch ($sum) {
			case $_POST['num1'] + $_POST['num2']:
				break;
			case null:
				throw new Typecho_Widget_Exception(_t('抱歉：请输入验证码', '评论失败'));
			default:
				throw new Typecho_Widget_Exception(_t('抱歉：验证码错误，请返回重试', '评论失败'));
		}
		return $comment;
	}
	
	/** 获取浏览次数(改进版) */
	function getViewsStr($widget, $format = "{views} ℃ ") {
		$fields = unserialize($widget->fields);
		if (array_key_exists('views', $fields)) {
			$views = (!empty($fields['views'])) ? intval($fields['views']) : 0;
		}
		else $views = 0; //增加浏览次数
		if ($widget->is('single')) {
			$vieweds = Typecho_Cookie::get('contents_viewed');
			if (empty($vieweds)) {
				$vieweds = array();
			}
			else $vieweds = explode(',', $vieweds);
			if (!in_array($widget->cid, $vieweds)) {
				$views = $views + 1;
				$widget->setField('views', 'str', strval($views), $widget->cid);
				$vieweds[] = $widget->cid;
				$vieweds = implode(',', $vieweds);
				Typecho_Cookie::set("contents_viewed", $vieweds);
			}
		}
		return str_replace("{views}", $views, $format);
	}
	
	/** 获取浏览器信息
	 *
	 * @return String
	 * @example getBrowser($comments->agent);
	 */
	function getBrowser($agent) {
		$outputer = null;
		if (preg_match('/MSIE\s([^\s|;]+)/i', $agent, $regs)) {
			$outputer = 'IE Browser';
		}
		else {
			if (preg_match('/FireFox\/([^\s]+)/i', $agent, $regs)) {
				$str1 = explode('Firefox/', $regs[0]);
				$FireFox_vern = explode('.', $str1[1]);
				$outputer = 'Firefox Browser ' . $FireFox_vern[0];
			}
			else {
				if (preg_match('/Maxthon([\d]*)\/([^\s]+)/i', $agent, $regs)) {
					$str1 = explode('Maxthon/', $agent);
					$Maxthon_vern = explode('.', $str1[1]);
					$outputer = 'Maxthon Browser ' . $Maxthon_vern[0];
				}
				else {
					if (preg_match('#SE2([a-zA-Z0-9.]+)#i', $agent, $regs)) {
						$outputer = 'Sogo Browser';
					}
					else {
						if (preg_match('#360([a-zA-Z0-9.]+)#i', $agent, $regs)) {
							$outputer = '360 Browser';
						}
						else {
							if (preg_match('/Edge([\d]*)\/([^\s]+)/i', $agent, $regs)) {
								$str1 = explode('Edge/', $regs[0]);
								$Edge_vern = explode('.', $str1[1]);
								$outputer = 'Edge ' . $Edge_vern[0];
							}
							else {
								if (preg_match('/EdgiOS([\d]*)\/([^\s]+)/i', $agent, $regs)) {
									$str1 = explode('EdgiOS/', $regs[0]);
									$outputer = 'Edge';
								}
								else {
									if (preg_match('/UC/i', $agent)) {
										$str1 = explode('rowser/', $agent);
										$UCBrowser_vern = explode('.', $str1[1]);
										$outputer = 'UC Browser ' . $UCBrowser_vern[0];
									}
									else {
										if (preg_match('/OPR/i', $agent)) {
											$str1 = explode('OPR/', $agent);
											$opr_vern = explode('.', $str1[1]);
											$outputer = 'Open Browser ' . $opr_vern[0];
										}
										else {
											if (preg_match('/MicroMesseng/i', $agent, $regs)) {
												$outputer = 'Weixin Browser';
											}
											else {
												if (preg_match('/WeiBo/i', $agent, $regs)) {
													$outputer = 'WeiBo Browser';
												}
												else {
													if (preg_match('/QQ/i', $agent, $regs) || preg_match(
																	'/QQBrowser\/([^\s]+)/i', $agent, $regs
															)) {
														$str1 = explode('rowser/', $agent);
														$QQ_vern = explode('.', $str1[1]);
														$outputer = 'QQ Browser ' . $QQ_vern[0];
													}
													else {
														if (preg_match('/MQBHD/i', $agent, $regs)) {
															$str1 = explode('MQBHD/', $agent);
															$QQ_vern = explode('.', $str1[1]);
															$outputer = 'QQ Browser ' . $QQ_vern[0];
														}
														else {
															if (preg_match('/BIDU/i', $agent, $regs)) {
																$outputer = 'Baidu Browser';
															}
															else {
																if (preg_match('/LBBROWSER/i', $agent, $regs)) {
																	$outputer = 'KS Browser';
																}
																else {
																	if (preg_match('/TheWorld/i', $agent, $regs)) {
																		$outputer = 'TheWorld Browser';
																	}
																	else {
																		if (preg_match('/XiaoMi/i', $agent, $regs)) {
																			$outputer = 'XiaoMi Browser';
																		}
																		else {
																			if (preg_match(
																					'/UBrowser/i', $agent, $regs
																			)) {
																				$str1 = explode('rowser/', $agent);
																				$UCBrowser_vern =
																						explode('.', $str1[1]);
																				$outputer =
																						'UCBrowser ' . $UCBrowser_vern[0];
																			}
																			else {
																				if (preg_match(
																						'/mailapp/i', $agent, $regs
																				)) {
																					$outputer = 'Email Browser';
																				}
																				else {
																					if (preg_match(
																							'/2345Explorer/i', $agent,
																							$regs
																					)) {
																						$outputer = '2345 Browser';
																					}
																					else {
																						if (preg_match(
																								'/Sleipnir/i', $agent,
																								$regs
																						)) {
																							$outputer =
																									'Sleipnir Browser';
																						}
																						else {
																							if (preg_match(
																									'/YaBrowser/i',
																									$agent,
																									$regs
																							)) {
																								$outputer =
																										'Yandex Browser';
																							}
																							else {
																								if (preg_match(
																										'/Opera[\s|\/]([^\s]+)/i',
																										$agent, $regs
																								)) {
																									$outputer =
																											'Opera Browser';
																								}
																								else {
																									if (preg_match(
																											'/MZBrowser/i',
																											$agent,
																											$regs
																									)) {
																										$outputer =
																												'MZ Browser';
																									}
																									else {
																										if (preg_match(
																												'/VivoBrowser/i',
																												$agent,
																												$regs
																										)) {
																											$outputer =
																													'Vivo Browser';
																										}
																										else {
																											if (preg_match(
																													'/Quark/i',
																													$agent,
																													$regs
																											)) {
																												$outputer =
																														'Quark Browser';
																											}
																											else {
																												if (preg_match(
																														'/mixia/i',
																														$agent,
																														$regs
																												)) {
																													$outputer =
																															'Mixia Browser';
																												}
																												else {
																													if (preg_match(
																															'/fusion/i',
																															$agent,
																															$regs
																													)) {
																														$outputer =
																																'Fusion';
																													}
																													else {
																														if (preg_match(
																																'/CoolMarket/i',
																																$agent,
																																$regs
																														)) {
																															$outputer =
																																	'CoolMarket Browser';
																														}
																														else {
																															if (preg_match(
																																	'/Thunder/i',
																																	$agent,
																																	$regs
																															)) {
																																$outputer =
																																		'Thunder Browser';
																															}
																															else {
																																if (preg_match(
																																		'/Chrome([\d]*)\/([^\s]+)/i',
																																		$agent,
																																		$regs
																																)) {
																																	$str1 =
																																			explode(
																																					'Chrome/',
																																					$agent
																																			);
																																	$chrome_vern =
																																			explode(
																																					'.',
																																					$str1[1]
																																			);
																																	$outputer =
																																			'Chrome ' . $chrome_vern[0];
																																}
																																else {
																																	if (preg_match(
																																			'/safari\/([^\s]+)/i',
																																			$agent,
																																			$regs
																																	)) {
																																		$str1 =
																																				explode(
																																						'Version/',
																																						$agent
																																				);
																																		$safari_vern =
																																				explode(
																																						'.',
																																						$str1[1]
																																				);
																																		$outputer =
																																				'Safari' . $safari_vern[0];
																																	}
																																	else {
																																		return false;
																																	}
																																}
																															}
																														}
																													}
																												}
																											}
																										}
																									}
																								}
																							}
																						}
																					}
																				}
																			}
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
		return $outputer;
	}
	
	/** 获取操作系统信息
	 *
	 * @return String
	 * @example getOs($comments->agent);
	 */
	function getOs($agent) {
		$os = false;
		if (preg_match('/win/i', $agent)) {
			if (preg_match('/nt 6.0/i', $agent)) {
				$os = 'Windows Vista';
			}
			else {
				if (preg_match('/nt 6.1/i', $agent)) {
					$os = 'Windows 7';
				}
				else {
					if (preg_match('/nt6.2/i', $agent)) {
						$os = 'Windows 8';
					}
					else {
						if (preg_match('/nt 6.3/i', $agent)) {
							$os = 'Windows 8.1';
						}
						else {
							if (preg_match('/nt 5.1/i', $agent)) {
								$os = 'Windows XP';
							}
							else {
								if (preg_match('/nt 10.0/i', $agent)) {
									$os = 'Windows 10';
								}
								else {
									$os = 'Windows';
								}
							}
						}
					}
				}
			}
		}
		else {
			if (preg_match('/android/i', $agent)) {
				if (preg_match('/android9/i', $agent)) {
					$os = 'Android P';
				}
				else {
					if (preg_match('/android 8/i', $agent)) {
						$os = 'Android O';
					}
					else {
						if (preg_match('/android 7/i', $agent)) {
							$os = 'Android N';
						}
						else {
							if (preg_match('/android 6/i', $agent)) {
								$os = 'Android M';
							}
							else {
								if (preg_match('/android 5/i', $agent)) {
									$os = 'Android L';
								}
								else {
									$os = 'Android';
								}
							}
						}
					}
				}
			}
			else {
				if (preg_match('/ubuntu/i', $agent)) {
					$os = 'Linux';
				}
				else {
					if (preg_match('/linux/i', $agent)) {
						$os = 'Linux';
					}
					else {
						if (preg_match('/iPhone/i', $agent)) {
							$os = 'iPhone';
						}
						else {
							if (preg_match('/iPad/i', $agent)) {
								$os =
										'iPad';
							}
							else {
								if (preg_match('/mac/i', $agent)) {
									$os = 'OSX';
								}
								else {
									if (preg_match('/cros/i', $agent)) {
										$os = 'Chrome os';
									}
									else {
										return false;
									}
								}
							}
						}
					}
				}
			}
		}
		return $os;
	}


#自定义CDN
	function CustomCDN_url($agent) {
		$options = Helper::options();
		if (empty($options->CustomCdn) || $options->CustomCdn == 'AccelerationMode') {
			$CustomCDN = "https://cdn.jsdelivr.net/gh/LychApe/DreamCat_StaticResources@X2.3.211003/" . "$agent";
			echo "$CustomCDN";
			#var_dump(Helper::options()->CustomCdn);
		}
		elseif ($options->CustomCdn == 'LocalMode') {
			$options->themeUrl("/DreamCat_StaticResources/"."$agent");
		}
		else {
			$CustomCDN = $options->CustomCdn."$agent";
			echo "$CustomCDN";
		}
	}

#自定义字体
	function CustomFont_url() {
		$options = Helper::options();
		if ($options->CustomFont == '') {
			CustomCDN_url("fonts/JetBrainsMono-Regular.woff2");
		}
		else {
			$CustomFont = $options->CustomFont;
			echo($CustomFont);
		}
	}
