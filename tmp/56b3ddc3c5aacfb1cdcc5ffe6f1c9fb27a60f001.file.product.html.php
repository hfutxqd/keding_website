<?php /* Smarty version Smarty-3.0.8, created on 2015-08-06 04:07:49
         compiled from "E:\wamp\www\keding\new/tpl\product.html" */ ?>
<?php /*%%SmartyHeaderCode:499855c2c1754a7613-22233162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56b3ddc3c5aacfb1cdcc5ffe6f1c9fb27a60f001' => 
    array (
      0 => 'E:\\wamp\\www\\keding\\new/tpl\\product.html',
      1 => 1438826833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '499855c2c1754a7613-22233162',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include 'E:\wamp\www\keding\new\SpeedPHP\Drivers\Smarty\plugins\modifier.truncate.php';
?><!DOCTYPE html>
<head>
<link rel="shortcut icon" href="favicon.ico">
<meta charset="UTF8">
<meta name="description" content="合肥科鼎电气有限公司批量生产各种类型的避雷器以及避雷器在线监测仪。" />
<meta name="Keywords" content="智能数字式避雷器在线监测仪,合肥避雷器，避雷器,合肥科鼎电气有限公司，避雷器在线监测仪，科鼎，合肥科鼎，氧化锌避雷器" />
<title>合肥科鼎电气有限公司</title>
<script src="js/jquery-1.4.4.min.js"></script>
<script src="js/slides.min.jquery.js"></script>
<link rel="stylesheet" href="css/product.css"/>
<link rel="stylesheet" href="css/news.css"/>
</head>

<body>
<div id="product_main">
	<div id="product_title">
	</div>
	<div id="news_content">
		<lu>
			<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
				<li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'article','type'=>'products','id'=>$_smarty_tpl->tpl_vars['one']->value['id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['one']->value['title'],32,'...');?>
</a><span><?php echo $_smarty_tpl->tpl_vars['one']->value['time'];?>
</span></li>
			<?php }} ?>
		</lu>
		<div id="news_footer">
		<?php if ($_smarty_tpl->getVariable('pager')->value){?>
			共有<?php echo $_smarty_tpl->getVariable('pager')->value['total_count'];?>
条，共有<?php echo $_smarty_tpl->getVariable('pager')->value['total_page'];?>
页
			<!--在当前页不是第一页的时候，显示前页和上一页-->
			<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']!=$_smarty_tpl->getVariable('pager')->value['first_page']){?>
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'product','page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
">首页</a> | 
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'product','page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
">上一页</a> | 
			<?php }?>
			<!--开始循环页码，同时如果循环到当前页则不显示链接-->
			<?php  $_smarty_tpl->tpl_vars['thepage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['all_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['thepage']->key => $_smarty_tpl->tpl_vars['thepage']->value){
?>
				<?php if ($_smarty_tpl->tpl_vars['thepage']->value!=$_smarty_tpl->getVariable('pager')->value['current_page']){?>
					<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'product','page'=>$_smarty_tpl->tpl_vars['thepage']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</a>
				<?php }else{ ?>
					<b><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</b>
				<?php }?>
			<?php }} ?>
			<!--在当前页不是最后一页的时候，显示下一页和后页-->
			<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']!=$_smarty_tpl->getVariable('pager')->value['last_page']){?>
			 | 
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'product','page'=>$_smarty_tpl->getVariable('pager')->value['next_page']),$_smarty_tpl);?>
">下一页</a> | 
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'product','page'=>$_smarty_tpl->getVariable('pager')->value['last_page']),$_smarty_tpl);?>
">末页</a>
			<?php }?>
		<?php }?>
		</div>
	</div>
</div>
<script>
	parent.document.getElementById('win').style.height = 650 + 'px';
</script>
</body>
</html>