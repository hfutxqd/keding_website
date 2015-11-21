<?php /* Smarty version Smarty-3.0.8, created on 2015-08-19 11:27:41
         compiled from "F:\public_html\keding\new/tpl\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1688155d44c0d3d8d33-62240110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41ec5a7fab58faceaf4f2347d3547e4b4bd3edd5' => 
    array (
      0 => 'F:\\public_html\\keding\\new/tpl\\index.html',
      1 => 1439976457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1688155d44c0d3d8d33-62240110',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include 'F:\public_html\keding\new\SpeedPHP\Drivers\Smarty\plugins\modifier.truncate.php';
?><!DOCTYPE html>
<head>
<link rel="shortcut icon" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset="utf8" />
<meta name="description" content="合肥科鼎电气有限公司批量生产各种类型的避雷器以及避雷器在线监测仪。" />
<meta name="Keywords" content="智能数字式避雷器在线监测仪,合肥避雷器，避雷器,合肥科鼎电气有限公司，避雷器在线监测仪，科鼎，合肥科鼎，氧化锌避雷器" />
<title>合肥科鼎电气有限公司</title>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/slides.min.jquery.js"></script>
<script type="text/javascript" src="js/frame_sub.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<link rel="stylesheet" href="css/reset.css"/>
<link rel="stylesheet" href="css/index.css"/>
</head>
<body>
<div id="index_main">
	<div id="slides">
	    <div class="slides_container" style="overflow:hidden">
	      <div> <a href="#" target="frame" title="科鼎电气" target="_blank"><img src="img/0.jpg"/></a> </div>
	      <div> <a href="#" target="frame" title="KT-DTMT避雷器在线监测仪" target="_blank"><img src="img/1.jpg"/></a> </div>
	      <div> <a href="#" target="frame" title="锐意进取" target="_blank"><img src="img/2.jpg"/></a> </div>
	      <div> <a href="#" target="frame" title="诚信立足" target="_blank"><img src="img/3.jpg"/></a> </div>
	    </div>
	</div>
	<div id="index_content">
		<div id="content_box1"><img class="icon" src="img/titleIcon.jpg"/>
		<b><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'news'),$_smarty_tpl);?>
">新闻中心</a></b>
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'news'),$_smarty_tpl);?>
" style="float:right">更多>></a>
		<lu>
			<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('news')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
				<li><img src="img/list_icon.png"/><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'article','type'=>'news','id'=>$_smarty_tpl->tpl_vars['one']->value['id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['one']->value['title'],13,'..');?>
</a>
					<span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['one']->value['time'],10,'');?>
</span></li><br>
			<?php }} ?>
		</lu>
		</div>
		<div id="content_box2"><img class="icon" src="img/titleIcon.jpg"/><b><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'product'),$_smarty_tpl);?>
">产品中心</a></b>
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'product'),$_smarty_tpl);?>
" style="float:right">更多>></a>
		<lu>
			<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('product')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
				<li><img src="img/list_icon.png"/><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'article','type'=>'products','id'=>$_smarty_tpl->tpl_vars['one']->value['id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['one']->value['title'],12,'..');?>
</a>
					<span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['one']->value['time'],10,'');?>
</span></li><br>
			<?php }} ?>
		</lu>
		</div>
		<div id="content_box3"><img class="icon" src="img/titleIcon.jpg"/><b><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'project'),$_smarty_tpl);?>
">经典案例</a></b>
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'project'),$_smarty_tpl);?>
" style="float:right">更多>></a>
			<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
				<li><img src="img/list_icon.png"/><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'article','type'=>'projects','id'=>$_smarty_tpl->tpl_vars['one']->value['id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['one']->value['title'],12,'..');?>
</a>
					<span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['one']->value['time'],10,'');?>
</span></li><br>
			<?php }} ?>
		</div>
		<div id="content_box4"><img class="icon" src="img/titleIcon.jpg"/><b><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'hiring'),$_smarty_tpl);?>
">人才招聘</a></b>
		<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'hiring'),$_smarty_tpl);?>
" style="float:right">更多>></a>
		<lu>
			<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hiring')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
				<li><img src="img/list_icon.png"/><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'article','type'=>'hirings','id'=>$_smarty_tpl->tpl_vars['one']->value['id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['one']->value['title'],12,'..');?>
</a>
					<span><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['one']->value['time'],10,'');?>
</span></li><br>
			<?php }} ?>
		</lu>
		</div>
	</div>
</div>
</div>
<script>
	function calcPageHeight(doc) {
        var cHeight = Math.max(doc.body.clientHeight, doc.documentElement.clientHeight);
        var sHeight = Math.max(doc.body.scrollHeight, doc.documentElement.scrollHeight);
        var height  = Math.max(cHeight, sHeight);
        return height;
    }
   	parent.document.getElementById('win').style.height = 650 + 'px';
</script>
</body>
</html>