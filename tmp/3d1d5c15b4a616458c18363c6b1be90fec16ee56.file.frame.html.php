<?php /* Smarty version Smarty-3.0.8, created on 2015-08-19 07:42:00
         compiled from "F:\public_html\keding\new/tpl\frame.html" */ ?>
<?php /*%%SmartyHeaderCode:1704255d41728560f90-74776728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d1d5c15b4a616458c18363c6b1be90fec16ee56' => 
    array (
      0 => 'F:\\public_html\\keding\\new/tpl\\frame.html',
      1 => 1439962917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1704255d41728560f90-74776728',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<head>
<meta name="Robots" content="all">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Pragma" content="no-cache">
<link rel="shortcut icon" href="favicon.ico">
<meta name="description" content="合肥科鼎电气有限公司批量生产各种类型的避雷器以及避雷器在线监测仪。" />
<meta name="Keywords" content="智能数字式避雷器在线监测仪,合肥避雷器，避雷器,合肥科鼎电气有限公司，避雷器在线监测仪，科鼎，合肥科鼎，氧化锌避雷器" />
<title>合肥科鼎电气有限公司</title>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/frame.css"/>
</head>
<body>
<div id="main">
	 <div id="menu">
	 	<lu>
	 		<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'home'),$_smarty_tpl);?>
" target="frame" title="首页">首页</a></li>
	 		<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'about'),$_smarty_tpl);?>
" target="frame" title="公司简介">公司简介</a></li>
	 		<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'news'),$_smarty_tpl);?>
" target="frame" title="新闻中心">新闻中心</a></li>
	 		<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'product'),$_smarty_tpl);?>
" target="frame" title="产品中心" >产品中心</a></li>
	 		<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'project'),$_smarty_tpl);?>
" target="frame" title="经典案例">经典案例</a></li>
	 		<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'hiring'),$_smarty_tpl);?>
" target="frame" title="人才招聘">人才招聘</a></li>
	 		<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'talk'),$_smarty_tpl);?>
" target="frame" title="交流中心">交流中心</a></li>
	 		<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'map'),$_smarty_tpl);?>
" target="frame" title="联系我们">联系我们</a></li>
	 	</lu>	
	</div>
	<iframe id="win" name="frame"  src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'home'),$_smarty_tpl);?>
" 
			width="100%" height="600px" frameborder="0" border="0" 
			marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes" >
	</iframe>
	<div id="down">
		<div id="scrollbar">
			<marquee direction="left" align="center" onmouseout="this.start()" onmouseover="this.stop()" 
			scrollamount="4" scrolldelay="1" behavior="scroll">
			<?php echo $_smarty_tpl->getVariable('notice')->value;?>

			</marquee>
		</div>
		<div id="downtop">
			邮箱：hfkeding@sina.com 电话：0551-65336059
		</div>
		<div id="downcenter">
			Copyright &copy; 2015 All Rights Reserved 合肥科鼎电气有限公司
		</div>
	</div>
</div>
<ul id="side-bar" class="side-pannel side-bar">
  <a href="javascript:;" class="gotop" style="display:none;"><s class="g-icon-top"></s></a>
  <a href="http://wpa.qq.com/msgrd?v=3&uin=2695975547&site=www.hfkeding.cn&menu=yes" src="http://wpa.qq.com/pa?p=2::52" target="_blank" class="text"><s class="g-icon-qq1"></s><span>在线咨询</span></a>
  <a href="#" target="_blank" class="text weibo"><s class="g-icon-weibo1"></s><span>微博</span></a>
  <a href="javascript:;" class="qr"><s class="g-icon-qr1"></s><i></i></a>
</ul>
<script>
	
	$(function(){
		$(window).scroll(function(){
			if($(window).scrollTop()>100){
				$("#side-bar .gotop").fadeIn();	
			}
			else{
				$("#side-bar .gotop").hide();
			}
		});
		$("#side-bar .gotop").click(function(){
			$('html,body').animate({'scrollTop':0},500);
		});
	});
	
	// 计算页面的实际高度，iframe自适应会用到
	function calcPageHeight(doc) {
	  var cHeight = Math.max(doc.body.clientHeight, doc.documentElement.clientHeight);
	  var sHeight = Math.max(doc.body.scrollHeight, doc.documentElement.scrollHeight);
	  var height  = Math.max(cHeight, sHeight);
	  return height;
	}
	var ifr = document.getElementById('win');
	ifr.onload = function() {
	  var iDoc = ifr.contentDocument;
	  var height = calcPageHeight(iDoc);
	  ifr.style.height = height + 'px';
	}
	
	
	$(function(){
	$('#slides').slides({
		preload: false,
		play: 5000,
		pause: 2500,
		hoverPause: true,
		animationStart: function(){
			$('.caption').animate({
				bottom:-35
			},100);
		},
		animationComplete: function(current){
			$('.caption').animate({
				bottom:0
			},200);
			if (window.console && console.log) {
				// example return of current slide number
				console.log(current);
			};
		}
	});
	});

</script>
</body>
</html>
		