<?php /* Smarty version Smarty-3.0.8, created on 2015-08-05 05:29:59
         compiled from "E:\wamp\www\keding\new/tpl\talk.html" */ ?>
<?php /*%%SmartyHeaderCode:720455c18337c8a3d9-36432220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf6fa7820492c0b63b9a1f07d86fc4f0199249b1' => 
    array (
      0 => 'E:\\wamp\\www\\keding\\new/tpl\\talk.html',
      1 => 1438745398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '720455c18337c8a3d9-36432220',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<head>
<link rel="shortcut icon" href="favicon.ico">
<meta charset="UTF8">
<meta name="description" content="合肥科鼎电气有限公司批量生产各种类型的避雷器以及避雷器在线监测仪。" />
<meta name="Keywords" content="智能数字式避雷器在线监测仪,合肥避雷器，避雷器,合肥科鼎电气有限公司，避雷器在线监测仪，科鼎，合肥科鼎，氧化锌避雷器" />
<title>合肥科鼎电气有限公司</title>
<script src="js/jquery-1.4.4.min.js"></script>
<script src="js/slides.min.jquery.js"></script>
<link rel="stylesheet" href="css/talk.css"/>
</head>
<body>
<div id="talk_main">
	<div id="talk_title">
	</div>
	<div id="new_message">
		想与我们交流？请<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'new_message'),$_smarty_tpl);?>
" target="frame">发布留言</a>
	</div>
	<div id="talk_content">
		<lu>
			<?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
				<li><?php echo $_smarty_tpl->tpl_vars['one']->value['content'];?>
<br><font>留言时间：<?php echo $_smarty_tpl->tpl_vars['one']->value['time'];?>
</font>
					<?php if ($_smarty_tpl->getVariable('reply')->value[$_smarty_tpl->tpl_vars['one']->value['id']]){?>
						<div id="talk_reply">
							回复：<br>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('reply')->value[$_smarty_tpl->tpl_vars['one']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
								<?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
<br>
								<span><?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>
</span><br>
							<?php }} ?>
						</div>
					<?php }?>
				</li>
			<?php }} ?>
		</lu>
		<div id="talk_footer">
		<?php if ($_smarty_tpl->getVariable('pager')->value){?>
			共有<?php echo $_smarty_tpl->getVariable('pager')->value['total_count'];?>
条，共有<?php echo $_smarty_tpl->getVariable('pager')->value['total_page'];?>
页
			<!--在当前页不是第一页的时候，显示前页和上一页-->
			<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']!=$_smarty_tpl->getVariable('pager')->value['first_page']){?>
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'talk','page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
">首页</a> | 
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'talk','page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
">上一页</a> | 
			<?php }?>
			<!--开始循环页码，同时如果循环到当前页则不显示链接-->
			<?php  $_smarty_tpl->tpl_vars['thepage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['all_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['thepage']->key => $_smarty_tpl->tpl_vars['thepage']->value){
?>
				<?php if ($_smarty_tpl->tpl_vars['thepage']->value!=$_smarty_tpl->getVariable('pager')->value['current_page']){?>
					<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'talk','page'=>$_smarty_tpl->tpl_vars['thepage']->value),$_smarty_tpl);?>
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
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'talk','page'=>$_smarty_tpl->getVariable('pager')->value['next_page']),$_smarty_tpl);?>
">下一页</a> | 
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'talk','page'=>$_smarty_tpl->getVariable('pager')->value['last_page']),$_smarty_tpl);?>
">末页</a>
			<?php }?>
		<?php }?>
		</div>
	</div>
</div>
</div>
<script>
	parent.document.getElementById('win').style.height = 650 + 'px';
</script>
</body>
</html>